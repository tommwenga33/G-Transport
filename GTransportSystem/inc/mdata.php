<?php
 $pCount = $uCount = $bCount = $qCount = '';

  $qu = $db->query("SELECT * FROM assign");
 $sCount = $qu->rowCount();

?>


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