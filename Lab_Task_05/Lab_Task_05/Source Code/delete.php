<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'controller/displayControler.php';
$tableName = 'product';
$product = fetchProduct($tableName, $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
</head>
<body>
	<fieldset>
<legend><B>Delete Product</B></legend> <br>
<form action="controller/deleteController.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
<div>Product ID: <?php echo $_GET['id']; ?> <hr>
	Name: <?php echo $product['Name']; ?> <hr>
	Buying Price: <?php echo $product['BuyingPrice']; ?> <hr>
	Selling Price: <?php echo $product['SellingPrice']; ?> <hr>
	Displayable: <?php echo $product['display']; ?>
</div>
<hr>
  <input type="submit" name="submit" value="delete">
</form>
</fieldset>
</body>
</html>
<?php }
else{
	echo "You are not allowed to visit this page";
} ?>