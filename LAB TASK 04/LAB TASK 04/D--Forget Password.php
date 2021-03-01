<!DOCTYPE html>
<html>
<head>
<title>Lab Task4</title>
</head>
<body>
 <?php include('resourse.php');?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<form action="/action_page.php">
<fieldset>
 <legend><b>FORGET PASSWORD</b></legend>
 <b>Enter Email:</b>
 <label for="email"></label>
 <input type="email" id="email" name="email"> <br><hr>
 <input type="submit" name="submit" value="Submit"><br>
</fieldset>
<?php include('resourse 2.php');?>
</body>
</html> 
