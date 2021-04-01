<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <p><h3>Change Password</h3></p>
    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../Controller/changePasswordTeacherController.php">
        Current Password: <input type="text" name="cpassword" >
        <br><br>
        <span style="color:green">New Password:</span>
        <input type="text" name="npassword" >
        <br><br>
        <span style="color:Red">Retype New Password:</span>
        <input type="text" name="rnpassword" >
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>


    </form>

    
  </body>
</html>
