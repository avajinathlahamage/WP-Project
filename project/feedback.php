<!DOCTYPE HTML>
<html>
<head>
   <link href="css.css" rel="stylesheet">
   <link href="background_color.css" rel="stylesheet">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="#home">HOME</a></li>
	  <li><a href="#COURSES">COURSES</a></li>
    <li><a href="registration.php">REGISTRATION</a></li>
	   <li style="float:right"><a href="#contact">CONTACT</a></li>
    <li style="float:right"><a href="feedback.php">FEEDBACK</a></li>

</ul>

<?php
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
     }
   }
  
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<h2 align="center">Give Your Feedback</h2>
<div class="box1">
<form method="post" action="database.php">
   Name : <input type="text" name="name" value="<?php echo $name;?>" required>
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail : <input type="email" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Comment : <textarea name="comment" required rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>
</div>

</body>
</html>
<?php
if(empty($nameErr))
	header('thank_you.php');
?>