<!DOCTYPE html>
<html>
<head>
<title>Lab Task4</title>
</head>
 <?php include('resourse 1.php');?>
 <section>
 <nav>
 <b>Account</b><hr>
 <ul>
 <li><a href="#">Dashboard</a></li>
 <li><a href="#">View Profile</a></li>
 <li><a href="#">Edit Profile</a></li>
 <li><a href="#">Change Profile Picture</a></li>
 <li><a href="#">Change Password</a></li>
 <li><a href="#">Logout</a></li>
 </ul>
 </nav>
 <body><section>
 <fieldset>
 <legend><b>EDIT PROFILE</b></legend>
 <b>Name:</b>
 <label for="name"></label>
 <input type="text" id="name" name="name"> <br><hr>
 <b>Email:</b>
 <label for="email"></label>
 <input type="email" id="email" name="email"> <br><hr>
 <legend><b>GENDER</b></legend>
 <input type="radio" id="male" name="genderv" value="male">
 <label for="male">Male</label>
 <input type="radio" id="female" name="genderv" value="female">
 <label for="female">Female</label>
 <input type="radio" id="other" name="genderv" value="other">
 <label for="other">Other</label><hr>
 <legend><b>DATE OF BIRTH</b></legend>
 <label for="birthv"></label>
 <input type="date" id="birthv" name="birthv"><br><hr>
 <input type="submit" name="submit" value="Submit">
</fieldset>
</section></body>
<?php include('resourse 2.php');?>
</html> 