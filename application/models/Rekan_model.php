<?php

class Rekan_model extends CI_Model
{
    private $_table = "kerjasama";
    public function get(){
        return $this->db->get('kerjasama')->result();
    }

    public function count(){
		return $this->db->count_all($this->_table);
	}
}