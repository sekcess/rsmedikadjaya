<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Janji extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboard_model', 'dashboard');
        if (empty($this->session->userdata('id_user'))) {
            redirect(base_url("auth/block"));
        }
    }

    public function janji_masuk()
    {
        $judul = [
            'title' => 'Management Janji Temu',
            'sub_title' => 'Janji Masuk'
        ];

        $data['data'] = $this->db->get('janji_masuk')->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('janjitemu/masuk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_janji_masuk()
    {

        $this->form_validation->set_rules('nama_janji', 'Nama Janji', 'required');
        $this->form_validation->set_rules('tanggal_janji', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_janji', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Janji Temu',
                'sub_title' => 'Janji Masuk'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('janjitemu/tambah_janji_masuk');
            $this->load->view('templates/footer');
        } else {
            $nama_janji =  $this->input->post("nama_janji", TRUE);
            $tanggal_janji =  $this->input->post("tanggal_janji", TRUE);
            $keterangan_janji =  $this->input->post("keterangan_janji", TRUE);
            // $file_surat =  $this->input->post("file_surat", TRUE);

            $config['upload_path']          = './uploads/janji_masuk';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_janji')) {

                $data = array('upload_data' => $this->upload->data());
                $file_janji = $data['upload_data']['file_name'];

                $save = [
                    'nama_janji_masuk' => $nama_janji,
                    'tanggal_janji_masuk' => date('Y-m-d', strtotime($tanggal_janji)),
                    'keterangan_janji_masuk' => $keterangan_janji,
                    'file_janji_masuk' => $file_janji
                ];

                $this->db->insert('janji_masuk', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                redirect(base_url("janji/janji_masuk"));
            }
        }
    }

    public function hapusJanjiMasuk($id)
    {

        $data = $this->db->get_where('janji_masuk', ['id_janji_masuk' => $id])->row_array();

        unlink("./uploads/janji_masuk/" . $data['file_janji_masuk']);

        $this->db->where(['id_janji_masuk' => $id]);

        $this->db->delete('janji_masuk');

        $this->session->set_flashdata('success', 'Berhasil Dihapus!');

        redirect(base_url('janji/janji_masuk'));
    }

    public function editJanjiMasuk($id)
    {

        $this->form_validation->set_rules('nama_janji', 'Nama Janji', 'required');
        $this->form_validation->set_rules('tanggal_janji', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_janji', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Janji Temu',
                'sub_title' => 'Janji Masuk'
            ];
            $data['janji_masuk'] = $this->db->get_where('janji_masuk', ['id_janji_masuk' => $id])->row_array();

            $this->load->view('templates/header', $judul);
            $this->load->view('janjitemu/edit_janji_masuk', $data);
            $this->load->view('templates/footer');
        } else {
            $nama_janji =  $this->input->post("nama_janji", TRUE);
            $tanggal_janji =  $this->input->post("tanggal_janji", TRUE);
            $keterangan_janji =  $this->input->post("keterangan_janji", TRUE);
            // $file_surat =  $this->input->post("file_surat", TRUE);

            $config['upload_path']          = './uploads/janji_masuk';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_janji')) {
                $data = $this->db->get_where('janji_masuk', ['id_janji_masuk' => $id])->row_array();
                unlink("./uploads/janji_masuk/" . $data['file_janji_masuk']);

                $data = array('upload_data' => $this->upload->data());
                $file_janji = $data['upload_data']['file_name'];

                $update = [
                    'nama_janji_masuk' => $nama_janji,
                    'tanggal_janji_masuk' => date('Y-m-d', strtotime($tanggal_janji)),
                    'keterangan_janji_masuk' => $keterangan_janji,
                    'file_janji_masuk' => $file_janji
                ];

                $this->db->where('id_janji_masuk', $id);
                $this->db->update('janji_masuk', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("janji/janji_masuk"));
            } else {

                $update = [
                    'nama_janji_masuk' => $nama_janji,
                    'tanggal_janji_masuk' => date('Y-m-d', strtotime($tanggal_janji)),
                    'keterangan_janji_masuk' => $keterangan_janji,
                ];

                $this->db->where('id_janji_masuk', $id);
                $this->db->update('janji_masuk', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("janji/janji_masuk"));
            }
        }
    }

    public function janji_keluar()
    {
        $judul = [
            'title' => 'Management Janji Temu',
            'sub_title' => 'Janji Keluar'
        ];
        $data['data'] = $this->db->get('janji_keluar')->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('janjitemu/keluar', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_janji_keluar()
    {

        $this->form_validation->set_rules('nama_janji', 'Nama Janji', 'required');
        $this->form_validation->set_rules('tanggal_janji', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_janji', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_janji', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Janji Temu',
                'sub_title' => 'Janji Keluar'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('janjitemu/tambah_janji_keluar');
            $this->load->view('templates/footer');
        } else {
            $nama_janji =  $this->input->post("nama_janji", TRUE);
            $tanggal_janji =  $this->input->post("tanggal_janji", TRUE);
            $keterangan_janji =  $this->input->post("keterangan_janji", TRUE);
            // $file_janji =  $this->input->post("file_janji", TRUE);

            $config['upload_path']          = './uploads/janji_keluar';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_janji')) {

                $data = array('upload_data' => $this->upload->data());
                $file_janji = $data['upload_data']['file_name'];

                $save = [
                    'nama_janji_keluar' => $nama_janji,
                    'tanggal_janji_keluar' => date('Y-m-d', strtotime($tanggal_janji)),
                    'keterangan_janji_keluar' => $keterangan_janji,
                    'file_janji_keluar' => $file_janji
                ];

                $this->db->insert('janji_keluar', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                redirect(base_url("janji/janji_keluar"));
            }
        }
    }

    public function hapusJanjiKeluar($id)
    {

        $data = $this->db->get_where('janji_keluar', ['id_janji_keluar' => $id])->row_array();

        unlink("./uploads/janji_keluar/" . $data['file_janji_keluar']);

        $this->db->where(['id_janji_keluar' => $id]);

        $this->db->delete('janji_keluar');

        $this->session->set_flashdata('success', 'Berhasil Dihapus!');

        redirect(base_url('janji/janji_keluar'));
    }

    public function editJanjiKeluar($id)
    {

        $this->form_validation->set_rules('nama_janji', 'Nama Janji', 'required');
        $this->form_validation->set_rules('tanggal_janji', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_janji', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_janji', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Janji Temu',
                'sub_title' => 'Janji Keluar'
            ];
            $data['janji_keluar'] = $this->db->get_where('janji_keluar', ['id_janji_keluar' => $id])->row_array();

            $this->load->view('templates/header', $judul);
            $this->load->view('janjitemu/edit_janji_keluar', $data);
            $this->load->view('templates/footer');
        } else {
            $nama_janji =  $this->input->post("nama_janji", TRUE);
            $tanggal_janji =  $this->input->post("tanggal_janji", TRUE);
            $keterangan_janji =  $this->input->post("keterangan_janji", TRUE);
            // $file_janji =  $this->input->post("file_janji", TRUE);

            $config['upload_path']          = './uploads/janji_keluar';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_janji')) {
                $data = $this->db->get_where('janji_keluar', ['id_janji_keluar' => $id])->row_array();
                unlink("./uploads/janji_keluar/" . $data['file_janji_keluar']);

                $data = array('upload_data' => $this->upload->data());
                $file_janji = $data['upload_data']['file_name'];

                $update = [
                    'nama_janji_keluar' => $nama_janji,
                    'tanggal_janji_keluar' => date('Y-m-d', strtotime($tanggal_janji)),
                    'keterangan_janji_keluar' => $keterangan_janji,
                    'file_janji_keluar' => $file_janji
                ];

                $this->db->where('id_janji_keluar', $id);
                $this->db->update('janji_keluar', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("janji/janji_keluar"));
            } else {

                $update = [
                    'nama_janji_keluar' => $nama_janji,
                    'tanggal_janji_keluar' => date('Y-m-d', strtotime($tanggal_janji)),
                    'keterangan_janji_keluar' => $keterangan_janji
                ];

                $this->db->where('id_janji_keluar', $id);
                $this->db->update('janji_keluar', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("janji/janji_keluar"));
            }
        }
    }

    public function janji_keterangan()
    {
        $judul = [
            'title' => 'Management Janji Temu',
            'sub_title' => 'Janji Keterangan'
        ];

        $data['data'] = $this->db->get('janji_keterangan')->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('janjitemu/keterangan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_janji_keterangan()
    {

        $this->form_validation->set_rules('nama_janji', 'Nama Janji', 'required');
        $this->form_validation->set_rules('tanggal_janji', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_janji', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_janji', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Janji Temu',
                'sub_title' => 'Janji Keterangan'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('janjitemu/tambah_janji_keterangan');
            $this->load->view('templates/footer');
        } else {
            $nama_janji =  $this->input->post("nama_janji", TRUE);
            $tanggal_janji =  $this->input->post("tanggal_janji", TRUE);
            $keterangan_janji =  $this->input->post("keterangan_janji", TRUE);
            // $file_janji =  $this->input->post("file_janji", TRUE);

            $config['upload_path']          = './uploads/janji_keterangan';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_janji')) {

                $data = array('upload_data' => $this->upload->data());
                $file_janji = $data['upload_data']['file_name'];

                $save = [
                    'nama_janji_keterangan' => $nama_janji,
                    'tanggal_janji_keterangan' => date('Y-m-d', strtotime($tanggal_janji)),
                    'keterangan_janji_keterangan' => $keterangan_janji,
                    'file_janji_keterangan' => $file_janji
                ];

                $this->db->insert('janji_keterangan', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                redirect(base_url("janji/janji_keterangan"));
            }
        }
    }

    public function hapusJanjiKeterangan($id)
    {

        $data = $this->db->get_where('janji_keterangan', ['id_janji_keterangan' => $id])->row_array();

        unlink("./uploads/janji_keterangan/" . $data['file_janji_keterangan']);

        $this->db->where(['id_janji_keterangan' => $id]);

        $this->db->delete('janji_keterangan');

        $this->session->set_flashdata('success', 'Berhasil Dihapus!');

        redirect(base_url('janji/janji_keterangan'));
    }

    public function editJanjiKeterangan($id)
    {

        $this->form_validation->set_rules('nama_janji', 'Nama Janji', 'required');
        $this->form_validation->set_rules('tanggal_janji', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_janji', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_janji', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Janji Temu',
                'sub_title' => 'Janji Keterangan'
            ];
            $data['janji_keterangan'] = $this->db->get_where('janji_keterangan', ['id_janji_keterangan' => $id])->row_array();

            $this->load->view('templates/header', $judul);
            $this->load->view('janjitemu/edit_janji_keterangan', $data);
            $this->load->view('templates/footer');
        } else {
            $nama_janji =  $this->input->post("nama_janji", TRUE);
            $tanggal_janji =  $this->input->post("tanggal_janji", TRUE);
            $keterangan_janji =  $this->input->post("keterangan_janji", TRUE);
            // $file_janji =  $this->input->post("file_janji", TRUE);

            $config['upload_path']          = './uploads/janji_keterangan';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_janji')) {
                $data = $this->db->get_where('janji_keterangan', ['id_janji_keterangan' => $id])->row_array();
                unlink("./uploads/janji_keterangan/" . $data['file_janji_keterangan']);

                $data = array('upload_data' => $this->upload->data());
                $file_janji = $data['upload_data']['file_name'];

                $update = [
                    'nama_janji_keterangan' => $nama_janji,
                    'tanggal_janji_keterangan' => date('Y-m-d', strtotime($tanggal_janji)),
                    'keterangan_janji_keterangan' => $keterangan_janji,
                    'file_janji_keterangan' => $file_janji
                ];

                $this->db->where('id_janji_keterangan', $id);
                $this->db->update('janji_keterangan', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("janji/janji_keterangan"));
            } else {

                $update = [
                    'nama_janji_keterangan' => $nama_janji,
                    'tanggal_janji_keterangan' => date('Y-m-d', strtotime($tanggal_janji)),
                    'keterangan_janji_keterangan' => $keterangan_janji,
                ];

                $this->db->where('id_janji_keterangan', $id);
                $this->db->update('janji_keterangan', $update);
                $this->session->set_flashdata('success', 'Berhasil Diedit!');
                redirect(base_url("janji/janji_keterangan"));
            }
        }
    }

    public function pengajuan()
    {
        $judul = [
            'title' => 'Management Janji Temu',
            'sub_title' => 'Pengajuan Janji Masuk'
        ];

        $data['status'] = [
            1 => 'Pending',
            2 => 'Syarat Tidak Terpenuhi',
            3 => 'Diterima dan Dilanjutkan',
            4 => 'Sudah Disetuju <b>Dokter</b>',
            5 => 'Sudah Bertemu <b>Dokter</b>/<b>Selesai</b>',
        ];

        $data['options'] =  [
            'DRMS' => 'DR MAYLISA SANTAULI',
            'DRGWML' => 'DR GREGORIUS WILLIAM L',
            'DRRIP' => 'DR RISCI INTAN PARMITA',
            'DRPT' => 'DR PARAMITA TRIMURTI',
            'DRNAR' => 'DR NISA ALYANANDA RITONGA',
            'DRRM' => 'DR RISA MUTHMAINAH',
            'DRJNHS' => 'DR JOSEPB NUGROHO HS',
            'DRGS' => 'DR GEDE SANDJAYA',
            'DRADD' => 'DR ANDIKA DWIPUTRA DJAJA',
            'DRIAL' => 'DR IRENE ARANETA LAKSAMANA',
            'DRHL' => 'DR HUSNUL LAILY',
            'DRSA' => 'DR SALLY ADRIANY',
            'DRWW' => 'DR WILLY WINATA',
            'DRM' => 'DR MIRIAWATI',
            'DRB' => 'DR BUDIMAN',
            'DRMK' => 'DR MARCELLINUS KOWIRA',
            'DRGAT' => 'DR GUSTI AYU TEMI',
            'DRJTP' => 'DR JONI TAMPE PARINDING',
            'DRRW' => 'DR RAHMAT WIARDI',
            'DRFIW' => 'DR FRANKY INDRA WIJAYA',
            'DRDA' => 'DR DWI ANDRIYANI',
            'DRPN' => 'DR PARSAORAN NABABAN',
        ];

        $this->db->select('*');
        $this->db->from('pengajuan_janji');
        $this->db->join('pasien', 'pasien.nik=pengajuan_janji.NIK');
        $this->db->order_by("tanggal", "desc");
        $query = $this->db->get();
        $data['data'] = $query->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('janjitemu/pengajuan_janji', $data);
        $this->load->view('templates/footer');
    }


    public function updateStatus($id)
    {

        $options =  [
            'DRMS' => 'DR MAYLISA SANTAULI',
            'DRGWL' => 'DR GREGORIUS WILLIAM L',
            'DRRIP' => 'DR RISCI INTAN PARMITA',
            'DRPT' => 'DR PARAMITA TRIMURTI',
            'DRNAR' => 'DR NISA ALYANANDA RITONGA',
            'DRRM' => 'DR RISA MUTHMAINAH',
            'DRJNHS' => 'DR JOSEPB NUGROHO HS',
            'DRGS' => 'DR GEDE SANDJAYA',
            'DRADD' => 'DR ANDIKA DWIPUTRA DJAJA',
            'DRIAL' => 'DR IRENE ARANETA LAKSAMANA',
            'DRHL' => 'DR HUSNUL LAILY',
            'DRSA' => 'DR SALLY ADRIANY',
            'DRWW' => 'DR WILLY WINATA',
            'DRM' => 'DR MIRIAWATI',
            'DRB' => 'DR BUDIMAN',
            'DRMK' => 'DR MARCELLINUS KOWIRA',
            'DRGAT' => 'DR GUSTI AYU TEMI',
            'DRJTP' => 'DR JONI TAMPE PARINDING',
            'DRRW' => 'DR RAHMAT WIARDI',
            'DRFIW' => 'DR FRANKY INDRA WIJAYA',
            'DRDA' => 'DR DWI ANDRIYANI',
            'DRPN' => 'DR PARSAORAN NABABAN',
        ];

        $status = $this->input->post('status');

        // var_dump($status);
        // die;

        if ($status == 5) {
            $pJanji = $this->db->get_where('pengajuan_janji', ['id' => $id])->row_array();
            $pndk = $this->db->get_where('pasien', ['nik' => $pJanji['NIK']])->row_array();
            $dateNow = date('Y-m-d');
            // var_dump($pSurat);
            // die;

            $save = [
                'nama_janji_keluar' => '[' . $pndk['nama'] . '-' . $pndk['nik'] . ']-Janji Temu ' . $options[$pJanji['jenis_dokter']],
                'tanggal_janji_keluar' => date('Y-m-d', strtotime($dateNow)),
                'keterangan_janji_keluar' => 'ID: ' . $pJanji['id']
            ];

            $this->db->insert('janji_keluar', $save);
        };

        $this->db->set('status', $status);

        $this->db->where(['id' => $id]);
        $this->db->update('pengajuan_janji');


        $this->session->set_flashdata('success', 'Status Pengajuan ID: ' . $id . ' Telah Diupdate!');

        redirect(base_url('janji/pengajuan'));
    }

    public function hapusPengajuan($id)
    {

        $data = $this->db->get_where('pengajuan_janji', ['id' => $id])->row_array();

        unlink("./uploads/berkas/" . $data['file']);

        $this->db->where(['id' => $id]);

        $this->db->delete('pengajuan_janji');

        $this->session->set_flashdata('success', 'Pengajuan ID: ' . $id . ' Telah Dihapus!');
        redirect(base_url('janji/pengajuan'));
    }
}
