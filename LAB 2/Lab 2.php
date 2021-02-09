<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
</head>

<body>

    <?php

$nameErr = $emailErr = $DOBErr = $genderErr = $degreeErr = $BGErr = "";
$name = $email = $DOB =  $gender =$BG = "";
$degree = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    $nc =strlen($name);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)&&$nc>"2") {
      $nameErr = " Cannot be empty. Contains at least two words
      . Must start with a letter
      . Can contain a-z, A-Z,
      period, dash only.";
    }
  }
  

  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Cannot be empty
      . Must be a valid
      . email_address :
      anything@example.
      Com";
    }
  }
  if (empty($_POST["DOB"])) {
    $DOBErr = "Date is required";
  } else {
    $DOB = test_input($_POST["DOB"]);
    
    if (!filter_var($DOB)) {
      $DOBErr = " Cannot be empty.";
    }
  }
 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    $genderErr="At least one of them
    must be selected";
  }
  if (empty($_POST["degree"])) {
    $degreeErr= "Degree is required. you have to select at least two.";
  } 
  else {
    foreach ($_POST["degree"] as $key) {
      array_push($degree, $key);
    }
    if(count($degree)<2){
    $degreeErr = "At least two of them must be selected";
  }
  }
  if (empty($_POST["BG"])) {
    $BGErr = "Blood Group is required";
  } else {
    $BG = test_input($_POST["BG"]);
    $BGErr="At least one of them
    must be selected";
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <h1>HTML form using PHP with validation of user inputs
</h1>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Date of Birth: <input type="date" name="DOB">
        <span class="error">* <?php echo $DOBErr;?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        Blood Group:
        <label for="BG">Blood Group:</label>
        <select id="BG" name="BG">
            <option value="">Select any one</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><span class="error">* <?php echo $BGErr;?></span>
        <br><br>
        Degree:
        <br>
        <input type="checkbox" name="degree[]" value="SSC">
        <label for="vehicle1"> SSC</label><br>
        <input type="checkbox" name="degree[]" value="HSC">
        <label for="vehicle2">HSC</label><br>
        <input type="checkbox" name="degree[]" value="BSc">
        <label for="vehicle3">BSC</label><br>
        <input type="checkbox" name="degree[]" value="MSc">
        <label for="vehicle3">MSC</label><br>
        <span class="error">* <?php echo $degreeErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
echo "<h2>Your Input:</h2>";
echo "Name:  ".$name;
echo "<br>";
echo "Email: ".$email;
echo "<br>";
echo "Dath of Birth: ".$DOB;
echo "<br>";
echo "Dath of Birth: ".date("$DOB");
echo "<br>";
echo "Gender: ".$gender;
echo "<br>";
echo "Blood Group ".$BG;
echo "<br>";
echo "Degree: ";
$arrlength = count($degree);
for($x = 0; $x < $arrlength; $x++) {
  echo $degree[$x];
  echo "<br>";
}
echo "<br>";

?>
</body>

</html>