<?php
session_start();
require_once '../Model/model.php';


if (isset($_POST['updateStudent']) && isset($_SESSION['username'])) {

  $birthDate = $birthMonth = $birthYear = $name = $email = $birth="";
  $nameErr = $emailErr = $birthErr="";


 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         $nameErr = "Only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($name)<2)
          {
         $nameErr = "Name must contains at least two words ";
           $flag=0;

          }
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag=0;
    }
  }

   if (empty($_POST["birth"])) {
$birthErr= "Birthday is required";
$flag=0;
} else {


$birth=test_input($_POST["birth"]);
$birthDate=$birth[8].$birth[9];
$birthMonth=$birth[5].$birth[6];
$birthYear=$birth[0].$birth[1].$birth[2].$birth[3];


if($birthYear>2021 || $birthYear<1953)
{
$birthErr ="Input Year between 1953 to 2021";
$flag=0;
}
else {
$birth =$birthDate."/".$birthMonth."/".$birthYear;
}
}
if($flag==0){
$args = array(
'nameErr' => $nameErr,
'emailErr' => $emailErr,
'birthErr' => $birthErr
);
header("location:../view/editProfileTeacherView.php?" .
http_build_query($args));
}

if($flag==1)
{
  $data['name']=$name;
  $data['email']=$email;
  $data['birth']=$birth;


  if (updateStudent($_SESSION['username'],$data)) {
    echo 'Successfully added!!';
  }

  else {
    echo 'Could not add!!';
  }
}


} else {
	echo 'You are not allowed to access this page.';
}


?>
