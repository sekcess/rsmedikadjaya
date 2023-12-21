<?php

class Article_model extends CI_Model
{
	private $_table = 'article';

	public function rules()
	{
		return [
			[
				'field' => 'title',
				'label' => 'Title',
				'rules' => 'required|max_length[128]'
			],
			[
				'field' => 'draft',
				'label' => 'Draft',
				'rules' => 'required|in_list[true,false]'
			],
			[
				'field' => 'content',
				'label' => 'Content',
				'rules' => '' // <-- rules dikosongkan
			]
		];
	}

	public function search($keyword)
	{
		if(!$keyword){
			return null;
		}
		$this->db->like('title', $keyword);
		$this->db->or_like('content', $keyword);
		$this->db->join('category', 'category.c_id = article.category_id');
		$this->db->order_by("article.id", "desc");
		$this->db->limit(10);
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function get()
	{
		$this->db->select('*');
		// $this->db->from($this->_table);
		$this->db->join('category', 'category.c_id = article.category_id');
		$this->db->order_by("article.id", "desc");
		$this->db->limit(4);
		$query = $this->db->get($this->_table);
		// $this->db->from('article');
		// $this->db->order_by('posting.id', 'desc');
		// $this->db->limit(4);
		// return $this->db->get()->result();

		return $query->result();
	}

	public function get_publihed($limit = null, $offset = null)
	{
		if (!$limit && $offset) {
			$query = $this->db->get_where($this->_table, ['draft' => 'false']);
		} else {
			$this->db->join('category', 'category.c_id = article. category_id');
			$this->db->order_by("article.id", "desc");
			$query =  $this->db->get_where($this->_table, ['draft' => 'false'], $limit, $offset);
			// $this->db->select('*');
			
			// $query = $this->db->get($this->_table);
		}
		return $query->result();
	}

	public function getarticlebycategory($category_slug,$limit, $offset)
	{
		
		if (!$limit && $offset) {
			$query = $this->db->get_where($this->_table, ['draft' => 'false']);
		} else {
			$category_id =$this->db->get_where('category', array('slug_c' => $category_slug))->row('c_id');
			$this->db->join('category', 'category.c_id = article. category_id');
			$this->db->order_by("article.id", "desc");
			$query =  $this->db->get_where($this->_table, ['category_id'=>$category_id], $limit, $offset);
			// $this->db->select('*');
			
			// $query = $this->db->get($this->_table);
		}
		return $query->result();
		// $this->db->join('category', 'category.c_id = article. category_id');
		// return $this->db->order_by('article.id','desc')->get_where('article', array('category_id'=>$category_id))->result();
	}
	

	public function get_published_count()
	{
		$query = $this->db->get_where($this->_table, ['draft' => 'FALSE']);
		return $query->num_rows();
	}
	
	public function get_published_count_c($category_slug)
	{
		$category_id =$this->db->get_where('category', array('slug_c' => $category_slug))->row('c_id');
		$query = $this->db->get_where($this->_table, ['category_id'=>$category_id]);
		return $query->num_rows();
	}

	public function find_by_slug($slug)
	{
		if (!$slug) {
			return;
		}
		$query = $this->db->get_where($this->_table, ['slug' => $slug]);
		return $query->row();
	}

	public function find($id)
	{
		if (!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id' => $id));
		return $query->row();
	}

	public function insert($article)
	{
		return $this->db->insert($this->_table, $article);
	}

	public function update($article)
	{
		if (!isset($article['id'])) {
			return;
		}

		return $this->db->update($this->_table, $article, ['id' => $article['id']]);
	}

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		return $this->db->delete($this->_table, ['id' => $id]);
	}

	public function count(){
		return $this->db->count_all($this->_table);
	}
}