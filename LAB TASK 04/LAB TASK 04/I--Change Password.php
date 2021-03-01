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
 <body>
 <section>
 <fieldset>
 <legend><b>CHANGE PASSWORD</b></legend>
 <b>Current Password:</b>
 <label for="password"></label>
 <input type="text" id="password" name="password"> <br><br>
 <b style="color:Green;"">New Password:</b>
 <label for="newpassword"></label>
 <input type="text" id="newpassword" name="newpassword"> <br><br>
 <b style="color:Red;">Retype New Password:</b>
 <label for="rnewpassword"></label>
 <input type="text" id="rnewpassword" name="rnewpassword"> <br><br><hr>
 <input type="submit" value="submit" name="submit">
 </fieldset>
</section></body>
<?php include('resourse 2.php');?>
</html>