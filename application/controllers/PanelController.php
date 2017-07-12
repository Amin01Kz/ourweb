<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PanelController extends CI_Controller {

	public function index() {
        if( !isset($this->session->userdata['logged_in']) ) {
             $this->load->view('panel/header');
             return $this->load->view('panel/login');
        }
        $data['title'] = 'پنل کاربری';
        $this->load->view('panel/header');
		$this->load->view('panel/index', $data);
	}

}