<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin_area extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->is_logged_in();
			$this->load->library('pagination');
		}
		public function index(){
    		$this->load->model('crud');  
         	$result = $this->crud->get_records();           
     		$data['records'] = $result;
			if(isset($_GET['search'])) $find = " WHERE location like '%".$_GET['search']."%' OR name like '%".$_GET['search']."%'";  else $find='';
          	$count = $this->crud->get_all_records($find)->num_rows();
          	
			$queryString="";
			if(isset($_GET['per_page']) && is_numeric($_GET['per_page']))
			$page = intval($_GET['per_page']);
			else
			$page =0;
			$row_per_page = 5; /// user define 
			$totalRow = $count; /// total row
			$offset = $page; /// cones from url (query string)
			$data['records'] = $this->crud->get_paginate($offset,$row_per_page,$find);
			$config['page_query_string'] = TRUE;
			$config['base_url'] = base_url()."admin_area/?q=q$queryString";
			$config['total_rows'] = $totalRow;
			$config['per_page'] = $row_per_page;
			$this->pagination->initialize($config);
			$data['count'] = $count;
	     	 $this->load->view('admin_home',$data);
     	}
		
		public function delete($id){
		 	$this->db->where('id',$id);
		 	$this->db->delete('tbl_institute');
		 	redirect('admin_area');
		}

		public function add(){
		 	$this->load->controller('add');
		}
		public function is_logged_in(){
      		$is_logged_in=$this->session->userdata('is_logged_in');
      		if(!isset($is_logged_in)|| $is_logged_in !==true){
        		redirect('login');
      		}
    	}
		public function do_logout(){
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
		
	}
?>