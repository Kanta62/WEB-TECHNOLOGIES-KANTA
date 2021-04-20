<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="../JS/jsvalidation.js" type="text/javascript"></script>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <p><h3>Change Password</h3></p>
    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../Controller/changePasswordTeacherController.php">
        Current Password: <input type="text" name="cpassword" id="password" onkeyup="checkPass()" onblur="checkPass()">
         <span class="error" id="passwordErr"><?php if (!empty($_GET['cpasswordErr'])) {echo $_GET['cpasswordErr'];} ?> </span>
        <br><br>
        <span style="color:green">New Password:</span>
        <input type="text" name="npassword" id="npassword"  onkeyup="changePass()" onblur="changePass()">
         <span class="error" id="npasswordErr"><?php if (!empty($_GET['npasswordErr'])) {echo $_GET['npasswordErr'];} ?> </span>
        <br><br>
        <span style="color:Red">Retype New Password:</span>
        <input type="text" name="rnpassword" id="rnpassword"  onkeyup="retypePass()" onblur="retypePass()" >
         <span class="error" id="rnpasswordErr"><?php if (!empty($_GET['rnpasswordErr'])) {echo $_GET['rnpasswordErr'];} ?> </span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>


    </form>

    
  </body>
</html>
