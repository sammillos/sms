<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boots extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model('students_model','Students');
		
	}
	
	public function readcrs(){
		
		$crs = $this -> Students -> readcrs();
		$header_data['title'] = "View Course";	
		
		foreach($crs as $r){
			$info = array('crsname' => $r['crsname'],'crsdesc' => $r['crsdesc']);
			$course[] = $info;
		}
		
		$data['course'] = $course;
		$this->load->view('include/header',$header_data);	
		$this->load->view('courses/viewcourse',$data);
		$this->load->view('include/footer');		
	}
	
	
	//Add Course
	public function addcrs(){
		
		$data = array();
		
		if( $_SERVER['REQUEST_METHOD']=='POST'){ //form was submitted
			
				$validate = array (
				array('field'=>'crsname','label'=>'Course: ','rules'=>'trim|required|min_length[3]'),
				array('field'=>'crsdesc','label'=>'Description: ','rules'=>'trim|required|min_length[10]'),
			);

			$this->form_validation->set_rules($validate);
			
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			else{ //save the form
				
				//check for duplicate
				$record = array(
								'crsname'=>$_POST['crsname'],
								'crsdesc'=>$_POST['crsdesc'],
							);
							
				$insert_id = $this->Students->addcrs($record);
				$data['saved'] = TRUE;
			}
			
		}
		else{ //display blank form
				
		}
		$header_data['title'] = "Add Course";
		$this->load->view('include/header',$header_data);
		$this->load->view('courses/addcrs',$data);
		$this->load->view('include/footer');
	}
	//End of Add Course
	
	
	
	
	public function stud(){
		
		$rs = $this->Students->read();
		
		$header_data['title'] = "View Student";	
		
		foreach($rs as $r){
			$info = array(
						'idno' => $r['idno'],
						'lastname' => $r['lname'],
						'firstname' => $r['fname'],
						'middlename' => $r['mname'],
						'course' => $r['course'],
						'sex' => $r['sex']					
						);
			$students[] = $info;
		}
		
		$data['students'] = $students;
		$this->load->view('include/header',$header_data);	
		$this->load->view('students/viewstud',$data);
		$this->load->view('include/footer');		
	}
	
	public function index(){	
		// echo "CI and Bootstrap";
		
		$header_data['title'] = "Student Management System";
		
		// $condition = array('course'=>'BSIT');
		
		$rs = $this->Students->read();

		foreach($rs as $r){
			$info = array(
						'idno' => $r['idno'],
						'lastname' => $r['lname'],
						'firstname' => $r['fname'],
						'middlename' => $r['mname'],
						'course' => $r['course'],
						'sex' => $r['sex']					
						);
			$students[] = $info;
		}
		
		$data['students'] = $students;
		
		$this->load->view('include/header',$header_data);
		$this->load->view('students/contents', $data);
		$this->load->view('include/footer');
		
	}	
	
	public function add_student(){
		
		
		$data = array();
		
		if( $_SERVER['REQUEST_METHOD']=='POST'){ //form was submitted
			//save the new student
			//do some stuff
			// print_r($_POST);
			// Array ( [idno] => 11-111-111 [lname] => Magalpok
			// [fname] => Gorgonia [mname] => Restituto [course] => BSIT 
			// [sex] => F ) 
			
			$validate = array (
				array('field'=>'idno','label'=>'ID No','rules'=>'trim|required|min_length[2]'),
				array('field'=>'lname','label'=>'Last Name','rules'=>'trim|required|min_length[2]'),
				array('field'=>'fname','label'=>'First Name','rules'=>'trim|required|min_length[2]'),
				//array('field'=>'email','label'=>'Email Address','rules'=>'trim|required|is_unique[students.email]|valid_email|min_length[10]'),
			);

			$this->form_validation->set_rules($validate);
			
			if ($this->form_validation->run()===FALSE){
				$data['errors'] = validation_errors();
			}
			else{ //save the form
				
				//check for duplicate
				$record = array(
								'idno'=>$_POST['idno'],
								'lname'=>$_POST['lname'],
								'fname'=>$_POST['fname'],
								'mname'=>$_POST['mname'],
								'course'=>$_POST['course'],
								'sex'=>$_POST['sex'],
							);
							
				$insert_id = $this->Students->create($record);
				
				$data['saved'] = TRUE;
				
			}
			
		}
		else{ //display blank form
				
		}
		$header_data['title'] = "Add New Student";
		$rs = $this->Students->readcrs();
		foreach($rs as $r){
			$info = array(
						'crsname' => $r['crsname'],				
						'crsdesc' => $r['crsdesc'],				
						);
			$course[] = $info;
		}
		
		$data['course'] = $course;
		
		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_student',$data);
		$this->load->view('include/footer');
	}

	public function modal(){
		$header_data['title'] = "Add New Student";	
		$this->load->view('include/header',$header_data);	
		$this->load->view('students/modal');
		$this->load->view('include/footer');		
	}
}
