<?php

class Data_model extends CI_Model{
 
    function get_jk(){
        $sql="SELECT jenis_kelamin,COUNT(*) FROM data_penduduk GROUP BY jenis_kelamin";    
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
    function get_kerja(){
        $sql="SELECT pekerjaan,COUNT(*) FROM data_penduduk GROUP BY pekerjaan";    
        $query = $this->db->query($sql);
        return $query->result_array();
        
    }
 
}