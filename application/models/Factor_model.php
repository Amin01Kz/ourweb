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

    public function get_factor($id) {
        $query[0] = $this->db->get_where('factors', ['id' => $id])->result()[0];
        $query[1] = $this->db->get_where('factor_items', ['factor_id' => $id])->result();
        return $query;
    }

    public function get_all_factors() {
        return $this->db->get('factors')->result();
    }

    public function delete_by_id($id) {
        $this->db->where('id', $id);
        return $this->db->delete('factors');
    }

    public function update_by_id($id, $data) {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('factors');
    }
}