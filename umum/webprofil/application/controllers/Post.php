<?php

class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('front/article_model');
		$this->load->model('front/category_model');
	}

	public function index()
	{
		
		$data = [
			"articles" => $this->article_model->get_publihed(),
			"categories" => $this->category_model->get()
		];

		if(count($data['articles']) <= 0){
            $this->load->view('admin/post_empty.php');
        } else {
            $this->load->view('admin/post_list.php', $data);
        }
	}



	public function new()
	{
		
		$this->load->library('form_validation');
		if ($this->input->method() === 'post') {
			// Lakukan validasi sebelum menyimpan ke model
			$rules = $this->article_model->rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				
				return $this->load->view('admin/post_new_form.php');
			}
			

			// generate unique id and slug
			$id = uniqid('', true);
			$slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;

			$file_name = str_replace('.','',$data['article']->id);
			$config['encrypt_name'] = TRUE;
			$config['upload_path']          = FCPATH.'/upload/thumbnail/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			$config['file_name']            = $file_name;
			$config['overwrite']            = true;
			
			$this->load->library('upload');
			$this->upload->initialize($config);

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
				return redirect('admin/post');
			}
		}
		$data = [
			"articles" => $this->article_model->get(),
			"categories" => $this->category_model->get()
		];
		$this->load->view('admin/post_new_form.php', $data);
	}

	public function edit($id = null)
	{
		// $data['article'] = $this->article_model->find($id);
		$data = [
			"article" => $this->article_model->find($id),
			"categories" => $this->category_model->get()
		];
		$this->load->library('form_validation');

		if (!$data['article'] || !$id) {
			show_404();
		}
		
		if ($this->input->method() === 'post') {
			// lakukan validasi data seblum simpan ke model
			$rules = $this->article_model->rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				return $this->load->view('admin/post_edit_form.php', $data );
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
				redirect('admin/post');
			}
		}

		$this->load->view('admin/post_edit_form.php', $data);
	}

	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->article_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Article was deleted');
			redirect('admin/post');
		}
	}
}