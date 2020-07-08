<?php include('header.php'); ?>
  <nav  class="navbar navbar-expand-lg navbar-dark bg-info">
    <h3 class="heading">Covid Detector Admin Panel</h3>
    <?php echo anchor('admin/Admin/logout','Log Out',['class'=>'btn btn-danger btn-sm ml-5']); ?>
  </nav>
  <div class='container mt-5'>
      <div class="row">
        <div class='col-md-12'>
          <h4 class="mb-3">Covid 19 Registration List</h4>
          <div class="col-md-8">
              <?php echo form_open('admin/Admin/search_date'); ?>
              <div class="form-group form-inline">
                <?php
                  echo form_label('From','from',['class'=>'font-weight-bold mr-2']); 
                  echo form_input(['type'=>'date','name'=>'from','class'=>'form-control']);
                  echo form_label('To','to',['class'=>'font-weight-bold ml-2 mr-2']);
                  echo form_input(['type'=>'date','name'=>'to','class'=>'form-control']);
                  echo form_input(['type'=>'submit','value'=>'Search','class'=>'btn btn-danger ml-2']);
                ?>
              </div>
          </div>
          <table class="table">
              <thead>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Email Id</th>
                <th>Contact No</th>
                <th>Travel History</th>
                <th>Symptoms(Cough/Cold)</th>
                <th>Registration On</th>
              </thead>
              <tbody>
              <?php 
                    $serial_no = 0;
                    if(isset($result) && count($result) > 0){
                    foreach($result as $row){
                  ?>
                <tr>
                    <td><?php echo ++$serial_no; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email_id']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['travel_history']; ?></td>
                    <td><?php echo $row['symptoms']; ?></td>
                    <td><?php echo date('d-M-Y', strtotime($row['added_on'])); ?></td>
                </tr>
                <?php } 
                } else{ ?>
                  <tr>
                    <td colspan="7" class="empty-table" >No Data Found</td>
                  </tr>
                <?php }  ?>
              </tbody>
          </table>
        </div>
      </div>
  </div>
<?php include('footer.php'); ?>