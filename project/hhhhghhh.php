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