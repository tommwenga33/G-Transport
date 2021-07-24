<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5 style="font-size: 20px; font-weight: bold;  font-family: verdana;"><b> Admin Dashboard</b></h5>
  </header>
 

 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2 style="font-size: 20px; font-weight: bold;  font-family: verdana;">MAINTENANCE RECORD</h2>
 <div class="table-responsive">
 	<table class="table table-hover" id="table">
 		<thead>
 			<tr>
        <th>#</th>
      <th>Rq_no</th>
      <th>Date</th>
      <th>job_no</th>
      <th>Section</th>
      <th>Amount</th>
      <th>Vehicle_no</th>
    </tr>
 		</thead>
 		<tbody>
 			<?php
               $qpi = $db->query("SELECT * FROM maintenance");
               $result = $qpi->fetchAll(PDO::FETCH_OBJ);
               $c = $qpi->rowCount();

               foreach ($result as $j) {
               	 $rq_no = $j->Rq_no;
               	 $date = $j->date;
               	 $job_no = $j->job_no;
               	 $section = $j->section;
                $amount = $j->Amount;
                $vehicle_no = $j->vehicle_no;
               	 ?>
                  <tr>
                    <td>
                      <?php for ($i=1; $i <= $c ; $i++) { 
                        echo $i;
                      } ?>
                    </td>
                  	<td><?php echo $rq_no; ?></td>
                  	<td><?php echo $date; ?></td>
                  	<td><?php echo $job_no; ?></td>
                    <td><?php echo $section; ?></td>
                  	<td><?php echo $amount; ?></td>
                    <td><?php echo $vehicle_no; ?></td>
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