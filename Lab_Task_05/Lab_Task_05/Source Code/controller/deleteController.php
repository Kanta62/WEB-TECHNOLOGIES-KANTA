<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once '../model/model.php';
$tableName = 'product';
//echo $_GET['id'];
if (deleteProduct($tableName, $_GET['id'])) {
    header('Location: ../display.php');
}
else{
	echo '<p>Product Not Deleted!!</p>';
}
 ?>
<?php }
else{
	echo "You are not allowed to visit this page";
} ?>