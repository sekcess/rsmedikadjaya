<?php

class Kategori_model extends CI_Model
{
    private $_table = "kategori";
    public function get(){
        return $this->db->get('kategori')->result();
    }

    public function count(){
		return $this->db->count_all($this->_table);
	}
}