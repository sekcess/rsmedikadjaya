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

        $this->load->model('m_home');
        $this->load->model('m_ruangan');
        $this->load->model('m_kategori_spesialis');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Pengajuan Janji Temu',
            'sub_title' => '',
            'homes' => $this->m_home->get_all_data_kategori(),
            'kategoris' => $this->m_kategori_spesialis->get_all_data_kategori_spesialis(),
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
        ];

        $data['options'] = [
            'Pilih Dokter',
            'Dokter Spesialis Bedah Orthopedi:' => [
                'DRGS' => 'dr. Gede Sandjaya, Sp. OT (K)',
                'DRADD' => 'dr. Andika Dwiputra Djaja, Sp.OT',
                'DRIAL' => 'dr. Irene Araneta Laksamana, Sp.OT',
            ],
            'Dokter Spesialis Anesthesi:' => [
                'DRHL' => 'dr. Husnul Laily, Sp.An',
                'DRSA' => 'dr. Sally Adriany, Sp.An',
            ],
            'Dokter Spesialis Penyakit Dalam:' => [
                'DRB' => 'dr. Budiman Gunawan, Sp. PD., FINASIM',
            ],
            'Dokter Spesialis Kebidanan dan Kandungan:' => [
                'DRMK' => 'dr. Marcellinus Kowira',
            ],
            'Dokter Spesialis Jantung & Pembuluh Darah:' => [
                'DRGAT' => 'dr. Gusti Ayu Temi V, Sp.JP., FIHA',
                'DRCC' => 'dr. Christina Chandra, Sp. JP',
            ],
            'Dokter Spesialis Patholgi Klinik:' => [
                'DRJTP' => 'dr. Joni Tampe Parinding, M.Sc. Sp. PK',
            ],
            'Dokter Spesialis Bedah Umum:' => [
                'DRRW' => 'dr. Rachmat Wiardi, Sp. B., FINACS',
                'DRGA' => 'dr. Gideon Ardhya T, Sp.B',
            ],
            'Dokter Spesialis Radiologi:' => [
                'DRFIW' => 'dr. Frangky Indra Wijaya, Sp.Rad',
            ],
            'Dokter Spesialis Syaraf:' => [
                'DRDA' => 'dr. Dwi Andriyani Niman, Sp.N',
            ],
            'Dokter Spesialis Urologi:' => [
                'DRPN' => 'dr. Parsaroan Nababan, Sp. U (K)',
            ],
            'Dokter Spesialis Anak:' => [
                'DRLS' => 'dr. Lea Sutrisna, M.sc., Sp.A., IBLC.,CIMI',
                'DREP' => 'dr. Evelyn Phangkawira, Sp.A., M.Kes',
            ],
            'Dokter Spesialis Rehabilitasi Medik:' => [
                'DRMM' => 'dr. Margaretha Maria Quendangen',
                'DRRP' => 'dr. Rosiana Pradanasari, Sp. KFR(K)',
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


        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $this->load->library("upload");

            // FILE 1
            $config = array(
                'upload_path' => FCPATH . '/uploads/berkas/',
                'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF",
                'max_size' => "26200",
            );

            $this->upload->initialize($config);
            $this->upload->do_upload("file");
            $file_data = $this->upload->data();
            $file = $file_data["file_name"];
        }

        $data = [
            'id' => $id,
            // 'nama' => $nama,
            'nik' => $nik,
            // 'no_hp' => $no_hp,
            'file' => $file,
            'jenis_dokter' => $jenis_dokter,
            'tanggal' => date('Y-m-d'),
            'status' => $status[1]
        ];

        // var_dump($data);
        // die;

        $this->pengajuan_track->insert_p_janji($data);
        $this->session->set_flashdata('success', '<div class="mt-5 alert alert-success alert-dismissible"><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengajukan Janji! Berikut <b>ID</b> anda, simpan id berikut untuk melakukan pelacakan: <b>' . $id . '</b></div>');
        redirect(base_url("janjitemu"));
    }

    function download()
    {
        $data["files"] = directory_map("/uploads/berkas");
    }
}
