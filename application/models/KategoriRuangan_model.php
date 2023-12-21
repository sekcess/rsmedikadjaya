<?php

class KategoriRuangan_model extends CI_Model
{
    private $_table = "kategori_ruangan";
    public function get(){
        return $this->db->get('kategori_ruangan')->result();
    }

    public function count(){
		return $this->db->count_all($this->_table);
	}
}