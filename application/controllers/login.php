<?php

	class Login extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		public function index($msg= NULL){
			$err_msg['msg']='asdasdasd';
			$data['main_content']='login_form';
			$this->load->view('includes/template',$data,$err_msg);
		}
		public function validate_credentials(){
			$this->load->model('membership_model');
			$query=$this->membership_model->validate();

			if($query){
				$data=array(
					'username'=>$this->input->post('username'),
					'is_logged_in'=>true
				);
				$this->session->set_userdata($data);
				redirect(base_url('admin_area'));
			}
			else{
				// $msg="<font color='red'>Invaid Username and/or password</font>";
				$this->index($msg);
			}
		}
		public function signup(){
			$data['main_content']='signup_form';
			$this->load->view('includes/template',$data);
		}
		public function create_admin(){
			$this->form_validation->set_rules('first_name','First Name','trim|required');
			$this->form_validation->set_rules('last_name','Last Name','trim|required');
			$this->form_validation->set_rules('email_address','Email','trim|required|valid_email');
			$this->form_validation->set_rules('username','User Name','trim|required|min_length[5]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[8]|max_length[32]');
			$this->form_validation->set_rules('password2','Confirm Password','trim|required|matches[password]');	

			if($this->form_validation->run()==FALSE){
				$this->load->view('signup_form');
			}
			else{
				$this->load->model('membership_model');
				if($query=$this->membership_model->create_admin()){
					$data['main_content']='signup_successful';
					$this->load->view('includes/template',$data);
				}
				else{
					$this->load->view('signup_form');
				}
			}
		}
	}
?>