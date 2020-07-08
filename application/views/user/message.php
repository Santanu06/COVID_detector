<?php include('header.php'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="shadow-lg m-5 ">
                  <?php if($this->session->flashdata('YES')) { ?>
                    <div class="alert alert-danger text-center"><h3><?php echo $this->session->flashdata('YES'); ?></h3></div>
                  <?php } ?>
                  <?php if($this->session->flashdata('NO')) { ?>
                    <div class="alert alert-success text-center"><h3><?php echo $this->session->flashdata('NO'); ?></h3></div>
                  <?php } ?>
                  </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <?php echo anchor('User/index','Back',['class'=>'btn btn-primary']); ?>
        </div>
    </div>
<?php include('footer.php'); ?>