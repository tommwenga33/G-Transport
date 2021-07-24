<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/msidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> MTO Dashboard > Assign Work</b></h5>
  </header>
 
 

 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Assign Work</h2>

 	<div class="col-md-6">
      
      <?php
      if(isset($_POST['submit']))
      {

	      	$n_job = $_POST['job_no'];
	      	$n_description = $_POST['description'];
	      	$n_start = $_POST['start'];
	      	$n_destination = $_POST['destination'];
	      	$n_driver = $_POST['driver'];

      	$insert = $db->query("INSERT INTO assign(job_no,description,start,destination,driver) VALUES('$n_job','$n_description','$n_start','$n_destination','$n_driver') ");

      	if($insert){?>
      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Work Successfully assigned <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error assigning Work. Please try again <i class="fa fa-times"></i></strong>
        </div>
      	<?php
      }
      
      }

     ?>




 		<form method="post" autocomplete="off" enctype="multipart/form-data">

	 		<div class="form-group">
	 			<label class="control-label">Job Number</label>
	 			<input type="text" name="job_no" class="form-control" required>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Description</label>
	 			<input type="text" name="description" class="form-control" required>
	 		</div>

			<div class="form-group">
	 			<label class="control-label">Start</label>
	 			<input type="text" name="start" class="form-control" required>
	 		</div>
	 		<div class="form-group">
	 			<label class="control-label">Destination</label>
	 			<input type="text" name="destination" class="form-control" required>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">User Type</label>
	 			<select name="driver" class="form-control" required>
	 				<option value=""></option>
	 				<?php
	                   $getDriver = $db->query("SELECT * FROM users WHERE user_type='driver'");
	                   $res = $getDriver->fetchAll(PDO::FETCH_OBJ);
	                   foreach($res as $r){ ?>
	                     <option value="<?php echo $r->id; ?>"><?php echo $r->id; ?></option>   
	                   <?php
	                   }
	 				?>
	 			</select>
	 		</div>

	 		<button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Update</button>
 		</form>
 	</div>
 </div>
</div>

</div>
<?php include 'theme/foot.php'; ?>