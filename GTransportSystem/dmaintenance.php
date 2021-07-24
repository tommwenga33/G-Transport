<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/dsidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Driver > Fill Maintenance</b></h5>
  </header>

 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
  <h2>Fill Maintenance</h2>

  <div class="col-md-6">
      
      <?php
      if(isset($_POST['submit']))
      {
        

          $n_no = $_POST['Rq_no'];
          $n_date = $_POST['date'];
          $n_job = $_POST['job_no'];
          $n_section = $_POST['section'];
          $n_amount = $_POST['Amount'];
          $n_vehicle = $_POST['vehicle_no'];
        
        $insert = $db->query("INSERT INTO maintenance(Rq_no,date,job_no,section,Amount,vehicle_no) VALUES('$n_no','$n_date','$n_job','$n_section','$n_amount','$n_vehicle') ");

        if($insert){
          header('location: driver.php');

          ?>

        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Record successfully added <i class="fa fa-check"></i></strong>
        </div>
       <?php
        }else{
          header('location: dmaintenance.php');
         ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error adding Record data. Please try again <i class="fa fa-times"></i></strong>
        </div>
        <?php
      }
      
      }

     ?>




    <form method="post" autocomplete="off" enctype="multipart/form-data" style="width: 100%">

      <div class="form-group">

        <label class="control-label">Rq number</label>
        <input type="text" name="Rq_no" class="form-control" value="Rq-<?php echo mt_rand(000,999); ?>" readonly="on" required>
      
        <label class="control-label">Date</label>
        <input type="text" name="date"  required>
      </div>

      <div class="form-group">
        <label class="control-label">Job Number</label>
        <input type="text" name="job_no" class="form-control" required>
      
        <label class="control-label">Section</label>
        <input type="text" name="section" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="control-label">Amount</label>
        <input type="text" name="Amount" class="form-control" required>
      

        <label class="control-label">Vehicle no.</label>
        <input type="text" name="vehicle_no" class="form-control" required>
      </div>
      <button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Fill</button>
    </form>
  </div>
 </div>
</div>

</div>
<?php include 'theme/foot.php'; ?>