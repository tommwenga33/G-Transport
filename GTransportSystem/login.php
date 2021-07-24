<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4;">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i
       class="fa fa-bars"></i> Menu</button>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <span><i class="fa fa-truck fa-fw"></i>G-TRANSPORT MANAGEMENT SYSTEM</span>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right" id="myNavbar">
      <li class="active"><a href="index.php" style="color: #fff;"><i class="fa fa-home fa-fw"></i>HOME</a></li>
    </ul>
    </li>
    </ul>

  </div>
</div>
<div class="container">
  <div class="row" style="margin-top: 10%">

    <h1 class="text-center" style="color:#000000;"><?php echo NAME_X; ?></h1><br>
    <div class="header" style="width: 60%;  background-color: #2196F3;">
      <h2>Login</h2>
    </div>
    <form method="post" autocomplete="off">
      <div class="form-group">
        <label><i class="fa fa-user fa-fw" arial-hidden="true"></i>Username</label>
        <input type="text" name="username" class="form control input-sm" required>
      </div>
      <div class="form-group">
        <label><i class="fa fa-lock fa-fw" arial-hidden="true"></i>Password</label>
        <input type="password" name="password" class="form control input-sm" required>

      </div>
      <div>
        <select name="user_type" class="form control input-sm" required="">
          <option value="admin">Admin</option>
          <option value="flirt">Flirt</option>
          <option value="mto">MTO</option>
          <option value="driver">Driver</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn" name="submit" style="background-color: #2196F3;">Login</button>
      </div>
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $sql = "SELECT * FROM users WHERE username = :username AND password = :password AND user_type = :usertype";

      if ($stmt = $db->prepare($sql)) {
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
        $stmt->bindParam(":usertype", $usertype, PDO::PARAM_STR);

        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $usertype = $_POST['user_type'];

        if ($stmt->execute()) {
          $count = $stmt->rowCount();
          $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

          if ($count > 0) {
            foreach ($rows as $row) {
              $user_id = $row->id;
              $user = $row->username;

              $_SESSION['id'] = $user_id;
              $_SESSION['user'] = $user;
              if ($usertype == "admin") {
                header('location: admin.php');
              } elseif ($usertype == "flirt") {
                header('location: flirt.php');
              } elseif ($usertype == "mto") {
                header('location: mto.php');
              } elseif ($usertype == "driver") {
                header('location: driver.php');
              }
            }
          } else {
            $error = 'incorrect login details';
          }
        } else {
          $error = "Oops! Something went wrong. Please try again later.";
        }
        // Close statement
        unset($stmt);
      }
    }
    if (isset($error)) { ?>
    <br><br>
    <div class="alert alert-danger alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong><?php echo $error; ?>.</strong>
    </div>
    <?php }
    ?>
  </div>
</div>
</div>


<?php include 'theme/foot.php'; ?>
