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
				// return view not_exist
				echo "vojod nadare";
				break;
			case 'not_paid':
				// return factor view
				// factor_data in $factor[1] 
				// items_data in $factor[2] 
				echo "pardakht nashode";
				break;
			case 'paid':
				// return view paid
				echo "pardakht shode";
				break;
			default:
				# code...
				break;
		}
	}
}