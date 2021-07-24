<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/fsidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5 style="font-size: 20px; font-weight: bold;  font-family: verdana;"><b> Flirt Officer Dashboard</b></h5>
  </header>

  <div class="w3-container" style="padding-top:22px">
    <div class="w3-container" style="padding-top:22px">
      <div class="w3-row">
        <h2>Work Ticket Report</h2>
        <a href="generate_work_report.php" class="btn btn-sm btn-primary pull-right" target="_blank" download><i
             class="fa fa-download fa-fw"></i>Generate
          Report</a>
        <br><br>
        <div class="table-responsive">
          <table class="table table-hover" id="table">
            <thead>
              <tr>
                <th>#</th>
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
              $qpi = $db->query("SELECT * FROM work");
              $result = $qpi->fetchAll(PDO::FETCH_OBJ);
              $c = $qpi->rowCount();

              foreach ($result as $j) {
                $ticket_no = $j->ticket_no;
                $date = $j->date;
                $start_time = $j->start_time;
                $start = $j->start;
                $destination = $j->destination;
                $speedometer_reading_start = $j->speedometer_reading_start;
                $speedometer_reading_finish = $j->speedometer_reading_finish;
                $kilometer = $j->kilometer;
                $fuel = $j->fuel;
                $oil = $j->oil;
              ?>
              <tr>
                <td>
                  <?php for ($i = 1; $i <= $c; $i++) {
                      echo $i;
                    } ?>
                </td>
                <td><?php echo $ticket_no; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $start_time; ?></td>
                <td><?php echo $start; ?></td>
                <td><?php echo $destination; ?></td>
                <td><?php echo $speedometer_reading_start; ?></td>
                <td><?php echo $speedometer_reading_finish; ?></td>
                <td><?php echo $kilometer; ?></td>
                <td><?php echo $fuel; ?></td>
                <td><?php echo $oil; ?></td>
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
