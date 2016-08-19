<?php

	class Membership_model extends CI_Model{
		public function validate(){
			
			 $this->db->where('username',$this->input->post('username'));
			 $this->db->where('password',md5($this->input->post('password')));
			 $query=$this->db->get('tbl_admin');

			if($query->num_rows==1){
				return true;
			}
		}
		public function create_admin(){
		 	$new_admin_insert_data=array(
		 		'first_name'=>$this->input->post('first_name'),
		 		'last_name'=>$this->input->post('last_name'),
		 		'username'=>$this->input->post('username'),
		 		'email_address'=>$this->input->post('email_address'),
		 		'password'=>md5($this->input->post('password'))
		 	);
		 	$insert=$this->db->insert('tbl_admin',$new_admin_insert_data);
		 	return $insert;
		 }
	}


?>