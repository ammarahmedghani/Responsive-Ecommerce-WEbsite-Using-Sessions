<!DOCTYPE html>
<html>
<head>

	<title>V'Wear Apparels</title>
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="Apparels.css">

</head>

<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">

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
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MENS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">JEANS</a>
          <a class="dropdown-item" href="#">SHIRTS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">T-SHIRTS</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LADIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">SHALWAR KAMEEZ</a>
          <a class="dropdown-item" href="#">JEANS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">KURTEES</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CHILDRENS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">SHORTS</a>
          <a class="dropdown-item" href="#">SHIRTS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">T-SHIRTS</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!-- section -->

<div class="heading">
	<h6>MENS COLLECTION</h6>
</div>


<div class="container"> 
   <div class="row"> 
      <div class="col-sm-4"> <a href="mens.inc.php?id=1"><img style="height: 400px;" src="menspplo1.jpg"></a></div>
      <div class="col-sm-4"><img style="height: 400px;" src="menspolo2.jpg"></div>
      <div class="col-sm-4"><img  style="height: 400px;" src="menspolo3.jpg"></div> 
   </div> 

    <div class="row"> 
      <div class="col-sm-4"><img style="height: 400px;" src="menspplo1.jpg"></div>
      <div class="col-sm-4"><img style="height: 400px;" src="menspolo2.jpg"></div>
      <div class="col-sm-4"><img  style="height: 400px;" src="menspolo3.jpg"></div> 
   </div> 

    <div class="row"> 
      <div class="col-sm-4"><img style="height: 400px;" src="menspplo1.jpg"></div>
      <div class="col-sm-4"><img style="height: 400px;" src="menspolo2.jpg"></div>
      <div class="col-sm-4"><img  style="height: 400px;" src="menspolo3.jpg"></div> 
   </div> 
</div>

</body>
</html>

<?php

  include 'footer.php';
  ?>