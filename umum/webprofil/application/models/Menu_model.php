<?php
defined('BASEPATH') or exit('No direct scriot access allowed');

class Menu_Model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`. `menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function hapusDataSubMenu($SubMenu)
    {
        $this->db->where('id', $SubMenu);
        $this->db->delete('user_sub_menu');
    }

    public function hapusDataMenu($Menu)
    {
        $this->db->where('id', $Menu);
        $this->db->delete('user_menu');
    }

    public function getMenuById($Menu)
    {
        return $this->db->get_where('user_menu', ['id' => $Menu])->row_array();
    }

    public function ubahMenu()
    {
        $data = [
            "menu" => $this->input->post('menu', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }
}
