<?php
	class Cinstitutes extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('pagination');
			$this->load->model('crud');
		}
		public function index(){
			$result = $this->crud->get_records();           
     		$data['records'] = $result;
			if(isset($_GET['search'])) $find = " WHERE location like '%".$_GET['search']."%' OR name like '%".$_GET['search']."%'";  else $find='';
          	$count = $this->crud->get_all_records($find)->num_rows();
          	
			$queryString="";
			if(isset($_GET['per_page']) && is_numeric($_GET['per_page']))
			$page = intval($_GET['per_page']);
			else
			$page =0;
			$row_per_page = 4; /// user define 
			$totalRow = $count; /// total row
			$offset = $page; /// cones from url (query string)
			$data['records'] = $this->crud->get_paginate($offset,$row_per_page,$find);
			$config['page_query_string'] = TRUE;
			$config['base_url'] = base_url()."cinstitutes/?q=q$queryString";
			$config['total_rows'] = $totalRow;
			$config['per_page'] = $row_per_page;
			$this->pagination->initialize($config);
			$data['count'] = $count;
			$this->load->view('institutes',$data);
		}
		public function detail($id){
			$data['info']=$this->crud->get_records_by_id($id);
			$this->load->view('institute',$data);
		}
	}
?>