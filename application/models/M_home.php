<?php

class M_home extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('kategori', 'kategori.id = pegawai.kategori_id', 'left');
        $this->db->order_by('pegawai.id_pegawai', 'desc');
        return $this->db->get('')->result();
    }

    public function get_all_data_kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->order_by('id', 'desc');
        return $this->db->get('')->result();
    }
    
    public function kategori($id)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('id', $id);
        return $this->db->get('')->row();
    }
    
    public function get_all_data_dokter($kategori_id)
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('kategori', 'kategori.id = pegawai.kategori_id', 'left');
        $this->db->where('pegawai.kategori_id', $kategori_id);
        return $this->db->get('')->result();
    }
}
