<?php

class Pengajuan_track_model extends CI_Model
{
    public function insert_p_janji($data)
    {
        $query = $this->db->insert('pengajuan_janji', $data);
        if ($query) {
            return true;
            return $query;
        } else {
            return false;
        }
    }

    public function findById($id)
    {
        $query = $this->db->get_where('pengajuan_janji', ['id' => $id])->row_array();
        return $query;
    }

    public function showById($id)
    {
        $this->db->select('*');
        $this->db->join('pasien', 'pasien.nik=pengajuan_janji.NIK');
        $query = $this->db->get_where('pengajuan_janji', ['id' => $id])->row_array();
        return $query;
    }
}
