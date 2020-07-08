<?php 
  class User_model extends CI_Model
  {
      public function covid_reg_details($data)
      {
       return $this->db->insert('covid_detector_details',$data);
      }
  }
?>