<?php

class Form_model extends CI_Model
{
    private $_table = "permohonan";
    public function rules(){
        return [
			[
				'field' => 'nama', 
				'label' => 'Name', 
				'rules' => 'required|max_length[32]'
			],
			[
				'field' => 'nik', 
				'label' => 'NIK', 
				'rules' => 'required|max_length[16]'
			],
			[
				'field' => 'email', 
				'label' => 'Email', 
				'rules' => 'required|valid_email|max_length[32]'
			],
			[
				'field' => 'nomor', 
				'label' => 'Nomor', 
				'rules' => 'required|max_length[14]'
			],
			[
				'field' => 'jenissurat', 
				'label' => 'Jenis Surat', 
				'rules' => 'required'
            ],
			[
				'field' => 'message', 
				'label' => 'Message', 
				'rules' => 'required'
            ],
		];
        
    }
    // disni
    public function insert($surat)
	{
		if(!$surat){
			return;
		}

		return $this->db->insert($this->_table, $surat);
	}

	public function get()
	{
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function delete($id)
	{
		if(!$id){
			return;
		}

		$this->db->delete($this->_table, ['id' => $id]);
	}

	public function count(){
		return $this->db->count_all($this->_table);
	}

}