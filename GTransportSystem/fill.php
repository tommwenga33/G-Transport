<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/dsidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Driver > Fill Work Ticket</b></h5>
  </header>

 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Fill Work Ticket</h2>

 	<div class="col-md-6">
      
      <?php
      if(isset($_POST['submit']))
      {
      	
      		$driver = $SESSION['id'];
	      	$n_no = $_POST['ticket_no'];
	      	$n_date = $_POST['dates'];
	      	$n_start = $_POST['start_time'];
	      	$n_begin = $_POST['start'];
	      	$n_finish = $_POST['destination'];
	      	$n_stop = $_POST['finish_time'];
	      	$n_speeds = $_POST['speedometer_reading_start'];
	      	$n_speedf = $_POST['speedometer_reading_finish'];
	      	$n_kilometer = $_POST['kilometer'];
	      	$n_oil = $_POST['oil'];
      	
      	$insert = $db->query("INSERT INTO work(ticket_no,driverID,date,start_time,start,destination,finish_time,speedometer_reading_start,speedometer_reading_finish,kilometer,oil) VALUES('$n_no','$driver','$n_date','$n_start','$n_begin','$n_finish','$n_stop','$n_speeds','$n_speedf','$n_kilometer','$n_oil') ");

      	if($insert){
      		header('location: driver.php');

      		?>

      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Employee successfully added <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error adding employee data. Please try again <i class="fa fa-times"></i></strong>
        </div>
      	<?php
      }
      
      }

     ?>




 		<form method="post" autocomplete="off" enctype="multipart/form-data" style="width: 100%">

	 		<div class="form-group">

	 			<label class="control-label">Ticket number</label>
	 			<input type="text" name="ticket_no" class="form-control" value="Ticket-<?php echo mt_rand(000,999); ?>" readonly="on" required>
	 		
	 			<label class="control-label">Date</label>
	 			<input type="text" name="dates"  required>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Start Time</label>
	 			<input type="text" name="start_time" class="form-control" required>
	 		
	 			<label class="control-label">Start</label>
	 			<input type="text" name="start" class="form-control" required>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Destination</label>
	 			<input type="text" name="destination" class="form-control" required>
	 		

	 			<label class="control-label">Finish Time</label>
	 			<input type="text" name="finish_time" class="form-control" required>
	 		</div>
	 		<div class="form-group">
	 			<label class="control-label">Speedometer Start</label>
	 			<input type="text" name="speedometer_reading_start" class="form-control" required>
	 		
	 			<label class="control-label">Speedometer Finish</label>
	 			<input type="text" name="speedometer_reading_finish" class="form-control" required>
	 		</div>
	 		<div class="form-group">
	 			<label class="control-label">Kilometer</label>
	 			<input type="text" name="kilometer" class="form-control" required>
	 		
	 			<label class="control-label">Oil</label>
	 			<input type="text" name="oil" class="form-control" required>
	 		</div>
	 		<button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Fill</button>
 		</form>
 	</div>
 </div>
</div>

</div>
<?php include 'theme/foot.php'; ?>