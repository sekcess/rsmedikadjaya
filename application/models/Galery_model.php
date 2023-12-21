<?php

class Galery_model extends CI_Model
{
    public function profil()
    {
        return $this->db->get("gallery")->result_array();
    }

    public function UpdateProfil($id)
    {
        $profil = $this->input->post('profil');

        $this->db->set('profile', $profil);

        $this->db->where('id', $id);
        $this->db->update('gallery');
    }

    public function UpdateRadiologi($radiologi, $id)
    {
        $this->db->set('radiologi', $radiologi);

        $this->db->where('id', $id);
        $this->db->update('gallery');
    }

    public function UpdatePoliklinik($poliklinik, $id)
    {
        $this->db->set('poliklinik', $poliklinik);

        $this->db->where('id', $id);
        $this->db->update('gallery');
    }

    public function UpdateIgdIcu($igdicu, $id)
    {
        $this->db->set('igdicu', $igdicu);

        $this->db->where('id', $id);
        $this->db->update('gallery');
    }

    public function UpdatePMedis($p_medis, $id)
    {
        $this->db->set('p_medis', $p_medis);

        $this->db->where('id', $id);
        $this->db->update('gallery');
    }

    public function UpdateRInap($r_inap, $id)
    {
        $this->db->set('r_inap', $r_inap);

        $this->db->where('id', $id);
        $this->db->update('gallery');
    }
}
