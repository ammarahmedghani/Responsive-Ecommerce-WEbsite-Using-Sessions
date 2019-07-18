<?php
	
	session_start();
	$product_ids = array();


	//check if to add to cart button has been submit

	if (isset($_POST['add_to_cart'])) {

			if (isset($_SESSION['shopping_cart'])) {
					
				//keep the track how many products are in the shopping cart
				echo $count = count($_SESSION['shopping_cart']);

				//creating array to match array keys to product ids
				$product_ids = array_column($_SESSION['shopping_cart'], 'id');

				if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)) {
					$_SESSION['shopping_cart'][$count] = array(

						'id' => filter_input(INPUT_GET, 'id'),
						'name' => filter_input(INPUT_POST, 'name'),
						'price' => filter_input(INPUT_POST, 'price'),
						'quantity' => filter_input(INPUT_POST, 'quantity'),
					);

					header("location:".$_POST['link']);
				}
				else{
					
					
					//product already exist increase quantity
					//match array key to the id of the product being added to the cart
					for ($i=0; $i < count($_SESSION['shopping_cart']); $i++) { 
							
				
							if ($product_ids[$i] == filter_input(INPUT_GET, 'id')) {
								//add item in to the existing product in the array
								$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');

							}
					}

					header("location:".$_POST['link']);
				}
			}
			else{
				//if the shopping ccart doesnot exist , create first product with array key 0
				//create array using submiteed gorm data,start from key 0 and fill it with values
					$_SESSION['shopping_cart'][0] = array(

						'id' => filter_input(INPUT_GET, 'id'),
						'name' => filter_input(INPUT_POST, 'name'),
						'price' => filter_input(INPUT_POST, 'price'),
						'quantity' => filter_input(INPUT_POST, 'quantity'),
					);
					header("location:".$_POST['link']);
			}
	}




function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}
if ($_GET['action']=='empty') {
	unset($_SESSION['shopping_cart']);
	header("location:".$_GET['link']);
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>shopping cart(working)</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


</head>
<body>


<div class="container">

				
				

</div>
</body>
</html>