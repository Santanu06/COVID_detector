<?php 
  class Admin extends MY_Controller
  {
    public function __construct()
    {
      parent :: __construct();
      $this->load->model('Admin_model');
      if(! $this->session->userdata('admin_id')){
        redirect('admin/Login_cont/index');
      }
    }
    public function index()
    {
      $result = $this->Admin_model->view_details();
      $this->load->view('admin/dashboard.php',['result'=>$result]);
    }

    public function search_date()
    {
       $from = $this->input->post('from');
       $to = $this->input->post('to');
      $result = $this->Admin_model->searchDate($from,$to);
      $this->load->view('admin/search_data.php',['result'=>$result]);
    }
    public function logout()
    {
      $this->session->unset_userdata('admin_id');
      $this->load->view('admin/admin_login.php');
    }
  }
?>