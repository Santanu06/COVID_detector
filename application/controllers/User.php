<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
	{
		parent :: __construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('user/covid_detector.php');
	}
	public function covid_reg_details()
	{
		$covid_reg_data =	$this->input->post();
		$this->form_validation->set_rules('name','Your Name','trim|required|alpha',['required' => 'You must provide  %s.','alpha'=>'Your Name must contain only alphabetical characters.']);
		 $this->form_validation->set_rules('email_id','Your EMail-ID','trim|required|valid_email|is_unique[covid_detector_details.email_id]',['valid_email'=>'Please enter valid email id','is_unique'=>'Email id already Exit ! ','required' => 'You must provide  %s.']);
		 $this->form_validation->set_rules('contact','Your Contact Number','trim|required|numeric|exact_length[10]',['required' => 'You must provide  %s.']);
		 $this->form_validation->set_rules('travel_history','Have You traveled in the last 14 days ?','required',['required' => 'Please Select Yes or No']);
		 $this->form_validation->set_rules('symptoms','Do you have symptoms of cough and cold ?','required',['required' => 'Please Select Yes or No']);
		if($this->form_validation->run() == true){
			$result = $this->User_model->covid_reg_details($covid_reg_data);
			if($result == true){
				$symptoms = $this->input->post('symptoms');
				if($symptoms == 'Yes'){
					$this->session->set_flashdata('YES','Please visit to the nearest government health facility');
				}else{
					$this->session->set_flashdata('NO','Chances are less likely that you have Codid 19');
				}
				$this->load->view('user/message.php');
			}else{
				$this->session->set_flashdata('error','Failed to Submit please try again');
				redirect('User/index');
			}
		}else{
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
			$this->load->view('user/covid_detector.php');
		}
	}
}
