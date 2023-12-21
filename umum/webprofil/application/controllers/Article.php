<?php

class Article extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('front/article_model');
    $this->load->model('front/category_model');
    // $this->load->model('front/komen_model');
    $this->load->library('pagination');
  }

  public function index()
  
  {
    // ambil artikel yang statusnya bukan draft

    $this->load->library('pagination');

    
    $config['base_url'] = site_url('/article');
    $config['page_query_string'] = TRUE;
    $config['total_rows'] = $this->article_model->get_published_count();
    $config['per_page'] = 6;
    
    $config['full_tag_open'] = '<ul class="page-numbers">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $limit = $config['per_page'];
    $offset = html_escape($this->input->get('per_page'));

    $data['articles'] = $this->article_model->get_publihed($limit, $offset);
    $data['meta'] = [
			'title' => 'Article',
			'articles' =>$this->article_model->get_publihed($limit, $offset),
      'categories' => $this->category_model->get()
		];

    if (count($data['articles']) > 0) {
      
      // kirim data artikel ke view
      $this->load->view('front/articles/list_article.php', $data);
    } else {
      // kalau gak ada artikel, tampilkan view ini
      $this->load->view('front/articles/empty_article.php');
    }
  }

  public function komen($slug) 
	{
		$slug             = $this->input->post('slug');
		$data['article'] = $this->article_model->find_by_slug($slug);
    $data['meta'] = [
			'title' => 'Article ',
			'articles' =>$this->article_model->find_by_slug($slug),
      'categories' => $this->category_model->get()
		];
		$id             = $this->input->post('id');
		$slug             = $this->input->post('slug');
		$nama           = $this->input->post('nama');
		$no_hp           = $this->input->post('no_hp');
		$email          = $this->input->post('email');
		$isi_komentar   = $this->input->post('pesan');
		$this->db->query("INSERT INTO komentar VALUES('','0','$nama','$no_hp','$email','$isi_komentar','$id')");
		$this->load->view('front/articles/show_article.php', $data);
	}

  public function category($category_slug)
  {
    $this->load->library('pagination');

    
    $config['base_url'] = site_url('/article/category/').$category_slug;
    $config['page_query_string'] = TRUE;
    $config['total_rows'] = $this->article_model->get_published_count_c($category_slug);
    $config['per_page'] = 6;
    
    $config['full_tag_open'] = '<ul class="page-numbers">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $limit = $config['per_page'];
    $offset = html_escape($this->input->get('per_page'));

    // $data['articles'] = $this->article_model->get_publihed($limit, $offset);
    $data['articles'] = $this->article_model->getarticlebycategory($category_slug,$limit, $offset);
    $data['meta'] = [
			'title' => 'Article',
			'articles' =>$this->article_model->get_publihed($limit, $offset),
      'categories' => $this->category_model->get()
		];

    // $data['articles'] = $this->article_model->get_publihed();
    $data['meta'] = [
			'title' => 'Article',
			'articles' =>$this->article_model->get_publihed(),
      'categories' => $this->category_model->get()
		];
		$this->load->view('front/articles/list_article.php',$data);
	}

  public function show($slug = null)
  {
    // jika gak ada slug di URL tampilkan 404
    if (!$slug) {
      show_404();
    }

    // ambil artikel dengan slug yang diberikan
    $data['article'] = $this->article_model->find_by_slug($slug);
    $data['meta'] = [
			'title' => 'Article ',
			'articles' =>$this->article_model->find_by_slug($slug),
      'categories' => $this->category_model->get()
		];

    // jika artikel tidak ditemuakn di database tampilkan 404
    if (!$data['article']) {
      show_404();
    }

    // tampilkan artikel
    $this->load->view('front/articles/show_article.php', $data);
  }

  public function detail() {
    $id                     = $this->uri->segment('3');
    $content                = $this->db->query("SELECT * FROM article WHERE id='$id'")->row_array();
    $data['content_title']  = $content['content_title'];
    $data['content_body']   = $content['content_body'];
    $data['content_id']     = $content['content_id'];
    $this->load->view('front/articles/show_article.php', $data);
  }

  

  

  public function balas() {
      $comment_id = $this->input->post('comment_id');
      $content_id = $this->input->post('content_id');
      $nama       = $this->input->post('nama');
      $email      = $this->input->post('email');
      $isi        = $this->input->post('isi');
      $this->db->query("INSERT INTO table_comment VALUES('','$comment_id','$nama','$email','$isi','$content_id')");
      redirect('komentar/detail/'.$content_id); 
  } 

  
}