<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/dsidebar.php'; ?>
<?php include 'session.php'; ?>
<!-- !PAGE CONTENT! -->

<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Driver's Dashboard</b></h5>
  </header>

 
<div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
  
 	
 	
 	<div class="table-responsive">
 	<table class="table table-hover table-striped" id="table">
 		<thead>
 			<tr>
      <th>Job_no</th>
      <th>Description</th>
      <th>start</th>
      <th>Destination</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
 			$driver=$_SESSION['id'];
       $all_employee = $db->query("SELECT * FROM assign WHERE driver= '$driver'");
       $fetch = $all_employee->fetchAll(PDO::FETCH_OBJ);
        foreach($fetch as $data){ 
        ?>
          <tr>
            <td><?php echo $data->job_no ?></td>
            <td><?php echo $data->description ?></td>
            <td><?php echo $data->start ?></td>
            <td><?php echo $data->destination ?></td>
            <td>
               <div class="dropdown">
                 <button class="btn btn-sm btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-cog"></i> Status
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a onclick="return confirm('Job Done ?')" href="dassign.php?id=<?php echo $data->id ?>"><i class="fa fa-edit"></i> Done</a></li>
                  </ul>
                </div> 
            </td>
          </tr> 
           <?php 
      }
      ?>   
 		</tbody>
 	</table>

 
 </div>
</div>
</div>
</div>


<?php include 'theme/foot.php'; ?>