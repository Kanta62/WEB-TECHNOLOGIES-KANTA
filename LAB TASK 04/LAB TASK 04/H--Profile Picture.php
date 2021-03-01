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
 <legend><b>PROFILE PICTURE</b></legend>

 <form action="upload.php" method="post" enctype="multipart/form-data">
 <input type="file" name="fileToUpload" id="fileToUpload"><br><br><hr>
 <input type="submit" value="submit" name="submit">
</form>
</fieldset>
</section></body>
<?php include('resourse 2.php');?>
</html> 
