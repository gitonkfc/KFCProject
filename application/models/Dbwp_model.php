<?php

class Dbwp_model extends CI_Model
{

     public function getdata_wp()
     {
          return $this->db->get("data_wp");
     }

}

?>