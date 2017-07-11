<?php

class Home_model extends CI_Model {

    public function insert_contactUs() {

        return $this->db->insert('contactus', [
            'subject' => $this->input->post('subject'),
            'name'    => $this->input>post('name'),
            'email'   => $this->input>post('email'),
            'text'    => $this->input->post('text'),
        ]);
        
    }
}