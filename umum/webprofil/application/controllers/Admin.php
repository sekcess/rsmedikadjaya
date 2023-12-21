<?php
defined('BASEPATH') or exit('No direct scriot access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->library('form_validation');
        $this->load->model('Admin_model', 'admin');
        $this->load->model('front/article_model');
        $this->load->model('front/category_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();




        $data = array(
            'title' => 'Artikel',
            "articles" => $this->article_model->get_publihed(),
            "categories" => $this->category_model->get(),
            'judul' => '<b>Artikel</b>',
            'isi' => 'data/article',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array()
        );

        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function role()
    {
        $this->form_validation->set_rules('role', 'Role', 'required');

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Role',
                'judul' => '<b>ADMIN ROLE</b>',
                'isi' => 'admin/role',
                'user' => $this->db->get_where('user', ['email' =>
                $this->session->userdata('email')])->row_array(),
                'role' => $this->db->get('user_role')->result_array()
            );

            $this->load->view('template/wrapper', $data);
        } else {
            $data = [
                'role' => $this->input->post('role')
            ];
            $this->db->insert('user_role', $data);
            $this->session->set_flashdata('flash', 'Ditambahkan!');
            redirect('admin/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data = array(
            'title' => 'Role Access',
            'judul' => '<b>ROLE AKSES</b>',
            'isi' => 'admin/role-Access',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array(),
            'role' => $this->db->get_where('user_role', ['id' => $role_id])->row_array(),
        );
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('flash', 'Diganti!');
    }

    public function hapusDataRole($Role)
    {
        $this->admin->hapusDataRole($Role);
        $this->session->set_flashdata('flash', 'Dihapus!');
        redirect('admin/role');
    }

    public function input()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = array(
            'title' => 'Tambah Data Penduduk',
            'judul' => '<b>TAMBAH DATA PENDUDUK</b>',
            'isi' => 'data/input_data',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array()
        );


        $this->load->view('template/wrapper', $data, FALSE);
    }
    public function inputd()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = array(
            'title' => 'Tambah Data Penduduk',
            'judul' => '<b>TAMBAH DATA PENDUDUK</b>',
            'isi' => 'data/input_data',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array()
        );
        $nik             = $this->input->post('nik');
        $ttl             = $this->input->post('tempat_tgl');
        $nama          = $this->input->post('nama_lengkap');
        $jk           = $this->input->post('jenis_kelamin');
        $almt          = $this->input->post('alamat');
        $rt   = $this->input->post('rt_rw');
        $desa   = $this->input->post('kel_desa');
        $kec   = $this->input->post('kecamatan');
        $agama   = $this->input->post('agama');
        $status   = $this->input->post('status');
        $pekerjaan   = $this->input->post('pekerjaan');
        $warga   = $this->input->post('kewarganegaraan');

        $this->db->query("INSERT INTO data_penduduk VALUES('','$nik','$nama','$ttl','$jk','$almt','$rt','$desa','$kec','$agama','$status','$pekerjaan','$warga')");
        redirect('user/input');
    }

    public function article()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();




        $data = array(
            'title' => 'Artikel',
            "articles" => $this->article_model->get_publihed(),
            "categories" => $this->category_model->get(),
            'judul' => '<b>Artikel</b>',
            'isi' => 'data/article',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array()
        );

        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function permohonan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = array(
            'title' => 'Permohonan',
            "articles" => $this->article_model->get_publihed(),
            "categories" => $this->category_model->get(),
            'judul' => '<b>Pengajuan Surat</b>',
            'isi' => 'data/permohonan',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array()
        );





        $data['status'] = [
            1 => 'Pending',
            2 => 'Syarat Tidak Terpenuhi',
            3 => 'Diterima dan Dilanjutkan',
            4 => 'Sudah Diketik dan Diparaf',
            5 => 'Ditandatangani Lurah/<b>Selesai</b>',
        ];


        $data['options'] = [
            '0' => 'Tidak Memilih Surat',
            'SPNA' => 'Nikah(N.A)',
            'SKKM' => 'Kematian',
            'SKP' => 'Pindah',
            'SKD' => 'Datang',
            'SKKL' => 'Kelahiran',
            'SKTM' => 'Keterangan Tidak Mampu',
            'SKU' => 'Usaha',
            'SDM' => 'Keterangan Domisili'
        ];
        $this->db->select('*');
        $this->db->from('permohonan');
        // $this->db->join('data_penduduk','data_penduduk.nik=permohonan.nik');
        $this->db->order_by("created_at", "desc");
        $query = $this->db->get();
        $data['data'] = $query->result_array();


        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function updateStatus($id)
    {
        $options = [
            'SPKK' => 'Kartu Keluarga',
            'SPNA' => 'Nikah(N.A)',
            'SKKL' => 'Kelahiran',
            'SKKM' => 'Kematian',
            'SKP' => 'Pindah',
            'SKD' => 'Datang',
            'SKBM' => 'Belum Menikah',
            'SKPH' => 'Penghasilan',
            'SKM' => 'Miskin',
            'SKU' => 'Usaha',
            'SKT' => 'Tanah',
            'SKGG' => 'Ganti Rugi',
            'SITU' => 'Izin Tempat Usaha',
            'SIMB' => 'Izin Mendirikan Bangunan',
        ];

        $status = $this->input->post('status');

        // var_dump($status);
        // die;

        if ($status == 5) {
            $pSurat = $this->db->get_where('permohonan', ['idpermohonan' => $id])->row_array();
            // $pndk = $this->db->get_where('penduduk', ['nik' => $pSurat['NIK']])->row_array();
            $dateNow = date('Y-m-d');
            // var_dump($pSurat);
            // die;

            $save = [
                'nama_surat_keluar' => '[' . $pndk['nama'] . '-' . $pndk['nik'] . ']-Surat ' . $options[$pSurat['jenis_surat']],
                'tanggal_surat_keluar' => date('Y-m-d', strtotime($dateNow)),
                'keterangan_surat_keluar' => 'ID: ' . $pSurat['id']
            ];

            $this->db->insert('surat_keluar', $save);
        };

        $this->db->set('status', $status);

        $this->db->where(['idpermohonan' => $id]);
        $this->db->update('permohonan');


        $this->session->set_flashdata('success', 'Status Pengajuan ID: ' . $id . ' Telah Diupdate!');

        redirect(base_url('user/permohonan'));
    }

    public function hapusPengajuan($id)
    {

        $data = $this->db->get_where('permohonan', ['idpermohonan' => $id])->row_array();

        unlink("./uploads/berkas/" . $data['file']);

        $this->db->where(['idpermohonan' => $id]);

        $this->db->delete('permohonan');

        $this->session->set_flashdata('success', 'Pengajuan ID: ' . $id . ' Telah Dihapus!');
        redirect(base_url('user/permohonan'));
    }



    public function new()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->library('form_validation');
        if ($this->input->method() === 'post') {
            // Lakukan validasi sebelum menyimpan ke model
            $rules = $this->article_model->rules();
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() === FALSE) {

                return $this->load->view('user/new');
            }


            // generate unique id and slug
            $id = uniqid('', true);
            $slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;

            $file_name = str_replace('.', '', $data['article']->id);
            $config['encrypt_name'] = TRUE;
            $config['upload_path']          = FCPATH . '/upload/thumbnail/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['file_name']            = $file_name;
            $config['overwrite']            = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('thumbnail')) {
                $data['error'] = $this->upload->display_errors();
            } else {
                $uploaded_data = $this->upload->data();

                $new_data = $uploaded_data['file_name'];

                // if ($this->article_model->update($new_data)) {
                // 	$this->session->set_flashdata('message', 'Thumbnail updated!');
                // 	redirect(site_url('admin/post'));
                // }
            }

            $article = [
                'id' => $id,
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'content' => $this->input->post('content'),
                'thumbnail' => $new_data,
                'category_id' => $this->input->post('category_id'),
                'draft' => $this->input->post('draft')
            ];

            $saved = $this->article_model->insert($article);

            if ($saved) {
                $this->session->set_flashdata('message', 'Article was created');
                return redirect('user/article');
            }
        }



        $data = array(
            'title' => 'Artikel',
            "articles" => $this->article_model->get(),
            "categories" => $this->category_model->get(),
            'judul' => '<b>Tambah Artikel</b>',
            'isi' => 'data/new',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array()
        );

        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function edit($id = null)
    {
        // $data['article'] = $this->article_model->find($id);

        $data = array(
            'title' => 'Artikel',
            "article" => $this->article_model->find($id),
            "categories" => $this->category_model->get(),
            'judul' => '<b>Edit Artikel</b>',
            'isi' => 'data/editpost',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array()
        );
        $this->load->library('form_validation');

        if (!$data['article'] || !$id) {
            show_404();
        }

        if ($this->input->method() === 'post') {
            // lakukan validasi data seblum simpan ke model
            $rules = $this->article_model->rules();
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() === FALSE) {
                return $this->load->view('user/editpost.php', $data);
            }

            $article = [
                'id' => $id,
                'title' => $this->input->post('title'),
                'category_id' => $this->input->post('category_id'),
                'content' => $this->input->post('content'),
                'draft' => $this->input->post('draft')
            ];
            $updated = $this->article_model->update($article);
            if ($updated) {
                $this->session->set_flashdata('message', 'Article was updated');
                redirect('user/article');
            }
        }

        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function delete($id = null)
    {
        if (!$id) {
            show_404();
        }

        $deleted = $this->article_model->delete($id);
        if ($deleted) {
            $this->session->set_flashdata('message', 'Article was deleted');
            redirect('user/article');
        }
    }

    public function kom()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = array(
            'title' => 'Feedback',
            "articles" => $this->article_model->get_publihed(),
            "categories" => $this->category_model->get(),
            'judul' => '<b>Komentar Pengunjung</b>',
            'isi' => 'data/komdata',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array()
        );






        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->join('article', 'article.id=komentar.idarticle');
        $this->db->order_by("created_at", "desc");
        $query = $this->db->get();
        $data['data'] = $query->result_array();


        $this->load->view('template/wrapper', $data, FALSE);
    }

    public function hapusKomentar($id)
    {

        $data = $this->db->get_where('komentar', ['idkomen' => $id])->row_array();

        // unlink("./uploads/berkas/" . $data['file']);

        $this->db->where(['idkomen' => $id]);

        $this->db->delete('komentar');

        $this->session->set_flashdata('success', 'Pengajuan ID: ' . $id . ' Telah Dihapus!');
        redirect(base_url('user/kom'));
    }

    public function data()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = array(
            'title' => 'Data Penduduk',
            "articles" => $this->article_model->get_publihed(),
            "categories" => $this->category_model->get(),
            'judul' => '<b>Data Penduduk</b>',
            'isi' => 'data/datar',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array()
        );






        $this->db->select('*');
        $this->db->from('data_penduduk');
        // $this->db->join('article','article.id=komentar.idarticle');
        // $this->db->order_by("created_at", "desc");
        $query = $this->db->get();
        $data['data'] = $query->result_array();


        $this->load->view('template/wrapper', $data, FALSE);
    }
    public function datas()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = array(
            'title' => 'Data',
            "articles" => $this->article_model->get_publihed(),
            "categories" => $this->category_model->get(),
            'judul' => '<b>Data</b>',
            'isi' => 'data/dbutton',
            'user' => $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array()
        );






        // $this->db->select('*');
        // $this->db->from('komentar');
        // $this->db->join('article','article.id=komentar.idarticle');
        // $this->db->order_by("created_at", "desc");
        // $query = $this->db->get();
        // $data['data'] = $query->result_array();


        $this->load->view('template/wrapper', $data, FALSE);
    }
}
