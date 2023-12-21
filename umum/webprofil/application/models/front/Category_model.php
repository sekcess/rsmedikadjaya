<?php

class Category_model extends CI_Model
{
    private $_table = "category";
    public function get(){
        return $this->db->get('category')->result();
    }

    public function count(){
		return $this->db->count_all($this->_table);
	}
}