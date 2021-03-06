<?php

//start sessiion

session_start();
require_once("CreateDB.php");
require_once("component.php");


$database=new CreateDB(dbname:"productdb",tablename:"productb");

if(isset($_POST['add']))
{

	if(isset($_SESSION['cart']))
	{
		$item_array_id=array_column($_SESSION['cart'],"product_id");

	
		if(in_array($_POST['product_id'],$item_array_id))
		{
			echo "<script>alert('PRODUCT IS ALREADY ADDED IN THE CART..!!!!')</script>";
			echo "<script>window.location='index.php'</script>";
		}else{

			$count=count($_SESSION['cart']);
			$item_array=array(
			'product_id'=>$_POST['product_id']
		);

	
	$_SESSION['cart'][$count]=$item_array;
	}
}else{

	$item_array=array('product_id'=>$_POST['product_id']);
	//Create new session variable
	$_SESSION['cart'][0]=$item_array;
	print_r($_SESSION['cart']);

}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopping Cart</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css">

</head>
<body>
<?php require_once("header.php"); ?>
<div class="container">
<div class="row text-center py-5">
<?php
	$result=$database->getData();
	while($row=mysqli_fetch_assoc($result))
	{
		component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
	}

?>
	
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>