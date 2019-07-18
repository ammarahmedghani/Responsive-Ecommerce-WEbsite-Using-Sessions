<?php
  session_start();
?>


<!DOCTYPE html>
<html>
<head>

	<title>V'Wear Apparels</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




<link rel="stylesheet" type="text/css" href="Apparels.css">

</head>

<body>
<style type="text/css">
  .dropdown:hover{

  }
</style>
<div id="top">
	
	<div class="top-inner">
		<marquee scrollamount="8" behavior="scrolling" direction="left" BGCOLOR= #232121><b>Free Delivery All Over Pakistan<span>     </span>40% Off Over Eid Collection</b></marquee>

	</div>

</div>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

   <a class="navbar-brand" href="#">
    <img src="final.png" width="33" height="29" class="d-inline-block align-top" alt="">
    V'Wear Apparels
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  data-toggle="dropdown" >
          MENS
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="mens.php">JEANS</a>
          <a class="dropdown-item" href="mens.php">SHIRTS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="mens.php">T-SHIRTS</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LADIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ladies.html">SHALWAR KAMEEZ</a>
          <a class="dropdown-item" href="ladies.html">JEANS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="ladies.html">KURTEES</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CHILDRENS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="chidren.html">SHORTS</a>
          <a class="dropdown-item" href="chidren.html">SHIRTS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="chidren.html">T-SHIRTS</a>
        </div>
      </li>
    </ul>

<form class="form-inline" action="includes/login.inc.php" method="POST">
  <label for="email" class="mr-sm-2">Username:</label>
  <input type="username" name="uid" class="form-control form-control-sm mb-2 mr-sm-2" id="username">
  <label for="pwd" class="mr-sm-2">Password:</label>
  <input type="password" name="pwd" class="form-control form-control-sm mb-2 mr-sm-2" id="pwd">
  <button type="submit" name="submit" class="btn btn-primary btn-sm mb-2">Login</button>
</form>
<a href="signup.php" style="padding-left: 5px;">Register</a>
  </div>


</nav>
</header>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="final final.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="maxresdefault (3).jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="maxresdefault (1).jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!-- footer code-->

<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>798 South Park Avenue, Jaipur, Raj</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">dkstudioin@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">+91 7568543012</a> <span>or</span> <a href="tel:#">+91 9571195353</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
      </footer>



</body>
</html>

<script type="text/javascript">

</script>