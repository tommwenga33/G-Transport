<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>



<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Admin Dashboard</b></h5>
  </header>
 


 
 <div class="w3-container" style="padding-top:22px">
	 <div class="w3-row">
	 	<h2>Employee type</h2>
	 	<div class="col-md-6">
	 		<a title="Check to delete from list" data-toggle="modal" data-target="#_removed" id="delete"  class="btn btn-danger"><i class="fa fa-trash"></i>
			</a>
	 		<form method="post" action="delete_EmployeeType.php">
	 			<div><br/></div>
	 		<table>
	 			<thead>
	 				<tr>
	 					<th></th>
	 					<th>ID</th>
	 					<th>Name</th>
	 				</tr>
	 			</thead>
	 			<tbody>
	 				<?php

	 				$get = $db->query("SELECT * FROM user_type");
	 				$res = $get->fetchAll(PDO::FETCH_OBJ);
	 				foreach($res as $n){ ?>
                         <tr>
                         	<td>
                         		<input type="checkbox" name="selector[]" value="<?php echo $n->id ?>">
                         	</td>
                         	<td> <?php echo $n->id; ?> </td>
                         	<td>  <?php echo $n->name; ?> </td>
                         </tr> 
	 				<?php }

	 				?>
	 			</tbody>
	 		</table>

	 		<?php include('inc/modal-delete.php'); ?>
	 	</form>
	 	</div>

	 	<div class="col-md-6">
	 		<div class="panel panel-primary">
	 			<div class="panel-heading">Add Employee Type</div>
	 			<div class="panel-body">
	 				<form method="post">
	 					<div class="form-group">
	 						<label class="control-label">Post Name</label>
	 						<input type="text" name="post" class="form-control" placeholder="Enter Employee type">
	 					</div>

	 					<button class="btn btn-sm btn-default" type="submit" name="submit">Add</button>

	 					<?php 
                          if(isset($_POST['submit'])){
                          	$name = $_POST['post'];

                          	$query = $db->query("INSERT INTO user_type(name)VALUES('$name')");

                          	if($query){ ?>
                             <script>alert('Post Added Successfully. Click OK to close dialogue.')</script>
                          	<?php 
                          	header('refresh: 3');
                            }
                          }
	 					?>
	 				</form>
	 			</div>
	 		</div>
	 	</div>
	 	 </div>
</div>

</div>

<?php include 'theme/foot.php'; ?>