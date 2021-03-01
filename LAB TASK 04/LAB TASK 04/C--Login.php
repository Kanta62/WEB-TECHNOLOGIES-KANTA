<!DOCTYPE html> 
<html>
<head>
<title>Lab Task4</title>
</head>
<body>
 <?php include('resourse.php');?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<form action="/action_page.php">
<fieldset><br>
 <legend><b>LOGIN</b></legend>
 <b>User Name:</b>
<label for="username"></label>
 <input type="text" id="username" name="username"> <br>
 <b>Password:</b>
 <label for="password"></label>
 <input type="text" id="password" name="password"> <br><br><hr>
 <input type="checkbox" id="remember" name="remember" value="">
 <label for="degree">Remember Me</label> <br><br>
 <input type="submit" name="submit" value="Submit">
 <li><a href="D--Forget Password.php"> Forgot Password?</a></li>
</fieldset>
<?php include('resourse 2.php');?>
</body>
</html> 
