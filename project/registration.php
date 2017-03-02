<html>
<head>
<title>our registration page</title>
<link href="css.css" rel="stylesheet">
<link href="background_color.css" rel="stylesheet">
<style>
.error {color: #FF0000;}
</style>
</head>

<body>
<ul>
    <li><a class="active" href="frontpge.php">HOME</a></li>
    <li><a href="#news">NEWS</a></li>
    <li><a href="#ADMISSION">ADMISSION</a></li>
    <li><a href="#COURSES">COURSES</a></li>
    <li><a href="registration.php">REGISTRATION</a></li>
    <li><a href="#LOG-IN">LOG-IN</a></li>
	<li style="float:right"><a href="#contact">CONTACT</a></li>
    <li style="float:right"><a href="feedback.php">FEEDBACK</a></li>
</ul>
<h3 style="color:white"><marquee>hurry up.....</marquee><h3>
<h3 style="color:white"><marquee>new batches are started........</marquee></h3>
<?php
$fnameErr = $mnameErr = $lnameErr = $emailErr = $genderErr = $branchErr = $classErr= $collegeErr = $current_addressErr = $permanant_addressErr = $phone_noErr= $cityErr = $districtErr = $stateErr = $pin_codeErr = "";
$fname = $mname =$lname = $email = $gender = $branch = $class = $college =  $current_address = $permanant_address = $phone_no= $city = $district = $state = $pin_code = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["fname"])) {
     $fnameErr = "First Name is required";
   } else {
     $fname = test_input($_POST["fname"]);
   }
   if (empty($_POST["mname"])) {
     $mnameErr = "Middle Name is required";
   } else {
     $mname = test_input($_POST["mname"]);
   }
   if (empty($_POST["lname"])) {
     $lnameErr = "Last Name is required";
   } else {
     $lname = test_input($_POST["lname"]);
   }
      if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }

   if (empty($_POST["branch"])) {
	   $branchErr = "course is required"; 
   } else {
     $branch = test_input($_POST["branch"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
		  if (empty($_POST["class"])) {
               $classErr = "class is required";
            }else {
               $class = test_input($_POST["class"]);
            }
			if (empty($_POST["college"])) {
               $collegeErr = "college is required";
            }else {
               $college = test_input($_POST["college"]);
            }
			
			if (empty($_POST["city"])) {
     $cityErr = "City is required";
   } else {
     $city = test_input($_POST["city"]);
   }
   
   
   if (empty($_POST["district"])) {
     $districtErr = "District is required";
   } else {
     $district = test_input($_POST["district"]);
   }
   
   if (empty($_POST["state"])) {
     $stateErr = "Middle Name is required";
   } else {
     $state = test_input($_POST["state"]);
   }
   if (empty($_POST["pin_code"])) {
     $pin_codeErr = "Middle Name is required";
   } else {
     $pin_code = test_input($_POST["pin_code"]);
   }
   if (empty($_POST["current_address"])) {
     $current_addressErr = "Middle Name is required";
   } else {
     $current_address = test_input($_POST["current_address"]);
   }
   if (empty($_POST["permanant_address"])) {
     $permanant_addressErr = "Middle Name is required";
   } else {
     $permanant_address = test_input($_POST["permanant_address"]);
   }
   if (empty($_POST["phone_no"])) {
     $phone_noErr = "Middle Name is required";
   } else {
     $phone_no = test_input($_POST["phone_no"]);
   }
			
			
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<FIELDSET><LEGEND ALIGN="CENTER"><h4 style="color:white">REGISTRATION</h4></LEGEND>
<p><span class="error" style="color:red;font-size:15;">* Required Field In The Form.</span></p>
<CENTER>
<form action="registration1.php" method="POST">

    <font size="5" align="center" color="white">-:First Name:-</font><br><br>
	<input type="text" placeholder="Enter First Name" name="fname" size="65" value="<?php echo $fname;?>"required>
   <br><br>
   <font size="5" align="center" color="white">-:Middle Name:-</font><br><br>
   <input type="text" placeholder="Enter Middle Name" name="mname" size="65" value="<?php echo $mname;?>"required>
   <br><br>
   <font size="5" align="center" color="white">-:Last Name:-</font><br><br>
   <input type="text" placeholder="Enter Last Name" name="lname" size="65" value="<?php echo $lname;?>"required>
   <br><br>
   <font size="5" align="center" color="white">-:E-Mail:-</font><br><br>
   <input type="email" placeholder="Enter E-mail Address" size="65" name="email" value="<?php echo $email;?>"required>
   <br><br>
    <font size="5" align="center" color="white">-:Current Address:-</font><br><br>
	<textarea name="current_address" required rows="7" cols="50"><?php echo $current_address;?></textarea>
	<br><br>
    <font size="5" align="center" color="white">-:Permanant Address:-</font><br><br>
	<textarea name=" permanant_address" required rows="7" cols="50"><?php echo $permanant_address;?></textarea>
	<br><br>
     <font size="5" align="center" color="white">-:Current City:-</font><br><br>
	 <input type="text" placeholder="Enter Nearest City" name="city" size="65" value="<?php echo $city;?>"required>
     <br><br>  
	 
	  <font size="5" align="center" color="white">-:District:-</font><br><br>
	 <input type="text" placeholder="Enter District" name="district" size="65" value="<?php echo $district;?>"required>
   <br><br>
    <font size="5" align="center" color="white">-:Pin Code:-</font><br><br>
	 <input type="number" placeholder="Enter Pin Code" name="pin_code" value="<?php echo $pin_code;?>"required>
   <br><br>
   
   <font size="5" align="center" color="white">-:State:-</font><br><br>
	 <input type="text" placeholder="Enter State" name="state" size="65" value="<?php echo $state;?>" required>
   <br><br>
    <font size="5" align="center" color="white">-:Phone No:-</font><br><br>
    <input type="number" name="phone_no" placeholder="Mobile Number" value="<? echo $phone_no;?>"required>
    </div><br><br>
    <font size="5" align="center" color="white">-:Branch:-</font><br><br>
  <input type="text" placeholder="Enter Branch Name" name="branch" size="65" value="<?php echo $branch;?>" required><br><font color="white">* use short form of branch name e.g.IT = Information Technology</font>
   <br><br>
   <font size="5" align="center" color="white">-:Class:-</font><br><br>
   <input type="radio" name="fe" <?php if (isset($class) && $class=="fe") echo "checked";?>  value="fe"><font style="color:white;">F.E.</font>
   <input type="radio" name="se" <?php if (isset($class) && $class=="se") echo "checked";?>  value="se"><font style="color:white;">S.E.</font>
   <input type="radio" name="te" <?php if (isset($class) && $class=="te") echo "checked";?>  value="se"><font style="color:white;">T.E.</font>
   <input type="radio" name="be" <?php if (isset($class) && $class=="be") echo "checked";?>  value="se"><font style="color:white;">B.E.</font>
   <br><br>
<font size="5" align="center" color="white">-:Gender:-</font><br><br>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female"><font style="color:white;">Female</font>
   <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male"><font style="color:white;">Male</font>   <br><br>
<font size="5" align="center" color="white">-:College:-</font><br><br>
   <input type="text" placeholder="Enter College Name" name="college" size="65" value="<?php echo $college;?>"required>
   <br><br>
   
   <input type="submit" name="submit" value="submit">
</form>
<?php
if(empty($nameErr))
	header('thank_you.php');
?>
</body>
</html>
