<!DOCTYPE html>
<html>

<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
<!-- FILE BASED -->
<link rel="stylesheet" href="./plugin/w3.css">
<link rel="stylesheet" href="./plugin/bootstrap.min.css">
<script src="./plugin/jquery-2.2.4.min.js"></script>
<script src="./plugin/bootstrap.min.js"></script>
<link rel="stylesheet" href="./plugin/font-awesome.min.css">

<!-- CDN BASED  -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
<link href='https://fonts.googleapis.com/css?family=Baumans' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="test.css">
</head>

<body class="" style="font-family: verdana;
  font-size: 16px;
  background-color: #fff; ">
  <nav class="navbar navbar-blue navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><i class="fa fa-truck fa-fw"></i>G-TRANSPORT SYSTEM</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar" >
        <ul class="nav navbar-nav navbar-right" id="myNavbar">
          <li class="active"><a href="#home"><i class="fa fa-home fa-fw"></i>HOME</a></li>
            <li><a href="login.php"><i class="fa fa-sign-in fa-fw"></i>LOGIN</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-contact fa-fw"></i>ABOUT US <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="about.php">ABOUT G-TRANSPORT SYSTEM</a></li>
              <li><a href="mv.php">VISION AND MISSION</a></li>
              <li><a href="history.php">HISTORY</a></li>
            </ul>
          </li>
          <li><a href="contacts.php"><i class="fa fa-phone fa-fw"></i>CONTACT US</a></li>
            
        </ul>
         
      </div>
       
    </div>
      
  </nav>
  <div class="mr-tp">
    <div class="slideshow-container">
      <div class="mySlides slide">
        <div class="numbertext">1 / 3</div>
        <img
             src="images/1.jpg"
             class="img-responsive"
             style="height: 100%; width:100%;" />
        <div class="text"></div>
      </div>

      <div class="mySlides slide">
        <div class="numbertext">2 / 3</div>
        <img
             src="images/2.jpg"
             class="img-responsive"
             style="height: 100; width: 100%;" />
        <div class="text"></div>
      </div>

      <div class="mySlides slide">
        <div class="numbertext">3 / 3</div>
        <img
             src="images/3.jpg"
             class="img-responsive"
             style="height: 100%; width: 100%;" />
        <div class="text"></div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div>

  <br />

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <script>
    var slideIndex = 0;
    playSlides();

    function playSlides() {
      var i;
      var slides = document.getElementsByClassName('mySlides');
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      slides[slideIndex - 1].style.display = 'block';
      setTimeout(playSlides, 4000); // Change image every 2 seconds
    }

  </script>

  <div class="container">
    <h2 style="color: #f47270;">
      G-Transport system provides a healthy and safe work environment which
      provides staff motivation and productivity
    </h2>
  </div>
  </br>
  <div class="container">
    <img src="images/4.jpg" alt="Notebook" class="img-responsive" />
    <h1 style="color: #f47270;">ONLINE G-TRANSPORT SYSTEM</h1>
    <p style="color: #f47270;"> Need online transportation services on the go? No problem, G-Transport
    system is here that offer pick-up and delivery of goods and services.
  </p>
  </div>

  </br>

  <div class="slideshow-container">
    <div class="mySlides2 slide">
      <div class="numbertext">1 / 3</div>
      <img src="images/a.jpg" style="height: 100%; width:100%;" />
      <div class="text"></div>
    </div>

    <div class="mySlides2 slide">
      <div class="numbertext">2 / 3</div>
      <img src="images/b.jpg" style="height: 100%;  width:100%;" />
      <div class="text"></div>
    </div>

    <div class="mySlides2 slide">
      <div class="numbertext">3 / 3</div>
      <img src="images/c.jpg" style=" height: 100%; width:100%" />
      <div class="text"></div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName('mySlides2');
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      slides[slideIndex - 1].style.display = 'block';
      setTimeout(showSlides, 3000); // Change image every 2 seconds
    }

  </script>

  <div class="footer">
    <div class="ufooter">
      <h3>Contact info</h3>
      <p><i class="fa fa-phone fa-fw"></i>Cell no:0791391597/0781854936</p>
      <a href="mailto:tommwenga33@gmail.com" target="_top" style="color: white;"><i class="fa fa-envelope fa-fw"></i>Email: tommwenga33@gmail.com</a>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <p style="font-size: 16px;">Terms of service | Privacy policy | Legal disclaimer | Staff Mail|
            Customer Service Charter | Staff</p>
        </div>
        <div class="col-sm-3">
          <p style="font-size: 16px"> © 2020. All Rights Reserved. G-Transport</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
