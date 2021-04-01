<?php
require_once "../Model/model.php";

session_start();


if(isset($_POST['submit']))
{
  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $flag=1;


  if (empty($_POST["username"])) {
    echo "User Name is required";
    $flag=0;
  }
  else {
   $username = test_input($_POST["username"]);

    if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
       echo "Only letters and white space allowed";
       $flag=0;
     }
     else {
       if(strlen($username)<2)
       {
          echo "Name must contains at least two character ";
          $flag=0;
       }

     }
  }


 if(empty($_POST["password"]))
 {
   echo "Password is required";
   $flag=0;
 }
 else {
   $password=test_input($_POST["password"]);
   if(strlen($password)<8)
   {
     echo "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
     {
       echo "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }


  if($flag==1)
  {
    try {

      $data = searchUsername($username);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordFromDB= $user['PASSWORD'] ;
        endforeach;
        if($password==$passwordFromDB)
        {
          $_SESSION['username']=$username;

          header('Location: ../View/dashboardTeacherView.php');
        }
        else {
          echo "Incorrect Password";
        }
      }else {
        echo "Username not found";
      }


    } catch (Exception $ex) {
      echo $ex->getMessage();
    }

  }
}

else {
  echo "You are not allowed to access this page";
}




?>
