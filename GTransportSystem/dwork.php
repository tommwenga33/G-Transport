<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/dsidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> driver's dashboard</b></h5>
  </header>
 
 

 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Manage Work Ticket</h2>
  <a href="#" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Add New Record</a><br><br>
 <div class="table-responsive">
 	<table class="table table-hover table-striped" id="table">
 		<thead>
 			<tr>
      <th>ticket_no</th>
      <th>date</th>
      <th>start_time</th>
      <th>start</th>
      <th>destination</th>
      <th>finish_time</th>
      <th>speedometer_reading_start</th>
            <th>speedometer_reading_finish</th>
            <th>kilometer</th>
            <th>fuel</th>
            <th>oil</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
       $all_employee = $db->query("SELECT * FROM work");
       $fetch = $all_employee->fetchAll(PDO::FETCH_OBJ);
        foreach($fetch as $data){ 
        ?>
          <tr>
            <td><?php echo $data->ticket_no ?></td>
            <td><?php echo $data->date ?></td>
            <td><?php echo $data->start_time ?></td>
            <td><?php echo $data->start ?></td>
            <td><?php echo $data->destination ?></td>
            <td><?php echo $data->finish_time ?></td>
            <td><?php echo $data->speedometer_reading_start ?></td>
            <td><?php echo $data->speedometer_reading_finish ?></td>
            <td><?php echo $data->kilometer ?></td>
            <td><?php echo $data->fuel ?></td>
            <td><?php echo $data->oil ?></td>
            <td>
               <div class="dropdown">
                  <button class="btn btn-sm btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-cog"></i> Option
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-edit"></i> Edit</a></li>
                    <li><a onclick="return confirm('Continue delete Record ?')" href="#"><i class="fa fa-trash"></i> Delete</a></li>
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