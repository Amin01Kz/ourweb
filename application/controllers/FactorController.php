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
		$this->load->model('Factor_model');
		$factor = $this->Factor_model->check_exist($code);
		switch ($factor[0]) {
			case 'not_exist':
				show_404();
				break;
			case 'not_paid':
				// factor_data in $factor[1] 
				// items_data in $factor[2] 
				//echo "pardakht nashode";
				$this->load->view('checkout', [
					'code'			=> $factor[1]->code,
					'name'			=> $factor[1]->name,
					'phone'			=> $factor[1]->phone,
					'receipt_code'  => $factor[1]->receipt_code,
					'items_data'	=> $factor[2],
					'jtime' 		=> $this->jdf->jdate('j F Y', time())
				]);
				break;
			case 'paid':
				// return view paid
				$this->load->view('checkout', [
					'code'			=> $factor[1]->code,
					'name'			=> $factor[1]->name,
					'phone'			=> $factor[1]->phone,
					'receipt_code'  => $factor[1]->receipt_code,
					'items_data'	=> $factor[2],
					'jtime' 		=> 'فعلا وجود ندارد'
				]);
				break;
			default:
				$this->load->view('errors/html/error_404');
				break;
		}
	}
}