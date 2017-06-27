<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FactorController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($code)
	{
		$this->load->helper('url');
		$this->load->model('Factor_model');
		$factor = $this->Factor_model->check_exist([
            'code'  => $code
        ]);

		switch ($factor[0]) {
			case 'not_exist':
				show_404();
				break;
			case 'not_paid':
				if( !is_null($this->input->post('btn')) ){
					$subTotal = 0;
					foreach ($factor[2] as $row) {
						$subTotal += $row->price;
					}
					$parameters = [ 
                		'webgate_id'    => '20' ,
                		'amount'        => ($subTotal * 10) ,// rial
                		'CallbackURL'   => base_url().'factor/payback' ,
                		'plugin'        => 'other' ,
                		'order_id'      => $factor[1]->id ,
                		'phone'         => $factor[1]->phone ,
                		'email'			=> 'test@e.com',
                		'Description'   => ''  
            		];
            		try {
			        	$client = new \SoapClient('http://startpay.ir/webservice/?wsdl' , 
			        			[
			        				'soap_version'	=> 'SOAP_1_1',
			        				'cache_wsdl'	=> WSDL_CACHE_NONE,
			        				'encoding'		=> 'UTF-8'
			        			]
			        		);
			            $result = $client->Payment($parameters);
			        }
			        catch (Exception $e) { 
			            echo 'Error'. $e->getMessage();
			        }
			        if( isset($result) && $result > 0 ){
			            redirect('http://startpay.ir/?tid='.$result);
			        }
			        else
			            show_404();
				}
				else
				$this->load->view('checkout', [
					'factor'	=> $factor[1],
					'items'		=> $factor[2],
				]);
				break;
			case 'paid':
				// return view paid
				$this->load->view('checkout', [
					'factor'	=> $factor[1],
					'items'		=> $factor[2],
					'jtime'		=> 'فعلا وجود ندارد'
				]);
				break;
			default:
				show_404();
				break;
		}
	}

	public function payback(){
		$this->load->helper('url');
		if( !is_null($this->input->post('status')) )
        {
            $order_id   = $this->input->post('order_id');
            $tran_id    = $this->input->post('tran_id');
            $amount     = $this->input->post('amount');
            $status     = $this->input->post('status');
            $refcode    = $this->input->post('refcode');
            
            if($status == 'paid')   
            {
                $parameters = [
                    'webgate_id'    => '20',
                    'tran_id'       => $tran_id,
                    'amount'        => $amount 
                ];
                try {
                    $client = new \SoapClient('http://startpay.ir/webservice/?wsdl' , 
                    	[
                    		'soap_version'	=> 'SOAP_1_1',
                    		'cache_wsdl'	=> WSDL_CACHE_NONE,
                    		'encoding'		=> 'UTF-8'
                    	]
                    	);
                    $result = $client->PaymentVerification($parameters);
                }catch (Exception $e) { return 'Error'. $e->getMessage();  }
        
                if ($result == 1){
                	$this->load->model('Factor_model');
                	$this->Factor_model->update($order_id, ['paid'	=> 1]);
                	$code = $this->Factor_model->get_factor(['id' => $order_id])->code;
                	redirect(base_url('factor/'.$code));
                }
                else
                	echo "ناموفق";
            }
            else
            	echo "ناموفق";
        }
        else
            echo "ناموفق";
	}
}