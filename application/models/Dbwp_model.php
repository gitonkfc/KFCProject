<?php

class Dbwp_model extends CI_Model
{

    public function getdata_wp()
    {
        return $this->db->get("data_wp");
    }
    
    public function edit_data($where, $table)
    {
    	return $this->db->get_where($table,$where);
    }
    
    public function jenis_pelayanan()
     {
    	$this->db->order_by('no_pel', 'ASC');
        $query = $this->db->get('jenis_pelayanan');
        return ($query->result_array());
     }

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
    public function input_data($data,$table)
    {
        return $this->db->insert($table,$data);

    }

    public function get_last_nolayan()
    {
        $this->db->select_max('no_layan', 'maxKode');
        $query = $this->db->get('data_wp');
        return ($query->result_array());
    }


}

?>