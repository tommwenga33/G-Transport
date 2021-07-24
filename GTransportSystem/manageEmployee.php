<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Admin dashboard</b></h5>
  </header>



  <div class="w3-container" style="padding-top:22px">
    <div class="w3-row">
      <h2>Manage employee</h2>
      <a href="add-Employee.php" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Add New
        Employee</a><br><br>
      <div class="table-responsive">
        <table class="table table-hover table-striped" id="table">
          <thead>
            <tr>
              <th>S/N</th>
              <th>Profile</th>
              <th>Username</th>
              <th>Password</th>
              <th>Gender</th>
              <th>User Type</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $all_employee = $db->query("SELECT * FROM users WHERE user_type !='admin'");
            $fetch = $all_employee->fetchAll(PDO::FETCH_OBJ);
            foreach ($fetch as $data) {
            ?>
            <tr>
              <td><?php echo $data->id ?></td>
              <td>
                <img width="70" height="70" src="<?php echo $data->img; ?>" class="img img-responsive thumbnail">
              </td>
              <td><?php echo $data->username ?></td>
              <td><?php echo $data->password ?></td>
              <td><?php echo $data->gender ?></td>
              <td><?php echo $data->user_type ?></td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-sm btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i
                       class="fa fa-cog"></i> Option
                    <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="edit-employee.php?id=<?php echo $data->id ?>"><i class="fa fa-edit"></i> Edit</a></li>
                    <li><a onclick="return confirm('Continue delete Employee ?')"
                         href="delete.php?id=<?php echo $data->id ?>"><i class="fa fa-trash"></i> Delete</a></li>
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
