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
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function getdata_petugas_byname($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function registrasi_petugas($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function get_last_iduser()
    {
    	$this->db->select_max('id_akun', 'maxKode');
     	$query = $this->db->get('user');
     	return ($query->result_array());
    }

}

?>