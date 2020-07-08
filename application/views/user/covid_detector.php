<?php include('header.php'); ?>

  <nav  class="navbar navbar-expand-lg navbar-dark bg-primary">
    <h3 class="heading">Covid Detector</h3>
  </nav>
  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-md-8  ">
        <div class="alert alert-info">
          <h3 class="text-center">COVID-19 Registration Portal </h3>
        </div>
          <?php echo form_open('User/covid_reg_details',['class'=>'shadow-lg p-5']); ?>
              <?php if($this->session->flashdata('error')) { ?>
                  <div class="text-danger text-center"><?php echo $this->session->flashdata('error'); ?></div>
              <?php } ?>
            <div class="form-group ">
              <?php 
                echo form_hidden('added_on',date('Y-m-d H:i:s'));
                echo form_label('Your Name','yourname',['class'=>'font-weight-bold']);
                echo form_input(['type'=>'text','placeholder'=>'Your Name here','name'=>'name','class'=>'form-control']); 
              ?>
              <?php echo form_error('name'); ?>
            </div>
           
            <div class="form-group">
              <?php 
                echo form_label('Your EMail-ID','youremailid',['class'=>'font-weight-bold"']);
                echo form_input(['type'=>'text','placeholder'=>'Your Email-id here','name'=>'email_id','class'=>'form-control']); 
              ?>
              <?php echo form_error('email_id'); ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Your Contact Number','yourcontactnumber',['class'=>'font-weight-bold"']);
                echo form_input(['type'=>'text','placeholder'=>'Your Contact Number here','name'=>'contact','class'=>'form-control']); 
              ?>
              <?php echo form_error('contact'); ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Have You traveled in the last 14 days ?','travelhistory',['class'=>'font-weight-bold']).'<br>';
                echo  form_radio('travel_history','Yes',FALSE,['class'=>'ml-3']).'<span class="ml-2">Yes</span><br>';
                echo  form_radio('travel_history','No',FALSE,['class'=>'ml-3']).'<span class="ml-2">No</span>';
              ?>
              <?php echo form_error('travel_history'); ?>
            </div>
            <div class="form-group">
              <?php 
                echo form_label('Do you have symptoms of cough and cold ?','symptoms',['class'=>'font-weight-bold']).'<br>';
                echo form_radio('symptoms','Yes',FALSE,['class'=>'ml-3']).'<span class="ml-2">Yes</span><br>';
                echo form_radio('symptoms','No',FALSE,['class'=>'ml-3']).'<span class="ml-2">No</span>';
              ?>
               <?php echo form_error('symptoms'); ?>
            </div>
            <div class="form-group text-center">
                <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-danger']); ?>
            </div>
          <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  <!--Start Footer-->
  <footer class="container-fluid bg-dark mt-5 text-white " style="position: fixed;
  bottom: 0; z-index: 100;" >
   <div class="container">
     <div class="row py-3">
        <?php echo anchor('admin/Login_cont/index','Admin Login'); ?>
     </div>
   </div>

<?php include('footer.php'); ?>  
  

