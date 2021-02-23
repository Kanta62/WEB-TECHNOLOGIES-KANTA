<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <?php 
    
    $nameErr = $passwordErr = $newPasswordErr =  $currentPasswordErr = "" ;
    $password = $name = $newPassword = $currentPassword = "";
    $nc =strlen($name);
    $pc =strlen($password);
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"]))
         {
          $nameErr = "Name is required";
        } 
        else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
              $nameErr = "Only letters white space, period & dash allowed";
              $name ="";
            }
            else if ($nc<2) {
              $nameErr = "At least two words needed";
              $name ="";
            }
            else if ($nc>2) {
                $nameErr = "ok";
                $name ="";
              }
          }
         

          if (empty($_POST["password"])) {
            $passwordErr = "password is required";
          } else {
            $password = test_input($_POST["password"]);
            if ($pc<8)//conditions
             {
              $passwordErr = "must not be less than eight (8) characters.must contain at least one of the special characters (@, #, $,
              %)";
              $password ="";
            }
            else if (!preg_match("/[@,#,$,%]/",$password)) {
              $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
              $password ="";
            }

          }
        
          if (empty($_POST["currentPassword"])) {
            $currentPasswordErr = "Current Password is required";
          } else {
            if (!strcmp($currentPassword, $password)==0) {
              $currentPasswordErr="Password is not correct";
            }
            $currentPassword = test_input($_POST["currentPassword"]);
          }
          if (empty($_POST["newPassword"])) {
            $newPasswordErr = "Retype The Current Password";
          } else {
            $newPassword = test_input($_POST["password"]);
            if (!strcmp($Password, $newPassword)==0) {
              $rtnpassErr = "New Password & Retyped Password  Dosen't Match";
            }
          }

    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  

        <div class="username">
            <h1>Login</h1>
            <!--take name input in text type...-->
            <div class="name">

                Name: <input type="text" name="name">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>

            </div>
            <div class="password">

                password: <input type="password" name="password">
                <span class="error">* <?php echo $passwordErr;?></span>
                <br><br>
            </div>
            <hr>
            <input type="checkbox" name="Remember_me"> Remember me <br>

            <input type="submit" name="submit" value="Submit"> <a href="http://">Forgot password?</a>

        </div>
    </form>
  




</body>

</html>