<?php 
include 'includes/dbh.inc.php';

 ?>
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
 
</nav>


<!-- section -->



<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img src="menspplo1.jpg">
    </div>
    <div class="col-sm-6">
      <?php 
        $sql = "SELECT * FROM products ORDER BY id ASC";
        $fire = mysqli_query($conn,$sql);

        while(  $result = mysqli_fetch_assoc($fire)){ ?>

          <span style="font-weight: bold;"><?php echo $result['code'] ?></span>
          <h4 style="font-weight: bolder;"><?php echo $result['name'] ?></h4>
          <span style="font-weight: bold;">Rs: <?php echo $result['rate'] ?> only</span>
         
       

     <form method="POST" action="cart.php?action=add&id=<?php echo $result['id'];?>" >
        <input type="hidden" name="name" value="<?php echo $result['name'];?>">
        <input type="hidden" name="price" value="<?php echo $result['rate']; ?>">
        <label style="font-size: 20px;">Sizes : </label> 
        <select class="form-control form-control-sm" name="size">
        <option selected>Select</option>  
        <option>Small</option>
        <option>Medium</option>
        <option>Large</option>
        </select>

         <label style="font-size: 20px;">Colour :</label>
         <select class="form-control form-control-sm" name="colour">
          <option selected>Select</option>
          <option>Red</option>
          <option>Black</option>
          <option>Grey</option>
          </select>

           <label style="font-size: 20px;">Quantity :</label>
            <select class="form-control form-control-sm" name="quantity">
            <option selected>Select</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            </select>
             
            <input type="hidden" name="link" value="<?php echo $_SERVER['REQUEST_URI']?>">
          <button type="submit" style="margin-top: 10px;" class="btn btn-primary" name="add_to_cart">ADD TO CART</button>
          <a href="index_login.php" type="button" style="margin-top: 10px;" class="btn btn-primary">Back</a>

      </form>

      <?php  }




      ?>
    </div>
  </div>
</div>



</body>
</html>

<?php

  include 'footer.php';
  ?>