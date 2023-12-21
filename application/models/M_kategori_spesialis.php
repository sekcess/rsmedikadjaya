<?php

class M_kategori_spesialis extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('kategori_spesialis', 'kategori_spesialis.id_spesialis = pegawai.kategori_spesialis_id', 'left');
        $this->db->order_by('pegawai.id_pegawai', 'desc');
        return $this->db->get('')->result();
    }

    public function get_all_data_kategori_spesialis()
    {
        $this->db->select('*');
        $this->db->from('kategori_spesialis');
        $this->db->order_by('id_spesialis', 'desc');
        return $this->db->get('')->result();
    }
    
    public function kategori_spesialis($id_spesialis)
    {
        $this->db->select('*');
        $this->db->from('kategori_spesialis');
        $this->db->where('id_spesialis', $id_spesialis);
        return $this->db->get('')->row();
    }
    
    public function get_all_data_spesialis($kategori_spesialis_id)
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('kategori_spesialis', 'kategori_spesialis.id_spesialis = pegawai.kategori_spesialis_id', 'left');
        $this->db->where('pegawai.kategori_spesialis_id', $kategori_spesialis_id);
        return $this->db->get('')->result();
    }
}
