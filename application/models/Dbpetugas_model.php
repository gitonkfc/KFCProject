<?php

class Dbpetugas_model extends CI_Model
{

     public function getdata_petugas()
     {
          return $this->db->get("user");
     }

}

?>