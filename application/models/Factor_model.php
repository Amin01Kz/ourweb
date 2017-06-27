<?php

class Factor_model extends CI_Model {

    public function check_exist($code){
        $query = $this->db->get_where('factors', [
            'code'  => $code
        ]);

        if($query->num_rows() > 0){
            if($query->result()[0]->paid){
                return ["paid"];
            }
            // factor information client name, date
            $factor_data = $query->result()[0];

            // factor items information 
            $items_data  = $this->db->get_where('factor_items', [
                'factor_id'  => $factor_data->id
            ])->result()[0];
            return ["not_paid", $factor_data, $items_data];
        }
        return ["not_exist"];
    }
}