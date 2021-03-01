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
<legend><b>REGISTRATION</b></legend>
<b>Name:</b>
 <label for="name"></label>
 <input type="text" id="name" name="name"> <br>
 <b>Email:</b>
 <label for="email"></label>
 <input type="email" id="email" name="email"> <br>
 <b>User Name:</b>
 <label for="uname"></label>
 <input type="text" id="uname" name="uname"> <br>
 <b>Password:</b>
 <label for="pass"></label>
 <input type="text" id="pass" name="pass"> <br>
 <b>Conform Password:</b>
 <label for="cpass"></label>
 <input type="text" id="cpass" name="cpass"> <br>
 <fieldset>
 <legend><b>GENDER</b></legend>
 <input type="radio" id="male" name="genderv" value="male">
 <label for="male">Male</label>
 <input type="radio" id="female" name="genderv" value="female">
 <label for="female">Female</label>
 <input type="radio" id="other" name="genderv" value="other">
 <label for="other">Other</label>
</fieldset>
<fieldset>
 <legend><b>DATE OF BIRTH</b></legend>
 <label for="birthv"></label>
 <input type="date" id="birthv" name="birthv">
</fieldset>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="reset"><br>
</fieldset>
<?php include('resourse 2.php');?>
</body>
</html> 
