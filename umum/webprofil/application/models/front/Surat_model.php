<?php

class Surat_model extends CI_Model
{
    private $_table = "surat";
    public function get(){
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function count(){
		return $this->db->count_all($this->_table);
	}

    public function insert_p_surat($data)
    {
        $query= $this->db->insert('permohonan',$data);
        if($query){
            return true;
            return $query;
        }else{
            return false;
        }
    }

    public function findById($id)
    {
        $query = $this->db->get_where('permohonan', ['idpermohonan' => $id])->row_array();
        return $query;
    }

    public function showById($id)
    {
        $this->db->select('*');
        // $this->db->join('penduduk','penduduk.nik=pengajuan_surat.NIK');
        $query = $this->db->get_where('permohonan', ['idpermohonan' => $id])->row_array();
        return $query;
    }
}

