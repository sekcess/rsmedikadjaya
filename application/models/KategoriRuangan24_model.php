<?php

class KategoriRuangan24_model extends CI_Model
{
    private $_table = "kategori_ruangan24";
    public function get(){
        return $this->db->get('kategori_ruangan24')->result();
    }

    public function count(){
		return $this->db->count_all($this->_table);
	}
}