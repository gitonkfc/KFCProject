<?php

class Tambah_model extends CI_Model
{

     public function jenis_pelayanan()
     {
        $query = $this->db->get("jenis_pelayanan");
        return ($query->result_array());
     }

}

?>