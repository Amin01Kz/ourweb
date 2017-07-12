<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function index() {
        $this->load->view('panel/header');
		$this->load->view('panel/login');
	}

    public function login() {
		$data['title'] = 'ورود به کنترل پنل';
		$this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            if( isset($this->session->userdata['logged_in']) )  {
				$data['title'] = 'کنترل پنل';
				$this->load->view('panel/header', $data);
                $this->load->view('panel/index');
			} else {
				$this->load->view('panel/header', $data);
                $this->load->view('panel/login');
			}
            

            } else {
                $data = [
                    'email'    => $this->input->post('email'),
                    'password' => md5( $this->input->post('password') )
				];

				$this->load->model('User_model');
                if ( $this->User_model->login($data) ) {

					$session_data = ['email' => $data['email'] ];
					$this->session->set_userdata('logged_in', $session_data);
					$data['title'] = 'کنترل پنل';
					$this->load->view('panel/header');
					$this->load->view('panel/index');

                	} else {
						$data['error_msg'] = 'ایمیل یا رمز عبور را اشتباه وارد کرده اید';
						$this->load->view('panel/header', $data);
						$this->load->view('panel/login');
                	}
            }
    }

	public function logout() {
		if(!isset($this->session->userdata['logged_in'])) return show_404();
		$sess_array = ['email' => ''];
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['success_msg'] = 'شما با موفقیت خارج شدید';
		$this->load->view('panel/header');
		$this->load->view('panel/login', $data);
	}

}