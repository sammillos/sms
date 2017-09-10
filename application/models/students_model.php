<?php

class Students_model extends CI_Model {
    
	private $table = "students";
	private $table2 = "course";
	
	public function create($data){
		$this->db->insert($this->table, $data);
		return TRUE;
	}
	
	public function read(){
		
		// SELECT * FROM course
		
		$this->db->select('*');
		$this->db->from($this->table);
		
		// $this->db->select()
				// ->from()
				// ->join()
				// ->where();
		
		// $this->db->join('table2','table1.key=table2.fk','inner');
		// $this->db->order_by('field_name');
		
		$query=$this->db->get();

		return $query->result_array();		
	}
	
	public function readcrs(){
		
		//SELECT * FROM course
		
		$this->db->select('*');
		$this->db->from($this->table2);
		
		$query=$this->db->get();

		return $query->result_array();		
	}
	
	public function addcrs($data){
		$this->db->insert($this->table2, $data);
		return TRUE;
	}
	
	public function update($data){
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;	
	}
	
	public function delete_student($data){
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;	
	}
}
