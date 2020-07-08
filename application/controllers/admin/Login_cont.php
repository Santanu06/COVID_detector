<?php 
  class Login_cont extends MY_Controller
  {
    public function __construct()
    {
      parent :: __construct();
      $this->load->model('Admin_model');
      if($this->session->userdata('admin_id')){
        redirect('admin/Admin/index');
      }
    }
    
    public function index()
    {
      $this->load->view('admin/admin_login.php');
    }

    public function admin_login()
    {
      $data = $this->input->post();
      $this->form_validation->set_rules('user_name','User Name','trim|required');
      $this->form_validation->set_rules('password','Password','trim|required');
      if($this->form_validation->run() == true){
        $user_name = $this->input->post('user_name');
        $password = $this->input->post('password');
        $admin_id = $this->Admin_model->adminLogin($user_name,$password);
        if($admin_id){
          $this->session->set_userdata('admin_id',$admin_id);
          redirect('admin/Admin/index');
        }else{
          $this->session->set_flashdata('error','Invalid User name or Password');
          redirect('admin/Login_cont/index');
        }
      }else{
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        $this->load->view('admin/admin_login');
      }
      
    }
  }
?>