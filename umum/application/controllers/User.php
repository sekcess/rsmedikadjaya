<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboard_model', 'dashboard');

        if (empty($this->session->userdata('id_user'))) {
            redirect(base_url("auth/block"));
        }
    }

    public function index()
    {

        $judul = [
            'title' => 'Management User',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('user')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->db->where(['id_user' => $id]);
        $this->db->delete('user');
        $this->session->set_flashdata('success', 'Berhasil Dihapus!');
        redirect(base_url('user'));
    }

    public function tambah()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password]');
        $this->form_validation->set_rules('level', 'Hak Akses', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management User',
                'sub_title' => 'Janji Temu Masuk'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('user/tambah');
            $this->load->view('templates/footer');
        } else {
            $username =  $this->input->post("username", TRUE);
            $password =  $this->input->post("password", TRUE);
            $level =  $this->input->post("level", TRUE);

            $config['upload_path']          = './uploads/admin';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {

                $data = array('upload_data' => $this->upload->data());
                $foto = $data['upload_data']['file_name'];

                $save = [
                    'foto' => $foto,
                    'username' => $username,
                    'password' => $password,
                    'level' => $level,

                ];


                $this->db->insert('user', $save);
                $this->session->set_flashdata('success', 'User Berhasil Ditambahkan!');
                redirect(base_url('user'));
            } else {
                $this->session->set_flashdata('danger', 'Data belum ditambahkan!');
                redirect(base_url("pegawai/tambah"));
            }
        }
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password]');
        $this->form_validation->set_rules('level', 'Hak Akses', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management User',
                'sub_title' => 'Janji Temu Masuk'
            ];
            $data['user'] = $this->db->get_where('user', ['id_user' => $id])->row_array();

            $this->session->set_flashdata('success', 'User Berhasil Update!');
            $this->load->view('templates/header', $judul);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $username =  $this->input->post("username", TRUE);
            $password =  $this->input->post("password", TRUE);
            $level =  $this->input->post("level", TRUE);

            $config['upload_path']          = './uploads/admin';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $data = $this->db->get_where('user', ['id_user' => $id])->row_array();
                unlink("./uploads/admin/" . $data['foto']);

                $data = array('upload_data' => $this->upload->data());
                $foto = $data['upload_data']['file_name'];

                $update = [
                    'foto' => $foto,
                    'username' => $username,
                    'password' => $password,
                    'level' => $level,

                ];

                $this->db->where('id_user', $id);
                $this->db->update('user', $update);

                $this->session->set_flashdata('success', 'Photo User Berhasil Update!');
                redirect(base_url('user'));
            } else {
                $update = [
                    'username' => $username,
                    'password' => $password,
                    'level' => $level,

                ];
                $this->db->where('id_user', $id);
                $this->db->update('user', $update);

                $this->session->set_flashdata('success', 'User Berhasil Update!');
                redirect(base_url('user'));
            }
        }
    }
}
