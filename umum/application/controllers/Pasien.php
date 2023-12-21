<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->load->model('M_Pasien');

        if (empty($this->session->userdata('id_user'))) {
            redirect(base_url("auth/block"));
        }
    }

    public function index()
    {

        $judul = [
            'title' => 'Pasien',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('pasien')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {

        $data = $this->db->get_where('pasien', ['nik' => $id])->row_array();

        $this->db->where(['nik' => $id]);
        $this->db->delete('pasien');
        $this->session->set_flashdata('success', 'Berhasil Dihapus!');
        redirect(base_url('pasien'));
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
        $this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Pasien',
                'sub_title' => 'Tambah Pasien '
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('pasien/tambah');
            $this->load->view('templates/footer');
        } else {
            $nik =  $this->input->post("nik", TRUE);
            $nama =  $this->input->post("nama", TRUE);
            $tmpt_lhr =  $this->input->post("tmpt_lhr", TRUE);
            $tgl_lhr =  $this->input->post("tgl_lhr", TRUE);
            $alamat =  $this->input->post("alamat", TRUE);
            $no_hp =  $this->input->post("no_hp", TRUE);
            $pekerjaan =  $this->input->post("pekerjaan", TRUE);

            $save = [
                'nik' => date('d-m-Y', strtotime($nik)),
                'nama' => $nama,
                'tmpt_lhr' => $tmpt_lhr,
                'tgl_lhr' => date('Y-m-d', strtotime($tgl_lhr)),
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'pekerjaan' => $pekerjaan,

            ];

            $this->db->insert('pasien', $save);
            $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
            redirect(base_url("pasien"));
        }
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
        $this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Pasien',
                'sub_title' => 'Edit pasien'
            ];

            $data['pasien'] = $this->db->get_where('pasien', ['nik' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('pasien/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $nik =  $this->input->post("nik", TRUE);
            $nama =  $this->input->post("nama", TRUE);
            $tmpt_lhr =  $this->input->post("tmpt_lhr", TRUE);
            $tgl_lhr =  $this->input->post("tgl_lhr", TRUE);
            $alamat =  $this->input->post("alamat", TRUE);
            $no_hp =  $this->input->post("no_hp", TRUE);
            $pekerjaan =  $this->input->post("pekerjaan", TRUE);

            $update = [
                'nik' => date('d-m-Y', strtotime($nik)),
                'nama' => $nama,
                'tmpt_lhr' => $tmpt_lhr,
                'tgl_lhr' => date('Y-m-d', strtotime($tgl_lhr)),
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'pekerjaan' => $pekerjaan,
            ];

            $this->db->where('nik', $id);
            $this->db->update('pasien', $update);

            $this->session->set_flashdata('success', 'Berhasil Diupdate!');
            redirect(base_url("pasien"));
        }
    }

    function get_autocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->M_Pasien->search_nik($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = array(
                        'label'  => $row->nik,
                        'nama' => $row->nama,
                        'no_hp' => $row->no_hp,
                    );
                echo json_encode($arr_result);
            }
        }
    }
}
