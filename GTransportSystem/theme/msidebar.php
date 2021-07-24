<div class="w3-bar w3-top w3-black w3-large" style="z-index:4; background-color:  #2196F3;" >
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <span><i class="fa fa-truck fa-fw"></i>G-TRANSPORT MANAGEMENT SYSTEM</span>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar" style="background-color: #2196F3">
        <ul class="nav navbar-nav navbar-right" id="myNavbar">
          <li class="active"><a href="index.php" style="color: #fff;"><i class="fa fa-home fa-fw"></i>HOME</a></li>
            </ul>
          </li>
        </ul>
         
      </div>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-blue w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="theme/default_avatar.jpg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo ucwords($_SESSION['user']); ?></strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Motor Officer Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i> Close Menu</a>
    <a href="mto.php" class="w3-bar-item w3-button w3-padding w3-black"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
    <a href="assign.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> Assign Work</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-power-off fa-fw"></i>  Log out</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>