<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<?php 
 if(!$_GET['id'] OR empty($_GET['id']) OR $_GET['id'] == '')
 {
 	header('location: manageEmployee.php');

 }else{
 	$profile = $username = $password = $gender = $u_id = $type = "";
 	$id = (int)$_GET['id'];
 	$query = $db->query("SELECT * FROM users WHERE id = '$id' ");
 	$fetchObj = $query->fetchAll(PDO::FETCH_OBJ);

 	foreach($fetchObj as $obj){
       $profile = $obj->profile;
       $username = $obj->username;
	   $gender = $obj->gender;
	   $password = $obj->password;
	   $u_id = $obj->id;
	   $type = $obj->user_type;
	     $k = $db->query("SELECT * FROM user_type WHERE id = '$u_id' ");
       	 $ks = $k->fetchAll(PDO::FETCH_OBJ);
       	 foreach ($ks as $r) {
       	 	$type = $r->name;
       	 }
 	}
 }

?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>
 
 
 
<div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
  
 	<div class="col-md-6">

     <?php
      if(isset($_POST['submit']))
      {
      	
      	$n_username = $_POST['username'];
      	$n_password = $_POST['password'];
      	$n_type = $_POST['type'];

      	$n_id = $_GET['id'];

      	$update_query = $db->query("UPDATE users SET username = '$n_username',password = '$n_password', user_type = '$n_type' WHERE id = '$n_id' ");

      	if($update_query){?>
      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Employee details successfully updated <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error updating Employee data. Please try again <i class="fa fa-times"></i></strong>
        </div>
      	<?php
      }

      }

     ?>




 		<h2>Edit Employee Data</h2>
	 	<form method="post">
	 		<div class="form-group">
	 			<label class="control-label">Username.</label>
	 			<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
	 		</div>

	 		<div class="form-group">
	 			<label class="control-label">Password.</label>
	 			<input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
	 		</div>
			<div class="form-group">
	 			<label class="control-label">Gender</label>
	 			<select name="gender" class="form-control" required>
	 				<option value="male">Male</option>
	 				<option value="female">Female</option>
	 			</select>
	 		</div>
	 		<div class="form-group">
	 			<label class="control-label">Type</label>
	 			<select name="type" class="form-control">
	 				<option value="<?php echo $u_id; ?>" selected><?php echo $type; ?></option>
	 				<?php
	                   $gettype = $db->query("SELECT * FROM user_type");
	                   $res = $gettype->fetchAll(PDO::FETCH_OBJ);
	                   foreach($res as $r){ ?>
	                     <option value="<?php echo $r->id; ?>"><?php echo $r->name; ?></option>   
	                   <?php
	                   }
	 				?>
	 			</select>
	 		</div>

	 		<button name="submit" type="submit" name="submit" class="btn btn-sn btn-default">Update</button>
	 	</form>
 </div>
 <div class="col-md-4 col-md-offset-2">
 	<h2>Employee Photo</h2>
 	<img src="<?php echo $profile; ?>" width="130" height="120" class="thumbnail img img-responsive">
 	<a class="btn btn-danger btn-md" onclick="return confirm('Continue delete Employee ?')" href="delete.php?id=<?php echo $id ?>"><i class="fa fa-trash"></i> Delete Employee</a>
 </div>
</div>
</div>
</div>


<?php include 'theme/foot.php'; ?>