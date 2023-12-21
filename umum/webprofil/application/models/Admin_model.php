<?php
defined('BASEPATH') or exit('No direct scriot access allowed');

class Admin_Model extends CI_Model
{

    public function hapusDataRole($Role)
    {
        $this->db->where('id', $Role);
        $this->db->delete('user_role');
    }
}
