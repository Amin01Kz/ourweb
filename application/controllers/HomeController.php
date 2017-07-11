<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

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
	public function index()
	{
		$this->load->view('home');
	}

	public function contactUs() {

		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'trim|required', [
			'required' => 'موضوع پیام را وارد نکرده اید'
		]);
		$this->form_validation->set_rules('text', 'Text', 'trim|required', [
			'required' => 'پیام خالی است'
		]);
		$this->form_validation->set_rules('name', 'Name', 'trim|required', [
			'required' => 'نام شما وارد نشده است'
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'ایمیل وارد نشده است'
		]);

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('home', $data);
		} else {
			$this->load->model('Home_model');
			
			$flag = $this->news_model->insert_contactUs();

			$data['msg'] = 'پیام شما با موفقیت ارسال شد';
			if($flag) 
				return $this->load->view('home', $data);
			else
				return $this->load->view('errors/error_db');
		}

	}
}
