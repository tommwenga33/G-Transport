<?php
 $pCount = $uCount = $bCount = $qCount = '';

 $quer = $db->query("SELECT * FROM maintenance");
 $bCount = $quer->rowCount();

 $que = $db->query("SELECT * FROM work");
 $qCount = $que->rowCount();



?>

<div class="w3-row-padding w3-margin-bottom">
   <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-list w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $qCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Work Ticket Records</h4>
      </div>
    </div>
   
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-list w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $bCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Maintenance Record
        </h4>
      </div>
    </div>
    <br/>

</div>