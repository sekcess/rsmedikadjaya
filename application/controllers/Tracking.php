<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');
        $this->load->model('pengajuan_track_model', 'pengajuan_track');

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
            'title' => 'Tracking',
            'sub_title' => '',
            'homes' => $this->m_home->get_all_data_kategori(),
            'kategoris' => $this->m_kategori_spesialis->get_all_data_kategori_spesialis(),
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/tracking', $data);
        $this->load->view('frontend/footer2', $data);
    }

    public function cari()
    {

        $id = $this->input->post('trackid', TRUE);
        $row = $this->pengajuan_track->findById($id);

        $data = [
            'id' => $id,
            'row' => $row
        ];

        // var_dump($row);
        // die;

        if ($row === null) {
            $this->session->set_flashdata('message', '<div class="mt-3 alert alert-warning alert-dismissible"><h5><i class="icon fas fa-bank"></i> Maaf!</h5> ID yang anda masukkan Salah! <b>ID: </b><b>' . $id . '</b> <i>tidak ditemukan</i></div>');
            redirect(base_url("tracking"));
        } else {
            redirect(base_url("tracking/tracked/") . $id);
        }
    }

    public function tracked()
    {
        $id = $this->uri->segment(3);
        $data['row'] = $this->pengajuan_track->showById($id);
        $data['options'] = [
            'DRGS' => 'dr. Gede Sandjaya, Sp. OT (K)',
            'DRADD' => 'dr. Andika Dwiputra Djaja, Sp.OT',
            'DRIAL' => 'dr. Irene Araneta Laksamana, Sp.OT',
            'DRHL' => 'dr. Husnul Laily, Sp.An',
            'DRSA' => 'dr. Sally Adriany, Sp.An',
            'DRB' => 'dr. Budiman Gunawan, Sp. PD., FINASIM',
            'DRMK' => 'dr. Marcellinus Kowira',
            'DRGAT' => 'dr. Gusti Ayu Temi V, Sp.JP., FIHA',
            'DRCC' => 'dr. Christina Chandra, Sp. JP',
            'DRJTP' => 'dr. Joni Tampe Parinding, M.Sc. Sp. PK',
            'DRRW' => 'dr. Rachmat Wiardi, Sp. B., FINACS',
            'DRGA' => 'dr. Gideon Ardhya T, Sp.B',
            'DRFIW' => 'dr. Frangky Indra Wijaya, Sp.Rad',
            'DRDA' => 'dr. Dwi Andriyani Niman, Sp.N',
            'DRPN' => 'dr. Parsaroan Nababan, Sp. U (K)',
            'DRLS' => 'dr. Lea Sutrisna, M.sc., Sp.A., IBLC.,CIMI',
            'DREP' => 'dr. Evelyn Phangkawira, Sp.A., M.Kes',
            'DRMM' => 'dr. Margaretha Maria Quendangen',
            'DRRP' => 'dr. Rosiana Pradanasari, Sp. KFR(K)',
        ];
        $judul = [
            'title' => 'Tracking',
            'sub_title' => '',
            'homes' => $this->m_home->get_all_data_kategori(),
            'kategoris' => $this->m_kategori_spesialis->get_all_data_kategori_spesialis(),
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
        ];


        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/result', $data);
        $this->load->view('frontend/footer2', $data);
    }
}
