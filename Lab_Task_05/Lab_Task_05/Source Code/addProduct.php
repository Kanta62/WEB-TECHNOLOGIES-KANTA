<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>

<form action="controller/addProductControler.php" method="post" enctype="multipart/form-data">
  <fieldset>
<legend><B>Add Product</B></legend> <br>
  <div style="float: left; text-align: right;">  
  Name: <input type="text" name="name">
  <br><hr>
  Buying Price: <input type="text" name="bprice">
  <br><hr>
  Selling Price: <input type="text" name="sprice">
  <br><hr>
  <input type="checkbox" name="display" value="Yes">
  <label for="display">Display</label>
  <br><hr>
  <input type="submit" name="submit" value="Save"></div>
</form>
</fieldset>
</body>
</html>