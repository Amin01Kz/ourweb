<?php

class Home_model extends CI_Model {

    public function insert_contactUs($data) {
        return $this->db->insert('contactus', $data);
    }
}