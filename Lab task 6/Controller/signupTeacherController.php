<?php

require_once '../Model/model.php';





if (isset($_POST['submit'])) {

  $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = $birth="";
  $username=$password="";
 $confirmpassword="";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["name"])) {
    echo "Name is required";
    $flag=0;
  } else {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         echo "Only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($name)<2)
          {
          echo "Name must contains at least two words ";
           $flag=0;

          }
    }
  }

  if (empty($_POST["email"])) {
    echo "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      $flag=0;
    }
  }

  if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
    echo "Date Month and Year is required";
    $flag=0;
  } else {

    $birthDate=test_input($_POST["birthDate"]);
    $birthMonth=test_input($_POST["birthMonth"]);
    $birthYear=test_input($_POST["birthYear"]);

    if(!is_numeric($birthDate))
    {
      echo "Please input Numeric Date";
      $flag=0;
    }
    else {

      if(!is_numeric($birthMonth))
      {
          echo "Please input Numeric month";
          $flag=0;
      }
      else {
        if(!is_numeric($birthYear))
        {
          echo "Please input Numeric Year";
          $flag=0;
        }
        else {
          if($birthDate>31 || $birthDate<1)
          {
              echo " Input Date between 1 to 31";
              $flag=0;
          }
          else {
              if($birthMonth>12 || $birthMonth<1)
              {
                  echo  "Input Month between 1 to 12";
                  $flag=0;
              }
              else {
                  if($birthYear>1998 || $birthYear<1953)
                  {
                    echo "Input Year between 1953 to 1998";
                    $flag=0;
                  }
                  else {
                  $birth =$birthDate."/".$birthMonth."/".$birthYear;
                  }
              }
          }

        }
      }
    }
  }



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

    if(empty($_POST["confirmpassword"]))
    {
      echo "Confirm Password is required";
      $flag=0;
    }
    else {
      if(empty($_POST["password"]))
      {
        echo "Password is required";
        $flag=0;
      }
      else {
        $confirmpassword=test_input($_POST["confirmpassword"]);

        if(strcmp($password,$confirmpassword))
        {
          echo "Password and confirm password have to be same";
          $flag=0;
        }
      }
    }
    if (empty($_POST["gender"])) {
      echo "Gender is required";
      $flag=0;
    } else {
      $gender = test_input($_POST["gender"]);
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
    echo 'Successfully added!!';
  }

  else {
    echo 'Could not add!!';
  }
}



}else {
  echo "You can not access this page!!";
}






?>
