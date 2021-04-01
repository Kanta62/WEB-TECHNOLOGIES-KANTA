<?php
session_start();

if(isset($_SESSION['username']))
{

 echo "<br><a href='dashboardTeacherView.php'>Dashboard</a>";
 echo "<br><a href='viewProfileTeacherView.php'>View Profile</a>";
 echo "<br><a href='editProfileTeacherView.php'>Edit Profile</a>";
 // echo "<br><a href='upload.php'>Change Profile Picture</a>";
  echo "<br><a href='changePasswordTeacherView.php'>Change Password</a>";
  echo "<br><a href ='../Controller/logoutTeacherController.php'>Logout </a>";
  echo "<h1 align='middle'> Welcome ".$_SESSION['username']."</h2>";



}
else {
  echo "You can not access the page.";
}
 ?>
