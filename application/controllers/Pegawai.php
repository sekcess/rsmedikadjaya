<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
        $this->load->model('kategori_spesialis_model');

        if (empty($this->session->userdata('id_user'))) {
            redirect(base_url("auth/block"));
        }
    }

    public function index()
    {

        $judul = [
            'title' => 'Management Pegawai',
            'sub_title' => '',
            'kategoris' => $this->kategori_model->get(),
            'kategoris2' => $this->kategori_spesialis_model->get(),
        ];

        $data['data'] = $this->db->get('pegawai')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {

        $data = $this->db->get_where('pegawai', ['id_pegawai' => $id])->row_array();

        unlink("uploads/foto/" . $data['foto']);

        $this->db->where(['id_pegawai' => $id]);
        $this->db->delete('pegawai');
        $this->session->set_flashdata('success', 'Data Dokter Berhasil Dihapus!');
        redirect(base_url('pegawai'));
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
        $this->form_validation->set_rules('kategori_id', 'Kategori Dokter', 'required');
        $this->form_validation->set_rules('kategori_spesialis_id', 'Kategori Spesialis', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('jadwal', 'Jadwal');
        $this->form_validation->set_rules('jadwal2', 'Jadwal 2');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management User',
                'sub_title' => 'Tambah Data Dokter',
                'kategoris' => $this->kategori_model->get(),
                'kategoris2' => $this->kategori_spesialis_model->get(),
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('pegawai/tambah');
            $this->load->view('templates/footer');
        } else {
            $nama_dokter =  $this->input->post("nama_dokter", TRUE);
            $nik =  $this->input->post("nik", TRUE);
            $tempat_lahir =  $this->input->post("tempat_lahir", TRUE);
            $tanggal_lahir =  $this->input->post("tanggal_lahir", TRUE);
            $alamat =  $this->input->post("alamat", TRUE);
            $no_hp =  $this->input->post("no_hp", TRUE);
            $kategori_id =  $this->input->post("kategori_id", TRUE);
            $kategori_spesialis_id =  $this->input->post("kategori_spesialis_id", TRUE);
            $jabatan =  $this->input->post("jabatan", TRUE);
            $jadwal =  $this->input->post("jadwal", TRUE);
            $jadwal2 =  $this->input->post("jadwal2", TRUE);
            $senin =  $this->input->post("senin", TRUE);
            $senin2 =  $this->input->post("senin2", TRUE);
            $selasa =  $this->input->post("selasa", TRUE);
            $selasa2 =  $this->input->post("selasa2", TRUE);
            $rabu =  $this->input->post("rabu", TRUE);
            $rabu2 =  $this->input->post("rabu2", TRUE);
            $kamis =  $this->input->post("kamis", TRUE);
            $kamis2 =  $this->input->post("kamis2", TRUE);
            $jumat =  $this->input->post("jumat", TRUE);
            $jumat2 =  $this->input->post("jumat2", TRUE);
            $sabtu =  $this->input->post("sabtu", TRUE);
            $sabtu2 =  $this->input->post("sabtu2", TRUE);
            $minggu =  $this->input->post("minggu", TRUE);
            $minggu2 =  $this->input->post("minggu2", TRUE);

            $config['upload_path']          = './uploads/foto';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {

                $this->load->library('image_lib');
                $image_data = $this->upload->data();
                $resized_img = $image_data['file_name'];
                $configer = array(
                                'image_library' => 'gd2',
                                'source_image' => $image_data['full_path'],
                                'maintain_ratio' => True,
                                'width' => 400,
                                'height' => 500,
                                'master_dim' => 'width',
                                'quality' => '20%',
                                'new_image' => $resized_img
                );

                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();

                $save = [
                    'nama_dokter' => $nama_dokter,
                    'nik' => $nik,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => date('Y-m-d', strtotime($tanggal_lahir)),
                    'alamat' => $alamat,
                    'foto' => $resized_img,
                    'no_hp' => $no_hp,
                    'kategori_id' => $kategori_id,
                    'kategori_spesialis_id' => $kategori_spesialis_id,
                    'jabatan' => $jabatan,
                    'jadwal' => $jadwal,
                    'jadwal2' => $jadwal2,
                    'senin' => $senin,
                    'senin2' => $senin2,
                    'selasa' => $selasa,
                    'selasa2' => $selasa2,
                    'rabu' => $rabu,
                    'rabu2' => $rabu2,
                    'kamis' => $kamis,
                    'kamis2' => $kamis2,
                    'jumat' => $jumat,
                    'jumat2' => $jumat2,
                    'sabtu' => $sabtu,
                    'sabtu2' => $sabtu2,
                    'minggu' => $minggu,
                    'minggu2' => $minggu2,

                ];

                $this->db->insert('pegawai', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                redirect(base_url("pegawai"));
            } else {
                $this->session->set_flashdata('danger', 'Data belum ditambahkan!');
                redirect(base_url("pegawai/tambah"));
            }
        }
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
        $this->form_validation->set_rules('kategori_id', 'Kategori Dokter', 'required');
        $this->form_validation->set_rules('kategori_spesialis_id', 'Kategori Spesialis', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('jadwal', 'Jadwal');
        $this->form_validation->set_rules('jadwal2', 'Jadwal 2');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management User',
                'sub_title' => 'Edit Data Dokter',
                'kategoris' => $this->kategori_model->get(),
                'kategoris2' => $this->kategori_spesialis_model->get(),
            ];

            $data['pegawai'] = $this->db->get_where('pegawai', ['id_pegawai' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('pegawai/edit', $data);
            $this->load->view('templates/footer');
        } else {
            // $data = $this->db->get_where('pegawai', ['id_pegawai' => $id])->row_array();
            // unlink("./uploads/foto/" . $data['foto']);

            $nama_dokter =  $this->input->post("nama_dokter", TRUE);
            $nik =  $this->input->post("nik", TRUE);
            $tempat_lahir =  $this->input->post("tempat_lahir", TRUE);
            $tanggal_lahir =  $this->input->post("tanggal_lahir", TRUE);
            $alamat =  $this->input->post("alamat", TRUE);
            $no_hp =  $this->input->post("no_hp", TRUE);
            $kategori_id =  $this->input->post("kategori_id", TRUE);
            $kategori_spesialis_id =  $this->input->post("kategori_spesialis_id", TRUE);
            $jabatan =  $this->input->post("jabatan", TRUE);
            $jadwal =  $this->input->post("jadwal", TRUE);
            $jadwal2 =  $this->input->post("jadwal2", TRUE);
            $senin =  $this->input->post("senin", TRUE);
            $senin2 =  $this->input->post("senin2", TRUE);
            $selasa =  $this->input->post("selasa", TRUE);
            $selasa2 =  $this->input->post("selasa2", TRUE);
            $rabu =  $this->input->post("rabu", TRUE);
            $rabu2 =  $this->input->post("rabu2", TRUE);
            $kamis =  $this->input->post("kamis", TRUE);
            $kamis2 =  $this->input->post("kamis2", TRUE);
            $jumat =  $this->input->post("jumat", TRUE);
            $jumat2 =  $this->input->post("jumat2", TRUE);
            $sabtu =  $this->input->post("sabtu", TRUE);
            $sabtu2 =  $this->input->post("sabtu2", TRUE);
            $minggu =  $this->input->post("minggu", TRUE);
            $minggu2 =  $this->input->post("minggu2", TRUE);

            $config['upload_path']          = './uploads/foto';
            $config['allowed_types']        = 'png|jpg|jpeg';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $data = $this->db->get_where('pegawai', ['id_pegawai' => $id])->row_array();

                $this->load->library('image_lib');
                $image_data = $this->upload->data();
                $resized_img = $image_data['file_name'];
                $configer = array(
                                'image_library' => 'gd2',
                                'source_image' => $image_data['full_path'],
                                'maintain_ratio' => True,
                                'width' => 400,
                                'height' => 500,
                                'master_dim' => 'width',
                                'quality' => '20%',
                                'new_image' => $resized_img
                );

                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();
                
                unlink("uploads/foto/" . $data['foto']);

                $update = [
                    'nama_dokter' => $nama_dokter,
                    'nik' => $nik,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => date('Y-m-d', strtotime($tanggal_lahir)),
                    'alamat' => $alamat,
                    'foto' => $resized_img,
                    'no_hp' => $no_hp,
                    'kategori_id' => $kategori_id,
                    'kategori_spesialis_id' => $kategori_spesialis_id,
                    'jabatan' => $jabatan,
                    'jadwal' => $jadwal,
                    'jadwal2' => $jadwal2,
                    'senin' => $senin,
                    'senin2' => $senin2,
                    'selasa' => $selasa,
                    'selasa2' => $selasa2,
                    'rabu' => $rabu,
                    'rabu2' => $rabu2,
                    'kamis' => $kamis,
                    'kamis2' => $kamis2,
                    'jumat' => $jumat,
                    'jumat2' => $jumat2,
                    'sabtu' => $sabtu,
                    'sabtu2' => $sabtu2,
                    'minggu' => $minggu,
                    'minggu2' => $minggu2,

                ];

                $this->db->where('id_pegawai', $id);
                $this->db->update('pegawai', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("pegawai"));
            } else {
                
                
                $update = [
                    'nama_dokter' => $nama_dokter,
                    'nik' => $nik,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => date('Y-m-d', strtotime($tanggal_lahir)),
                    'alamat' => $alamat,
                    'no_hp' => $no_hp,
                    'kategori_id' => $kategori_id,
                    'kategori_spesialis_id' => $kategori_spesialis_id,
                    'jabatan' => $jabatan,
                    'jadwal' => $jadwal,
                    'jadwal2' => $jadwal2,
                    'senin' => $senin,
                    'senin2' => $senin2,
                    'selasa' => $selasa,
                    'selasa2' => $selasa2,
                    'rabu' => $rabu,
                    'rabu2' => $rabu2,
                    'kamis' => $kamis,
                    'kamis2' => $kamis2,
                    'jumat' => $jumat,
                    'jumat2' => $jumat2,
                    'sabtu' => $sabtu,
                    'sabtu2' => $sabtu2,
                    'minggu' => $minggu,
                    'minggu2' => $minggu2,

                ];

                $this->db->where('id_pegawai', $id);
                $this->db->update('pegawai', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("pegawai"));
            }
        }
    }
}
