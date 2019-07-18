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


 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



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
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="#">SHORTS</a>
          <a class="dropdown-item" href="#">SHIRTS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">T-SHIRTS</a>
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

