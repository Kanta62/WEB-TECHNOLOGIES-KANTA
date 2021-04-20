<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 50px;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('../Sources/dashboardcover.jpg');
  background-repeat: no-repeat;
  background-size: 1550px 730px;

}
.box{
      background-color: rgba(0,0,0,0.8);
  width: 80%;
  font-size: 18px;
  margin-top: 160px;
  margin-left: 150px;
  margin-right: 200px;
  border-radius: 10px;
  border: 1px soid rgba(255,255,255,0.3);
  box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
  color: #fff;
    }

/* Style the side navigation */
.sidenav {
  height: 75%;
  margin-top: 80px;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 20px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
}
</style>
</head>
<div><?php include("../Model/header.php"); ?></div>
<body>


<div><?php include '../Sources/AccountDesign.php';?></div>

<?php 
session_start();

if (empty($_SESSION['username'])) {
 header('Location:loginTeacherView.php');
}

else{
    echo "<div style='float: right;font-size:20px;margin-right: 40px;color:white;';>"." Logged in as&nbsp; <a class='button1' href='viewProfileTeacherView.php'>".$_SESSION['username']."</a> | ";
    echo "<a class='button1' href='../Controller/logoutTeacherController.php'>Logout</a>";
    echo "</div><br>";
} 

  
echo "<div class='sidenav'>";

 echo "<br><a href='dashboardTeacherView.php'>Dashboard</a>";
 echo "<br><a href='viewProfileTeacherView.php'>View Profile</a>";
 echo "<br><a href='editProfileTeacherView.php'>Edit Profile</a>";
 // echo "<br><a href='upload.php'>Change Profile Picture</a>";
  echo "<br><a href='changePasswordTeacherView.php'>Change Password</a>";
  echo "<br><a href ='../Controller/logoutTeacherController.php'>Logout </a>";
  echo "</div>";
  
echo '<div class="content">';

echo "<div class='box'><h1 align='middle'><br> Welcome ".$_SESSION['username']."</h1><br><br></div>";
 
echo "</div>";
 ?>
 
</body>
 <div style="margin-top: 210px;"><?php include("../Model/footer.php"); ?></div>
</html>