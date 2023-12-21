<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Janjitemu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');
        $this->load->model('pengajuan_track_model', 'pengajuan_track');
        $this->load->model('M_Pasien', 'pasien');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Pengajuan Janji Temu',
            'sub_title' => ''
        ];

        $data['options'] = [
            'Pilih Dokter',
            'Dokter Umum:' => [
                'DRMS' => 'DR MAYLISA SANTAULI',
                'DRGWL' => 'DR GREGORIUS WILLIAM L',
                'DRRIP' => 'DR RISCI INTAN PARMITA',
                'DRPT' => 'DR PARAMITA TRIMURTI',
                'DRNAR' => 'DR NISA ALYANANDA RITONGA',
                'DRRM' => 'DR RISA MUTHMAINAH',
                'DRJNHS' => 'DR JOSEPB NUGROHO HS',
            ],
            'Dokter Spesialis Bedah Orthopedi:' => [
                'DRGS' => 'DR GEDE SANDJAYA',
                'DRADD' => '	DR ANDIKA DWIPUTRA DJAJA',
                'DRIAL' => '	DR IRENE ARANETA LAKSAMANA',
            ],
            'Dokter Spesialis Anesthesi:' => [
                'DRHL' => 'DR HUSNUL LAILY',
                'DRSA' => 'DR SALLY ADRIANY',
            ],
            'Dokter Spesialis Anak:' => [
                'DRWW' => 'DR WILLY WINATA',
                'DRM' => 'DR MIRIAWATI',
            ],
            'Dokter Spesialis Penyakit Dalam:' => [
                'DRB' => 'DR BUDIMAN',
            ],
            'Dokter Spesialis Kebidanan dan Kandungan:' => [
                'DRMK' => 'DR MARCELLINUS KOWIRA',
            ],
            'Dokter Spesialis Jantung PD:' => [
                'DRGAT' => 'DR GUSTI AYU TEMI',
            ],
            'Dokter Spesialis Patholgi Klinik:' => [
                'DRJTP' => 'DR JONI TAMPE PARINDING',
            ],
            'Dokter Spesialis Bedah:' => [
                'DRRW' => 'DR RAHMAT WIARDI',
            ],
            'Dokter Spesialis Radiologi:' => [
                'DRFIW' => 'DR FRANKY INDRA WIJAYA',
            ],
            'Dokter Spesialis Syaraf:' => [
                'DRDA' => 'DR DWI ANDRIYANI',
            ],
            'Dokter Spesialis Urologi:' => [
                'DRPN' => 'DR PARSAORAN NABABAN',
            ],
        ];

        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/s_online', $data);
        $this->load->view('frontend/footer2', $data);
    }

    public function ajukan()
    {
        $status = [
            1 => 1,  // Pending
            2 => 2,  // Diterima dan Dilanjutkan
            3 => 3,  // Sudah Diketik dan Diparaf
            4 => 4,  // Sudah Ditandatangani Lurah dan Selesai
            5 => 5,
        ];

        $nama = $this->input->post('nama', TRUE);
        $nik = $this->input->post('nik', TRUE);
        $no_hp = $this->input->post('no_hp', TRUE);
        $jenis_dokter = $this->input->post('jenis_dokter', TRUE);

        $ceknik = $this->pasien->cek_pasien($nik)->num_rows();

        if ($ceknik <= 0) {
            $save = [
                'nik' => $nik,
                'nama' => $nama,
                'no_hp' => $no_hp,
            ];

            $this->db->insert('pasien', $save);
        }

        //Output a v4 UUID 
        $rid = uniqid($jenis_dokter, TRUE);
        $rid2 = str_replace('.', '', $rid);
        $rid3 = substr(str_shuffle($rid2), 0, 3);

        $cc = $this->db->count_all('pengajuan_janji') + 1;
        $count = str_pad($cc, 3, STR_PAD_LEFT);
        $id = $jenis_dokter . "-";
        $d = date('d');
        $y = date('y');
        $mnth = date("m");
        $s = date('s');
        $randomize = $d + $y + $mnth + $s;
        $id = $id . $rid3 . $randomize . $count . $y;


        if ($_FILES['file']['size'] >= 5242880) {
            $this->session->set_flashdata('success', '<div class="mt-5 alert alert-warning alert-dismissible"><i class="icon fas fa-ban"></i> MAAF!</h5> File Lebih 5MB!</div>');
            redirect(base_url("janjitemu"));
        }

        if ($_FILES['file']['name'] == null) {
            $file = '-';
        } else {
            $namafile = substr($_FILES['file']['name'], -7);
            $file = $jenis_dokter . uniqid() . $namafile;
            $config['upload_path']          = './uploads/berkas';
            $config['allowed_types']        = '*';
            $config['max_size']             = 5120; // 5MB
            $config['file_name']            = $file;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload("file")) {
                $data = array('upload_data' => $this->upload->data());
                $berkas = $data['upload_data']['file_name'];
            }
        }

        $data = [
            'id' => $id,
            // 'nama' => $nama,
            'nik' => $nik,
            // 'no_hp' => $no_hp,
            'jenis_dokter' => $jenis_dokter,
            'file' => $file,
            'tanggal' => date('Y-m-d'),
            'status' => $status[1]
        ];

        // var_dump($data);
        // die;

        $this->pengajuan_track->insert_p_janji($data);
        $this->session->set_flashdata('success', '<div class="mt-5 alert alert-success alert-dismissible"><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengajukan Janji! Berikut <b>ID</b> anda: <b>' . $id . '</b></div>');
        redirect(base_url("janjitemu"));
    }
}
