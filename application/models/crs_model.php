<?php

class Crs_model extends CI_Model {
    
	private $table = "course";
	
	public function readcrs(){
		
		// SELECT * FROM course
		
		$this->db->select('*');
		$this->db->from($this->table);
		
		$query=$this->db->get();

		return $query->result_array();		
	}
	
	public function addcrs($data){
		$this->db->insert($this->table, $data);
		return TRUE;
	}
	
	public function update($data){
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;	
	}
	
	public function delete_crs($data){
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;	
	}
}
