<?php 
    $config = ['covid_reg_validation'=> [
                                          [
                                            'field'=>'name',
                                            'label'=>'Your Name',
                                            'rules'=>'trim|required|alpha'
                                          ],
                                          [
                                            'field'=>'email_id',
                                            'label'=>'Your EMail-ID',
                                            'rules'=>'trim|required|valid_email|is_unique[covid_detector_details.email_id]',['valid_email'=>'Please enter valid email id','is_unique[covid_detector_details.email_id]'=>'Email id already Exit ! ']
                                          ],
                                          [
                                            'field'=>'contact',
                                            'label'=>'Your Contact Number',
                                            'rules'=>'trim|required|numeric'
                                          ],
                                         ]
                ]
?>