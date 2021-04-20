<?php
session_start();
if(isset($_SESSION['username']))
{
  session_destroy();
  header('Location:../View/loginTeacherView.php');
}else{
	  header('Location:../View/loginTeacherView.php');
}

 ?>