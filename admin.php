<?php
  include 'dbh.inc.php';
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
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

   <a class="navbar-brand" href="#">
    <img src="final.png" width="33" height="29" class="d-inline-block align-top" alt="">
    V'Wear Apparels
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>
</header>

    <h1>Dashboard</h1>
    <h3>Users:</h3>

<!-- fetching data from tables -->
<?php
     
        $sql = "SELECT * FROM users WHERE user_role!='admin'";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);

      if ($resultcheck < 1) {
      header("location: ../admin.php?user=error");
      exit();
    }
    
    else{
        while ($row=mysqli_fetch_assoc($result)) {
      ?>


             <div class="container"> 
              <div class="row"> 
            <div class="col-sm-4"><p style="font-size: 25px;">Users IDs:</p></div>
            <div class="col-sm-4"><p style="font-size: 25px;">Users Names:</p></div>
         </div> 

          <div class="row"> 
            <div class="col-sm-4"><span><?php
          
                 echo $row['user_id'] ;
                 echo " ";
           
              ?></span></div>
            <div class="col-sm-4"><span><?php
          
                 echo $row['user_first'] ;
               
           
                  ?></span></div> 
  </div>
</div>

<?php
}
    }

?>


    <h1>Products :</h1>

    <?php
     
        $sql = "SELECT * FROM Products";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);

      if ($resultcheck < 1) {
      header("location: ../admin.php?products=error");
      exit();
    }
    
    else{
        while ($row=mysqli_fetch_assoc($result)) {
      ?>


             <div class="container"> 
              <div class="row"> 
            <div class="col-sm-4"><p style="font-size: 25px;">Products IDs:</p></div>
            <div class="col-sm-4"><p style="font-size: 25px;">Products Names:</p></div>
         </div> 

          <div class="row"> 
            <div class="col-sm-4"><span><?php
          
                 echo $row['id'] ;
                 echo " ";
           
              ?></span></div>
            <div class="col-sm-4"><span><?php
          
                 echo $row['name'] ;
               
           
                  ?></span></div> 
  </div>
</div>

<?php
}
    }

?>


<a href="insert.php" type="button">INSERT A NEW Product</a>
</body>
</html>
