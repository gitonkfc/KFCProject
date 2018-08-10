<?php

class Dbpetugas_model extends CI_Model
{

     public function getdata_petugas()
     {
          return $this->db->get("user");
     }
     public function edit_data($where, $table)
     {
     	return $this->db->get_where($table,$where);
     }

}

?>