<?php 
  class Admin_model extends CI_Model
  {
    public function adminLogin($user_name,$password)
    {
     $sql = $this->db->where(['user_name'=>$user_name,'password'=>$password])
                 ->get('admin');
          if($sql->num_rows()){
            return $sql->row('id');
          }else{
            return false;
          }
    }

    public function view_details()
    {
      $sql = $this->db->select('*')
                      ->get('covid_detector_details');
        if($sql->num_rows()){
          return $sql->result_array();
        }
    }

    // public function searchDate($from,$to)
    // {
    //   $sql = $this->db->query("SELECT * FROM covid_detector_details WHERE added_on BETWEEN '$from' AND '$to'");
    //               if($sql->num_rows()){
    //                 return $sql->result_array();
    //               }
    // }

    public function searchDate($from,$to)
    {
          $this->db->where('added_on >=', $from);
        $this->db->where('added_on <=', $to);
       $sql =  $this->db->get('covid_detector_details');
         if($sql->num_rows()){
           return $sql->result_array();
         }
    }
  }