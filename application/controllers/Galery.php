<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');

        if (empty($this->session->userdata('id_user'))) {
            redirect(base_url("auth/block"));
        }
    }

    public function profil_rs()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Gallery',
            'sub_title' => 'Profil Rumah Sakit'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data['profil'][0]['profile']);
        // die;
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/profil_rs', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profil()
    {
        $this->form_validation->set_rules('profil', 'Profil', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Gallery',
                'sub_title' => 'Profil Rumah Sakit'
            ];

            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_profil', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->uri->segment(3);
            $this->galery->UpdateProfil($id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/profil_rs');
        }
    }

    public function radiologi()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Gallery',
            'sub_title' => 'Radiologi'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/radiologi', $data);
        $this->load->view('templates/footer');
    }

    public function edit_radiologi()
    {
        $this->form_validation->set_rules('radiologi', 'Radiologi', 'trim');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Gallery',
                'sub_title' => 'Radiologi'
            ];

            // $data['sm'] = $this->db->get('surat_masuk')->row_array();
            // var_dump($data);
            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_radiologi', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->uri->segment(3);
            $upload_sk = $_FILES['radiologi']['name'];

            $data['galery'] = $this->db->get_where('gallery', ['id' => $id])->row_array();

            if ($upload_sk) {
                $config['upload_path']          = './assets/galery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 20048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('radiologi')) {
                    $old_sk = $data['galery']['radiologi'];
                    unlink(FCPATH . 'assets/galery/' . $old_sk);

                    $radiologi = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $radiologi = $this->input->post('radiologi_old');
            }
            // var_dump($radiologi);
            // die;

            $this->galery->UpdateRadiologi($radiologi, $id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/radiologi');
        }
    }

    public function poliklinik()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Gallery',
            'sub_title' => 'Poliklinik'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/poliklinik', $data);
        $this->load->view('templates/footer');
    }

    public function edit_poliklinik()
    {
        $this->form_validation->set_rules('poliklinik', 'Poliklinik', 'trim');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Gallery',
                'sub_title' => 'Poliklinik'
            ];

            // $data['sm'] = $this->db->get('surat_masuk')->row_array();
            // var_dump($data);
            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_poliklinik', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->uri->segment(3);
            $upload_poliklinik = $_FILES['poliklinik']['name'];

            $data['galery'] = $this->db->get_where('gallery', ['id' => $id])->row_array();

            if ($upload_poliklinik) {
                $config['upload_path']          = './assets/galery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 20048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('poliklinik')) {
                    $old_poliklinik = $data['galery']['poliklinik'];
                    unlink(FCPATH . 'assets/galery/' . $old_poliklinik);

                    $poliklinik = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $poliklinik = $this->input->post('poliklinik_old');
            }
            // var_dump($poliklinik);
            // die;

            $this->galery->UpdatePoliklinik($poliklinik, $id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/poliklinik');
        }
    }

    public function igdicu()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Gallery',
            'sub_title' => 'IGD & ICU'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/igdicu', $data);
        $this->load->view('templates/footer');
    }

    public function edit_igdicu()
    {
        $this->form_validation->set_rules('igdicu', 'IGD & ICU', 'trim');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Gallery',
                'sub_title' => 'IGD & ICU'
            ];

            // $data['sm'] = $this->db->get('surat_masuk')->row_array();
            // var_dump($data);
            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_igdicu', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->uri->segment(3);
            $upload_igdicu = $_FILES['igdicu']['name'];

            $data['galery'] = $this->db->get_where('gallery', ['id' => $id])->row_array();

            if ($upload_igdicu) {
                $config['upload_path']          = './assets/galery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('igdicu')) {
                    $old_igdicu = $data['galery']['igdicu'];
                    unlink(FCPATH . 'assets/galery/' . $old_igdicu);

                    $igdicu = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $igdicu = $this->input->post('igdicu_old');
            }
            // var_dump($igdicu);
            // die;

            $this->galery->UpdateIgdIcu($igdicu, $id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/igdicu');
        }
    }

    public function p_medis()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Gallery',
            'sub_title' => 'Penunjang Medis'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/p_medis', $data);
        $this->load->view('templates/footer');
    }

    public function edit_p_medis()
    {
        $this->form_validation->set_rules('p_medis', 'Penunjang Medis', 'trim');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Gallery',
                'sub_title' => 'Penunjang Medis'
            ];

            // $data['sm'] = $this->db->get('surat_masuk')->row_array();
            // var_dump($data);
            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_p_medis', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->uri->segment(3);
            $upload_p_medis = $_FILES['p_medis']['name'];

            $data['galery'] = $this->db->get_where('gallery', ['id' => $id])->row_array();

            if ($upload_p_medis) {
                $config['upload_path']          = './assets/galery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 20048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('p_medis')) {
                    $old_p_medis = $data['galery']['p_medis'];
                    unlink(FCPATH . 'assets/galery/' . $old_p_medis);

                    $p_medis = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $p_medis = $this->input->post('p_medis_old');
            }
            // var_dump($p_medis);
            // die;

            $this->galery->UpdatePMedis($p_medis, $id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/p_medis');
        }
    }

    public function r_inap()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Gallery',
            'sub_title' => 'Rawat Inap'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/r_inap', $data);
        $this->load->view('templates/footer');
    }
    public function edit_r_inap()
    {
        $this->form_validation->set_rules('r_inap', 'RawatInap', 'trim');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Gallery',
                'sub_title' => 'Rawat Inap'
            ];

            // $data['sm'] = $this->db->get('surat_masuk')->row_array();
            // var_dump($data);
            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_r_inap', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->uri->segment(3);
            $upload_r_inap = $_FILES['r_inap']['name'];

            $data['galery'] = $this->db->get_where('gallery', ['id' => $id])->row_array();

            if ($upload_r_inap) {
                $config['upload_path']          = './assets/galery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 20048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('r_inap')) {
                    $old_r_inap = $data['galery']['r_inap'];
                    unlink(FCPATH . 'assets/galery/' . $old_r_inap);

                    $r_inap = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $r_inap = $this->input->post('r_inap_old');
            }
            // var_dump($k_r_inap);
            // die;

            $this->galery->UpdateRInap($r_inap, $id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/r_inap');
        }
    }
}
