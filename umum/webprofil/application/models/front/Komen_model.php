<?php

class Komen_model extends CI_Model
{
	private $_table = "komentar";

	public function insert($data)
	{
		if(!$data){
			return;
		}

		return $this->db->insert($this->_table, $feedback);
	}
}