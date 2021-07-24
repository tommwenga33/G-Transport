<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Admin dashboard > Add</b></h5>
  </header>

 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Add Employee</h2>

 	<div class="col-md-6">
      
      <?php
      if(isset($_POST['submit']))
      {
      	if(isset($_FILES['profile']['tmp_name'])){

	      	$n_username = $_POST['username'];
	      	$n_password = $_POST['password'];
	      	$n_user_type = $_POST['user_type'];
	      	$n_gender = $_POST['gender'];

      	
      		$res1_name = basename($_FILES['profile']['name']);
			$tmp_name = $_FILES['profile']['tmp_name'];
			$type = $_FILES['profile']['type'];
			$max_size = 2097152;
			$size = $_FILES['profile']['size'];

			if (isset($res1_name)) {
				$location = 'uploadfolder/';
				$move = move_uploaded_file($tmp_name, $location.$res1_name);
				$path1 = $location.$res1_name;

			
				if (!$move) {
					$fileerror = $_FILES['profile']['error'];
					$message = $upload_errors[$fileerror];
					
				}
			}
		}
      	

   

    

      	$insert = $db->query("INSERT INTO users(profile,username,password,gender,user_type) VALUES('$path1','$n_username','$n_password','$n_gender','$n_user_type') ");

      	if($insert){?>
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




 		<form method="post" autocomplete="off" enctype="multipart/form-data">

	 		<div class="form-group">
	 			<label class="control-label">UserName</label>
	 			<input type="text" name="username" class="form-control" required>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Password</label>
	 			<input type="text" name="password" class="form-control" required>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Gender</label>
	 			<select name="gender" class="form-control" required>
	 				<option value="male">Male</option>
	 				<option value="female">Female</option>
	 			</select>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">User Type</label>
	 			<select name="user_type" class="form-control" required>
	 				<option value="flirt">Flirt</option>
	 				<option value="mto">MTO</option>
	 				<option value="driver">Driver</option>
	 			</select>
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Profile</label>
	 			<input type="file" name="profile" class="form-control" required>
	 		</div>

	 		<button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Update</button>
 		</form>
 	</div>
 </div>
</div>

</div>
<?php include 'theme/foot.php'; ?>