<?php
	class Crud extends CI_Model{
		//read the institution list from db
		public function get_records(){
			$sql='select * from tbl_institute';
  			$query=$this->db->query($sql);
			$result = $query->result();
          	return $result;
		}
		public function get_paginate($offset,$row_per_page,$find){
			$sql="select * from tbl_institute $find ORDER BY id ASC LIMIT $offset,$row_per_page";
  			$query=$this->db->query($sql);
  			return $query;
		}
		public function get_all_records($find){
			$sql="select * from tbl_institute $find";
  			$query=$this->db->query($sql);
			return $query;
		} 
		public function get_records_by_id($id){
			$sql="select * from tbl_institute where id='".$id."' limit 1; ";
  			$query=$this->db->query($sql);
			$result = $query->row();
          	return $result;
		}

		public function edit_record($id, $data){
			$this->db->where('id',$id);
			$this->db->update('tbl_institute',$data);
		}
		//add institution to database
		public function add_record($data){
		 	$this->db->insert('tbl_institute',$data);
		 	return;
		}
		
	}
?>