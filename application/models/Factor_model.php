<?php

class Factor_model extends CI_Model {

    public function check_exist($data){
        $query = $this->db->get_where('factors', $data);

        if($query->num_rows() > 0){
            // factor information client name, date
            $factor_data = $query->result()[0];

            // factor items information 
            $items_data  = $this->db->get_where('factor_items', [
                'factor_id'  => $factor_data->id
            ])->result();

            if($query->result()[0]->paid){
                return ["paid", $factor_data, $items_data];
            }
            return ["not_paid", $factor_data, $items_data];
        }
        return ["not_exist"];
    }

    public function get_factor($data){
        $query = $this->db->get_where('factors', $data)->result()[0];
        return $query;
    }

    public function update($id, $data){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('factors');
    }
}