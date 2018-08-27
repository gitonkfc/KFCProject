<?php

class Dbpetugas_model extends CI_Model
{

    public function edit_data($where, $table,$column)
    {
    	return $this->db->select('*')->where($column,$where)->get($table)->result();
    }
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
	public function get_last_iduser()
    {
    	$this->db->select_max('id_akun', 'maxKode');
     	$query = $this->db->get('user');
     	return ($query->result_array());
    }
    public function get_join($table1,$table2,$column)
    {
    	$this->db->select('*');
    	$this->db->from($table1);
    	$this->db->join($table2,$column);
    	return $this->db->get();
    }
    public function get_join_where($table1,$table2,$columnjoin,$column1,$where)
    {
    	$this->db->select('*');
    	$this->db->from($table1);
    	$this->db->join($table2,$columnjoin);
    	$this->db->where($column1,$where);
    	return $this->db->get();
    }
    public function transaction_update($where,$data1,$data2)
    {
    	$this->db->trans_start();
		$this->db->where('id_akun', $where);
		$this->db->update('user', $data1);
		$this->db->where('id_akun', $where);
		$this->db->update('printer', $data2);
        $this->db->trans_complete();
        $result = $this->db->trans_status();
    }
    public function transaction_insert($data1,$data2)
    {
    	$this->db->trans_start();
    	$this->db->insert('user',$data1);
    	$this->db->insert('printer',$data2);
        $this->db->trans_complete();
        $result = $this->db->trans_status();
    }
    public function transaction_delete($where)
    {
        $this->db->trans_start();
        $this->db->where('id_akun', $where);
        $this->db->delete('user');
        $this->db->where('id_akun', $where);
        $this->db->delete('printer');
        $this->db->trans_complete();
        $result = $this->db->trans_status();
    }

}

?>