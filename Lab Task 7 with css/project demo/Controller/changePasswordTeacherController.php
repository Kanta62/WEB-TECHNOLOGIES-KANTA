

<?php
require_once "../Model/model.php";

session_start();


if(isset($_POST['submit']) && isset($_SESSION['username']))
{
  $cpassword=$npassword=$rnpassword="";
  $cpasswordErr=$npasswordErr=$rnpasswordErr="";
 
  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $flag=1;


  if (empty($_POST["cpassword"])) {
       $cpasswordErr= "Current Password is required";
       $flag=0;
     }
     else {
      $cpassword = test_input($_POST["cpassword"]);


        }


 if(empty($_POST["npassword"]))
 {
   $npasswordErr= "Password is required";
   $flag=0;
 }
 else {
   $npassword=test_input($_POST["npassword"]);
   if(strlen($npassword)<8)
   {
     $npasswordErr= "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($npassword,"@")<1 || substr_count($npassword,"#")<1 || substr_count($npassword,"%")<1 || substr_count($npassword,"$")<1)
     {
       $npasswordErr= "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }

 if(empty($_POST["rnpassword"]))
 {
  $rnpasswordErr= "Password is required";
   $flag=0;
 }
 else {
   $rnpassword=test_input($_POST["rnpassword"]);
   if(strlen($rnpassword)<8)
   {
     $rnpasswordErr= "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($rnpassword,"@")<1 || substr_count($rnpassword,"#")<1 || substr_count($rnpassword,"%")<1 || substr_count($rnpassword,"$")<1)
     {
       $rnpasswordErr= "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }

 if($flag==0){
$args = array(
'cpasswordErr' => $cpasswordErr,
'npasswordErr' => $npasswordErr,
'rnpasswordErr' => $rnpasswordErr

);
header("location:../view/changePasswordTeacherView.php?" .
http_build_query($args));
}

  if($flag==1)
  {
    try {

      $data = searchUsername($_SESSION['username']);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordFromDB= $user['PASSWORD'] ;
        endforeach;
        if($cpassword==$passwordFromDB)
        {
          if($npassword==$rnpassword){
          if (updatePasswordStudent($_SESSION['username'], $npassword)) {
            echo 'Successfully updated!!';
           session_destroy();
            header('Location: ../View/loginTeacherView.php');
          }
          else {
            echo "Update unsuccessful!!";
          }
        }
        else {
          echo "New password and retype password is not same!!";
        }
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
