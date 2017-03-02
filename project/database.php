<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$gender=$_POST['gender'];


$con = mysqli_connect("localhost","root","","project") ;

$que="insert into feedback( name,email,comment,gender) values( '$name','$email','$comment','$gender') ";

mysqli_query($con, $que);


mysqli_close($con);
include('thank_you.php');

?>
