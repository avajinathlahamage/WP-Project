<?php 
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$branch=$_POST['branch'];
$class=$_POST['class'];
$college=$_POST['college'];
$current_address=$_POST['current_address'];
$permanant_address=$_POST['permanant_address'];
$phone_no=$_POST['phone_no'];
$city=$_POST['city'];
$district=$_POST['district'];
$state=$_POST['state'];
$pin_code=$_POST['pin_code'];


$con = mysqli_connect("localhost","root","","project") ;

$que="insert into registration( fname,mname,lname,email,gender,branch,class,college,current_address,permanant_address,phone_no,city,district,state,pin_code) values( '$fname','$mname','$lname','$email','$gender','$branch','$class','$college','$current_address','$permanant_address','phone_no','city','district','state','pin_code') ";

mysqli_query($con, $que);


mysqli_close($con);
include('thank_you.php');

?>