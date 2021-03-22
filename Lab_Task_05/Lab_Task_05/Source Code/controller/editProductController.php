<?php 

require_once '../model/model.php';
$tableName = 'product';
if(isset($_POST['submit'])) {
	$data['Name'] = $_POST['name'];
	$data['BuyingPrice'] = $_POST['bprice'];
	$data['SellingPrice'] = $_POST['sprice'];
	if(empty($_POST['display'])){
		$data['display'] = "No";
	}
	else{
		$data['display'] = $_POST['display'];
	}

  if (updateProduct($tableName, $_GET['id'], $data)) {
  	header('Location: ../display.php');
  }
} 
else {
	echo '<p>You are not allowed to access this page</p>';
}

 ?>
