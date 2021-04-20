<?php

session_start();
require_once '../Controller/teacherInfoController.php';
$data = fetchStudent($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $student):

       $name= $student['NAME'] ;
       $email=$student['EMAIL'];
       $birth=$student['BIRTH'];
       $gender= $student['GENDER'] ;
  endforeach;
$birth=str_replace('/','', $birth );
$birthDate=$birth[0].$birth[1];
$birthMonth=$birth[2].$birth[3];
$birthYear=$birth[4].$birth[5].$birth[6].$birth[7];


}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="../JS/jsvalidation.js" type="text/javascript"></script>
  <script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "namesuggestion.php?q=" + str, true);
        xmlhttp.send();
    }
}
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "changePasswordTeacherView.php", true);
  xhttp.send();
}
</script>
<style type="text/css">
  button{
      padding: 3px 20px;
    background-color: black;
    border: 8px;
    color: #fff;
    border-radius: 8px;
    }
</style>
</head>
<body>

 <form action="../Controller/updateTeacherController.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input value="<?php echo $name ?>" type="text" id="name" name="name" onkeyup="showHint(this.value)"  onkeyup="checkName()" onblur="checkName()">
  <br>
  <span class="error" id="nameErr" ><?php if (!empty($_GET['nameErr'])) {echo $_GET['nameErr'];} ?> </span>
  <br><p>Suggestions: <span id="txtHint"></span></p>
  <br>
  <label for="email">Email:</label>
  <input value="<?php echo $email ?>" type="text" id="email" name="email"  onkeyup="checkEmail()" onblur="checkEmail()">
  <br>
  <span class="error" id="emailErr" ><?php if (!empty($_GET['emailErr'])) {echo $_GET['emailErr'];} ?> </span>
  <br><br>
  <label for="birth"> Date of Birth:</label><br>
   <input value="<?php echo $birth ?>" type="date" id="birth" size="1" name="birth"  onkeyup="checkDOB()" onblur="checkDOB()"><br>
  <span class="error" id="birthErr" ><?php if (!empty($_GET['birthErr'])) {echo $_GET['birthErr'];} ?> </span> <br><br>
  <input type="submit" name = "updateStudent" value="Update">
  <input type="reset"><br><br>
  <div id="demo">
<button type="button" onclick="loadDoc()">Change Password</button>
</div>
</form>

</body>
</html>
