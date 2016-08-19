<?php
	class Add extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->is_logged_in();
		}
		public function index(){
			$this->load->view('add');
		}
		public function create(){
			$file_name=mt_rand().'.'.strtolower(end(explode('.',$_FILES['image']['name'])));
			$file_tmp =$_FILES['image']['tmp_name'];
			move_uploaded_file($file_tmp,'assets/upload/'.$file_name);
			$data=array(
			 		'name'=>$this->input->post('name'),
			 		'location'=>$this->input->post('location'),
			 		'language_class'=>$this->input->post('language'),
			 		'contact_no'=>$this->input->post('contact'),
			 		'email'=>$this->input->post('email'),
			 		'website'=>$this->input->post('website'),
			 		'image'=>$file_name
			 	);
			 	$this->load->model('crud');
			 	$this->crud->add_record($data);
			 	$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">New Institute added!!!</div>');
			 	redirect('admin_area/index');
			 	
		}
		public function is_logged_in(){
      $is_logged_in=$this->session->userdata('is_logged_in');
      if(!isset($is_logged_in)|| $is_logged_in !==true){
        redirect('login');
      }
    }
	}
?>