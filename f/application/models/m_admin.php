<?php

class M_admin extends CI_Model
{

	function obat($table)
	{
		return $this->db->get($table);
	}

	function tambah($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function get_where($where, $table) {
		return $this->db->get_where($table, $where);
	}
	function update($where, $data, $table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function deletedata($where,$table){
		$res = $this->db->delete($where,$table);
		return $res;
	} 

}