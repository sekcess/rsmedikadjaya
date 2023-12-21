<?php
defined('BASEPATH') or exit('No direct scriot access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Menu_model', 'menu');
    }

    public function index()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Menu Management',
                'judul' => '<b>MENU</b>',
                'isi' => 'menu/index',
                'user' => $this->db->get_where('user', ['email' =>
                $this->session->userdata('email')])->row_array(),
                'menu' => $this->db->get('user_menu')->result_array()
            );
            $this->load->view('template/wrapper', $data);
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('flash', 'Ditambahkan!');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Sub Menu Management',
                'judul' => '<b>SUB MENU</b>',
                'isi' => 'menu/submenu',
                'user' => $this->db->get_where('user', ['email' =>
                $this->session->userdata('email')])->row_array(),
                'SubMenu' => $this->menu->getSubMenu(),
                'menu' => $this->db->get('user_menu')->result_array()
            );
            $this->load->view('template/wrapper', $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('flash', 'Ditambahkan!');
            redirect('menu/submenu');
        }
    }

    public function hapusSubMenu($SubMenu)
    {
        $this->menu->hapusDataSubMenu($SubMenu);
        $this->session->set_flashdata('flash', 'Dihapus!');
        redirect('menu/submenu');
    }

    public function hapusDataMenu($Menu)
    {
        $this->menu->hapusDataMenu($Menu);
        $this->session->set_flashdata('flash', 'Dihapus!');
        redirect('menu');
    }

    public function ubahMenu($Menu)
    {
        $this->form_validation->set_rules('menu', 'menu', 'required');

        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Menu Management',
                'judul' => '<b>EDIT MENU</b>',
                'isi' => 'menu/edit_menu',
                'user' => $this->db->get_where('user', ['email' =>
                $this->session->userdata('email')])->row_array(),
                'menu' => $this->menu->getMenuById($Menu)
            );
            $this->load->view('template/wrapper', $data);
        } else {
            $this->menu->ubahMenu();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('menu');
        }
    }

    public function ubahSubMenu($SubMenu)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Sub Menu Management',
                'judul' => '<b>SUB MENU</b>',
                'isi' => 'menu/edit_submenu',
                'user' => $this->db->get_where('user', ['email' =>
                $this->session->userdata('email')])->row_array(),
                'SubMenu' => $this->menu->getSubMenu(),
                'menu' => $this->db->get('user_menu')->result_array()
            );
            $this->load->view('template/wrapper', $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_sub_menu', $data);
            $this->session->set_flashdata('flash', 'Diubah!');
            redirect('menu/submenu');
        }
    }
}
