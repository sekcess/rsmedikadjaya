<?php

class M_ruangan extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('ruangan');
        $this->db->join('kategori_ruangan', 'kategori_ruangan.id = ruangan.kategori_ruangan_id', 'left');
        $this->db->order_by('ruangan.id', 'desc');
        return $this->db->get('')->result();
    }

    public function get_all_data_kategori_ruangan()
    {
        $this->db->select('*');
        $this->db->from('kategori_ruangan');
        $this->db->order_by('id', 'desc');
        return $this->db->get('')->result();
    }
    
    public function kategori_ruangan($id)
    {
        $this->db->select('*');
        $this->db->from('kategori_ruangan');
        $this->db->where('id', $id);
        return $this->db->get('')->row();
    }
    
    public function get_all_data_ruangan($kategori_ruangan_id)
    {
        $this->db->select('*');
        $this->db->from('ruangan');
        $this->db->join('kategori_ruangan', 'kategori_ruangan.id = ruangan.kategori_ruangan_id', 'left');
        $this->db->where('ruangan.kategori_ruangan_id', $kategori_ruangan_id);
        return $this->db->get('')->result();
    }
    
    public function get_all_data24()
    {
        $this->db->select('*');
        $this->db->from('ruangan');
        $this->db->join('kategori_ruangan24', 'kategori_ruangan24.id = ruangan.kategori_ruangan24_id', 'left');
        $this->db->order_by('ruangan.id', 'desc');
        return $this->db->get('')->result();
    }

    public function get_all_data_kategori_ruangan24()
    {
        $this->db->select('*');
        $this->db->from('kategori_ruangan24');
        $this->db->order_by('id', 'desc');
        return $this->db->get('')->result();
    }
    
    public function kategori_ruangan24($id)
    {
        $this->db->select('*');
        $this->db->from('kategori_ruangan24');
        $this->db->where('id', $id);
        return $this->db->get('')->row();
    }
    
    public function get_all_data_ruangan24($kategori_ruangan24_id)
    {
        $this->db->select('*');
        $this->db->from('ruangan');
        $this->db->join('kategori_ruangan24', 'kategori_ruangan24.id = ruangan.kategori_ruangan24_id', 'left');
        $this->db->where('ruangan.kategori_ruangan24_id', $kategori_ruangan24_id);
        return $this->db->get('')->result();
    }
}
