<?php
 $pCount = $uCount = $bCount = $qCount = '';

 $query = $db->query("SELECT * FROM users");
 $pCount = $query->rowCount();

 $quer = $db->query("SELECT * FROM maintenance");
 $bCount = $quer->rowCount();

 $que = $db->query("SELECT * FROM work");
 $qCount = $que->rowCount();

 $qu = $db->query("SELECT * FROM assign");
 $sCount = $qu->rowCount();

?>

<div class="w3-row-padding w3-margin-bottom">
  	 <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $pCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
   <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
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

  <div class="w3-row-padding w3-margin-bottom">
  	<div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-list w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $sCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Assigned Work</h4>
      </div>
    </div>
    </div>
</div>