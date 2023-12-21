<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RuanganAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategoriRuangan_model');
        $this->load->model('kategoriRuangan24_model');

        if (empty($this->session->userdata('id_user'))) {
            redirect(base_url("auth/block"));
        }
    }
    
    public function kategori()
    {

        $judul = [
            'title' => 'Ruangan',
            'sub_title' => 'Kategori Ruangan',
            'kategoris' => $this->kategoriRuangan_model->get()
        ];

        $data['data'] = $this->db->get('kategori_ruangan')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('ruangan/kategori', $data);
        $this->load->view('templates/footer');
    }
    
    public function hapus_kategori($id)
    {

        $data = $this->db->get_where('kategori_ruangan', ['id' => $id])->row_array();

        $this->db->where(['id' => $id]);
        $this->db->delete('kategori_ruangan');
        $this->session->set_flashdata('success', 'Data Kategori Ruangan Berhasil Dihapus!');
        redirect(base_url('ruanganAdmin/kategori'));
    }

    public function tambah_kategori()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Ruangan',
                'sub_title' => 'Kategori Ruangan'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('ruangan/tambah_kategori');
            $this->load->view('templates/footer');
        } else {
            $nama =  $this->input->post("nama", TRUE);

            $save = [
                'nama' => $nama,
            ];

            $this->db->insert('kategori_ruangan', $save);
            $this->session->set_flashdata('success', 'Data Kategori Ruangan Berhasil Ditambahkan!');
            redirect(base_url("ruanganAdmin/kategori"));
        }
    }

    public function edit_kategori($id)
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Ruangan',
                'sub_title' => 'Kategori Ruangan'
            ];

            $data['kategori_ruangan'] = $this->db->get_where('kategori_ruangan', ['id' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('ruangan/edit_kategori', $data);
            $this->load->view('templates/footer');
        } else {

            $nama =  $this->input->post("nama", TRUE);

            $update = [
                'nama' => $nama,
            ];

            $this->db->where('id', $id);
            $this->db->update('kategori_ruangan', $update);

            $this->session->set_flashdata('success', 'Data Kategori Ruangan Berhasil Diupdate!');
            redirect(base_url("ruanganAdmin/kategori"));
        }
    }
    
    public function kategori24()
    {

        $judul = [
            'title' => 'Ruangan',
            'sub_title' => 'Kategori Ruangan 24 Jam',
            'kategoris' => $this->kategoriRuangan24_model->get()
        ];

        $data['data'] = $this->db->get('kategori_ruangan24')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('ruangan/kategori_ruangan24', $data);
        $this->load->view('templates/footer');
    }
    
    public function hapus_kategori24($id)
    {

        $data = $this->db->get_where('kategori_ruangan24', ['id' => $id])->row_array();

        $this->db->where(['id' => $id]);
        $this->db->delete('kategori_ruangan24');
        $this->session->set_flashdata('success', 'Data Kategori Ruangan 24 Jam Berhasil Dihapus!');
        redirect(base_url('ruanganAdmin/kategori24'));
    }

    public function tambah_kategori24()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Ruangan',
                'sub_title' => 'Kategori Ruangan 24 Jam'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('ruangan/tambah_kategori24');
            $this->load->view('templates/footer');
        } else {
            $nama =  $this->input->post("nama", TRUE);

            $save = [
                'nama' => $nama,
            ];

            $this->db->insert('kategori_ruangan24', $save);
            $this->session->set_flashdata('success', 'Data Kategori Ruangan 24 Jam Berhasil Ditambahkan!');
            redirect(base_url("ruanganAdmin/kategori24"));
        }
    }

    public function edit_kategori24($id)
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Ruangan',
                'sub_title' => 'Kategori Ruangan 24 Jam'
            ];

            $data['kategori_ruangan24'] = $this->db->get_where('kategori_ruangan24', ['id' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('ruangan/edit_kategori24', $data);
            $this->load->view('templates/footer');
        } else {

            $nama =  $this->input->post("nama", TRUE);

            $update = [
                'nama' => $nama,
            ];

            $this->db->where('id', $id);
            $this->db->update('kategori_ruangan24', $update);

            $this->session->set_flashdata('success', 'Data Kategori Ruangan 24 Jam Berhasil Diupdate!');
            redirect(base_url("ruanganAdmin/kategori24"));
        }
    }

    public function ruangan()
    {

        $judul = [
            'title' => 'Ruangan',
            'sub_title' => 'Data Ruangan',
            'kategoris' => $this->kategoriRuangan24_model->get(),
            'kategoris2' => $this->kategoriRuangan_model->get()
        ];

        $data['data'] = $this->db->get('ruangan')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('ruangan/ruangan', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_ruangan($id)
    {

        $data = $this->db->get_where('ruangan', ['id' => $id])->row_array();

        unlink("uploads/ruangan/" . $data['foto']);

        $this->db->where(['id' => $id]);
        $this->db->delete('ruangan');
        $this->session->set_flashdata('success', 'Data Ruangan Berhasil Dihapus!');
        redirect(base_url('ruanganAdmin/ruangan'));
    }
    
    public function tambah_ruangan()
    {

        $this->form_validation->set_rules('nama_ruangan', 'Nama Ruangan', 'required|trim');
        $this->form_validation->set_rules('kategori_ruangan_id', 'Kategori Ruangan', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Ruangan',
                'sub_title' => 'Data Ruangan',
                'kategoris' => $this->kategoriRuangan_model->get()
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('ruangan/tambah_ruangan');
            $this->load->view('templates/footer');
        } else {
            $nama_ruangan =  $this->input->post("nama_ruangan", TRUE);
            $kategori_ruangan_id =  $this->input->post("kategori_ruangan_id", TRUE);
            $deskripsi =  $this->input->post("deskripsi", TRUE);

            $config['upload_path']          = './uploads/ruangan';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {

                $this->load->library('image_lib');
                $image_data = $this->upload->data();
                $resized_img = $image_data['file_name'];
                $configer = array(
                                'image_library' => 'gd2',
                                'source_image' => $image_data['full_path'],
                                'maintain_ratio' => FALSE,
                                'width' => 1920,
                                'height' => 1080,
                                // 'master_dim' => 'width',
                                'quality' => '100%',
                                'new_image' => $resized_img
                );

                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();

                $save = [
                    'nama_ruangan' => $nama_ruangan,
                    'foto' => $resized_img,
                    'kategori_ruangan_id' => $kategori_ruangan_id,
                    'deskripsi' => $deskripsi,

                ];

                $this->db->insert('ruangan', $save);
                $this->session->set_flashdata('success', 'Data Ruangan Berhasil Ditambahkan!');
                redirect(base_url("ruanganAdmin/ruangan"));
            } else {
                $this->session->set_flashdata('danger', 'Data Ruangan Belum Ditambahkan!');
                redirect(base_url("ruanganAdmin/tambah_ruangan"));
            }
        }
    }

    public function edit_ruangan($id)
    {

        $this->form_validation->set_rules('nama_ruangan', 'Nama Ruangan', 'required|trim');
        $this->form_validation->set_rules('kategori_ruangan_id', 'Kategori Ruangan', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Ruangan',
                'sub_title' => 'Data Ruangan',
                'kategoris' => $this->kategoriRuangan_model->get()
            ];

            $data['ruangan'] = $this->db->get_where('ruangan', ['id' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('ruangan/edit_ruangan', $data);
            $this->load->view('templates/footer');
        } else {

            $nama_ruangan =  $this->input->post("nama_ruangan", TRUE);
            $kategori_ruangan_id =  $this->input->post("kategori_ruangan_id", TRUE);
            $deskripsi =  $this->input->post("deskripsi", TRUE);

            $config['upload_path']          = './uploads/ruangan';
            $config['allowed_types']        = 'png|jpg|jpeg';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $data = $this->db->get_where('ruangan', ['id' => $id])->row_array();

                $this->load->library('image_lib');
                $image_data = $this->upload->data();
                $resized_img = $image_data['file_name'];
                $configer = array(
                                'image_library' => 'gd2',
                                'source_image' => $image_data['full_path'],
                                'maintain_ratio' => FALSE,
                                'width' => 1920,
                                'height' => 1080,
                                // 'master_dim' => 'width',
                                'quality' => '100%',
                                'new_image' => $resized_img
                );

                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();
                
                unlink("uploads/ruangan/" . $data['foto']);

                $update = [
                    'nama_ruangan' => $nama_ruangan,
                    'foto' => $resized_img,
                    'deskripsi' => $deskripsi,
                    'kategori_ruangan_id' => $kategori_ruangan_id,

                ];

                $this->db->where('id', $id);
                $this->db->update('ruangan', $update);

                $this->session->set_flashdata('success', 'Data Ruangan Berhasil Diupdate!');
                redirect(base_url("ruanganAdmin/ruangan"));
            } else {
                
                $update = [
                    'nama_ruangan' => $nama_ruangan,
                    'kategori_ruangan_id' => $kategori_ruangan_id,
                    'deskripsi' => $deskripsi,

                ];

                $this->db->where('id', $id);
                $this->db->update('ruangan', $update);

                $this->session->set_flashdata('success', 'Data Ruangan Berhasil Diupdate!');
                redirect(base_url("ruanganAdmin/ruangan"));
            }
        }
    }

    public function tambah_ruangan24()
    {

        $this->form_validation->set_rules('nama_ruangan', 'Nama Ruangan', 'required|trim');
        $this->form_validation->set_rules('kategori_ruangan24_id', 'Kategori Ruangan 24 Jam', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Ruangan',
                'sub_title' => 'Data Ruangan',
                'kategoris' => $this->kategoriRuangan24_model->get()
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('ruangan/tambah_ruangan24');
            $this->load->view('templates/footer');
        } else {
            $nama_ruangan =  $this->input->post("nama_ruangan", TRUE);
            $kategori_ruangan24_id =  $this->input->post("kategori_ruangan24_id", TRUE);
            $deskripsi =  $this->input->post("deskripsi", TRUE);

            $config['upload_path']          = './uploads/ruangan';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {

                $this->load->library('image_lib');
                $image_data = $this->upload->data();
                $resized_img = $image_data['file_name'];
                $configer = array(
                                'image_library' => 'gd2',
                                'source_image' => $image_data['full_path'],
                                'maintain_ratio' => FALSE,
                                'width' => 1920,
                                'height' => 1080,
                                // 'master_dim' => 'width',
                                'quality' => '100%',
                                'new_image' => $resized_img
                );

                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();

                $save = [
                    'nama_ruangan' => $nama_ruangan,
                    'foto' => $resized_img,
                    'kategori_ruangan24_id' => $kategori_ruangan24_id,
                    'deskripsi' => $deskripsi,

                ];

                $this->db->insert('ruangan', $save);
                $this->session->set_flashdata('success', 'Data Ruangan Berhasil Ditambahkan!');
                redirect(base_url("ruanganAdmin/ruangan"));
            } else {
                $this->session->set_flashdata('danger', 'Data Ruangan Belum Ditambahkan!');
                redirect(base_url("ruanganAdmin/tambah_ruangan24"));
            }
        }
    }

    public function edit_ruangan24($id)
    {

        $this->form_validation->set_rules('nama_ruangan', 'Nama Ruangan', 'required|trim');
        $this->form_validation->set_rules('kategori_ruangan24_id', 'Kategori Ruangan 24 Jam', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Ruangan',
                'sub_title' => 'Data Ruangan',
                'kategoris' => $this->kategoriRuangan24_model->get()
            ];

            $data['ruangan'] = $this->db->get_where('ruangan', ['id' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('ruangan/edit_ruangan24', $data);
            $this->load->view('templates/footer');
        } else {

            $nama_ruangan =  $this->input->post("nama_ruangan", TRUE);
            $kategori_ruangan24_id =  $this->input->post("kategori_ruangan24_id", TRUE);
            $deskripsi =  $this->input->post("deskripsi", TRUE);

            $config['upload_path']          = './uploads/ruangan';
            $config['allowed_types']        = 'png|jpg|jpeg';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $data = $this->db->get_where('ruangan', ['id' => $id])->row_array();

                $this->load->library('image_lib');
                $image_data = $this->upload->data();
                $resized_img = $image_data['file_name'];
                $configer = array(
                                'image_library' => 'gd2',
                                'source_image' => $image_data['full_path'],
                                'maintain_ratio' => FALSE,
                                'width' => 1920,
                                'height' => 1080,
                                // 'master_dim' => 'width',
                                'quality' => '100%',
                                'new_image' => $resized_img
                );

                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();
                
                unlink("uploads/ruangan/" . $data['foto']);

                $update = [
                    'nama_ruangan' => $nama_ruangan,
                    'foto' => $resized_img,
                    'deskripsi' => $deskripsi,
                    'kategori_ruangan24_id' => $kategori_ruangan24_id,

                ];

                $this->db->where('id', $id);
                $this->db->update('ruangan', $update);

                $this->session->set_flashdata('success', 'Data Ruangan Berhasil Diupdate!');
                redirect(base_url("ruanganAdmin/ruangan"));
            } else {
                
                $update = [
                    'nama_ruangan' => $nama_ruangan,
                    'kategori_ruangan24_id' => $kategori_ruangan24_id,
                    'deskripsi' => $deskripsi,

                ];

                $this->db->where('id', $id);
                $this->db->update('ruangan', $update);

                $this->session->set_flashdata('success', 'Data Ruangan Berhasil Diupdate!');
                redirect(base_url("ruanganAdmin/ruangan"));
            }
        }
    }
}
