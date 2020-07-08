<?php include('header.php'); ?>

  <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <h3 class="text-center mb-3">Admin Login</h3>
            <?php if($this->session->flashdata('error')) { ?>
              <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
            <?php } ?>
              <?php 
                echo form_open('admin/Login_cont/admin_login',['class'=>'shadow-lg p-5']);
              ?>
                <div class="form-group">
                  <?php 
                    echo form_label('User Name','username',['class'=>'font-weight-bold']);
                    echo form_input(['type'=>'text','name'=>'user_name','placeholder'=>'User Name','class'=>'form-control']);
                  ?>
                  <?php echo form_error('user_name'); ?>
                </div>
                <div class="form-group">
                  <?php 
                    echo form_label('Password','password',['class'=>'font-weight-bold']);
                    echo form_password(['type'=>'password','name'=>'password','placeholder'=>'Password','class'=>'form-control']);
                  ?>
                  <?php echo form_error('password'); ?>
                </div>
                <div class="form-group text-center">
                  <?php 
                    echo form_submit(['value'=>'Submit','class'=>'btn btn-danger']);
                  ?>
                </div>
              <?php echo form_close(); ?>
        </div>
      </div>
  </div>
<?php include('footer.php'); ?>