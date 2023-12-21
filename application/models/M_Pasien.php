<?php

class M_Pasien extends CI_Model
{
    function search_nik($nik)
    {
        $this->db->like('nik', $nik, 'both');
        $this->db->order_by('nik', 'ASC');
        $this->db->limit(10);
        return $this->db->get('pasien')->result();
    }

    public function cek_pasien($nik)
    {
        return $this->db->get_where('pasien', array('nik' => $nik));
    }
}
