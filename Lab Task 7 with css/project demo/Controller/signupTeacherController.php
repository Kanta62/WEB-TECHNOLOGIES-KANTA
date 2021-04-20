<?php

require_once '../model/model.php';



if (isset($_POST['submit'])) {
$birthDate = $birthDateErr = $birthMonth = $birthMonthErr= $birthYear = $birthYearErr =
$name = $nameErr =
$email = $emailErr =
$gender = $genderErr =
$birth="";
$username=$password="";
$usernameErr = $passwordErr = $confirmpasswordErr =
$confirmpassword="";
$flag=1
;
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
else {
if(str_word_count($name)<2)
{
$nameErr = "Name must contains at least two words ";
$flag=0;

 }
}
}

 if (empty($_POST["email"])) {
$emailErr= "Email is required";
$flag=0;
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr= "Invalid email format";
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

 if (empty($_POST["gender"])) {
$genderErr = "Gender is required";
$flag=0;
} else {
$gender = test_input($_POST["gender"]);
}



if (empty($_POST["username"])) {
$usernameErr = "User Name is required";
$flag=0;
}
else {
$username = test_input($_POST["username"]);

 if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
$usernameErr = "Only letters and white space allowed";
$flag=0;
}
else {
if(strlen($username)<2)
{
$usernameErr = "Name must contains at least two character ";
$flag=0;
}

 }
}

 if(empty($_POST["password"]))
{
$passwordErr = "Password is required";
$flag=0;
}
else {
$password=test_input($_POST["password"]);
if(strlen($password)<8)
{
$passwordErr = "Password must not be less than eight (8) characters";
$flag=0;
}
else {
if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
{
$passwordErr = "Password must contain at least one of the special characters (@, #, $,%)";
$flag=0;
}
}
}


if(empty($_POST["confirmpassword"]))
{
$confirmpasswordErr = "Confirm Password is required";
$flag=0;
}
else {
if(empty($_POST["password"]))
{
$confirmpasswordErr = "Password is required";
$flag=0;
}
else {
$confirmpassword=test_input($_POST["confirmpassword"]);

 if(strcmp($password,$confirmpassword))
{
$confirmpasswordErr = "Password and confirm password have to be same";
$flag=0;
}
}
}
if($flag==0){
$args = array(
'nameErr' => $nameErr,
'emailErr' => $emailErr,
'usernameErr' => $usernameErr,
'passwordErr' => $passwordErr,
'confirmpasswordErr' => $confirmpasswordErr,
'genderErr' => $genderErr,
'birthErr' => $birthErr
);
header("location:../view/signupTeacherView.php?" .
http_build_query($args));
}

if($flag==1)
{
$data['name']=$name;
$data['email']=$email;
$data['birth']=$birth;
$data['username']=$username;
$data['password']=$password;
$data['gender']=$gender;

 if (addSignupInfo($data)) {
  echo "<script>alert('Successfully Added');
               window.location.href = '../view/signupTeacherView.php';
          </script>";
}

 else {
echo "<script>alert('Could not Add');
               window.location.href = '../view/signupTeacherView.php';
          </script>";
}
}


}else {
	echo "<script>alert('You can not access this page!!');
               window.location.href = '../view/signupTeacherView.php';
          </script>";

}



?>