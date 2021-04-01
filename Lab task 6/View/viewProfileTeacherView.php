<?php
session_start();
require_once '../Controller/teacherInfoController.php';



if(isset($_SESSION['username']))
{
$data = fetchStudent($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $student):

         $name= $student['NAME'] ;
         $email=$student['EMAIL'];
         $username= $student['USERNAME'] ;
         $birth=$student['BIRTH'];
         $gender= $student['GENDER'] ;
    endforeach;

    echo "<br />$name";
    echo "<br />$email";
    echo "<br />$username";
    echo "<br />$birth";
    echo "<br />$gender";
  }
}

else {
  echo "You cannot access this page!!";
}
 ?>
