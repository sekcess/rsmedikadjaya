<?php

class Kategori_spesialis_model extends CI_Model
{
    private $_table = "kategori_spesialis";
    public function get(){
        return $this->db->get('kategori_spesialis')->result();
    }

    public function count(){
		return $this->db->count_all($this->_table);
	}
}