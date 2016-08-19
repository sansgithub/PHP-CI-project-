<?php
class Edit extends CI_Controller{
  function __construct(){
      parent::__construct();
      $this->is_logged_in();
    }
    public function index($id){
      $this->load->model('crud');  
      $result['records'] = $this->crud->get_records_by_id($id);
      $this->load->view('edit', $result);
    }
    public function update($item_id){    
      
      // $this->form_validation->set_rules('name','Name','trim|required|min_length[8]|max_length[20]');  
      // $this->form_validation->set_rules('locatin','Address','trim|required|max_length[20]');
      // $this->form_validation->set_rules('language_class','Languages','trim|required|max_length[20]');
      // $this->form_validation->set_rules('contact_no','Contact','trim|required|regex_match[/^[0-9]{10}$/]');
      // $this->form_validation->set_rules('email','Email','trim|required|valid_email');
      // $this->form_validation->set_rules('website','Website','trim|required|');
      // $this->form_validation->set_rules('image','Choose Image','requred|file_required|file_min_size[10KB]|
      // file_max_size[500KB]|file_allowed_type[image]|file_image_mindim[50,50]|file_image_maxdim[400,300]');
     
      // if($this->form_validation->run()==FALSE){
      //   redirect('edit');
      // }
      // else{
      if(!empty($_FILES['image']['name'])){
        $file_name=mt_rand().'.'.strtolower(end(explode('.',$_FILES['image']['name'])));
        $file_tmp =$_FILES['image']['tmp_name'];
        move_uploaded_file($file_tmp,'assets/upload/'.$file_name);
      }
      $data=array(
          'name'=>$this->input->post('name'),
          'location'=>$this->input->post('location'),
          'language_class'=>$this->input->post('language'),
          'contact_no'=>$this->input->post('contact'),
          'email'=>$this->input->post('email'),
          'website'=>$this->input->post('website')
        );
        if(!empty($_FILES['image']['name'])) $data['image'] =$file_name; 
        $this->load->model('crud');
        $this->crud->edit_record($item_id, $data);
        redirect('admin_area');
    }
    public function is_logged_in(){
      $is_logged_in=$this->session->userdata('is_logged_in');
      if(!isset($is_logged_in)|| $is_logged_in !==true){
        redirect('login');
      }
    }
}