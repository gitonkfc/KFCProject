<?php

class Tambah_model extends CI_Model
{

     public function jenis_pelayanan()
     {
        $query = $this->db->get("jenis_pelayanan");
        return ($query->result_array());
     }

     public function input_data($data,$table)
     {
     	$this->db->insert($table,$data);
     }

     public function get_last_nolayan()
     {
     	$this->db->select_max('no_layan', 'maxKode');
     	$query = $this->db->get('data_wp');
     	return ($query->result_array());
     }

}

?>