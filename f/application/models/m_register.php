<?php

class M_register extends CI_Model
{
	function input_member($data, $table)
	{
		$this->db->insert($table, $data);
	}
}