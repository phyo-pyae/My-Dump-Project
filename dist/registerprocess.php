<?php 
require('../config/connect.php');
if (isset($_GET['action']) and $_GET['action']=="Re") {
	$first_name		=	$_GET['first_name'] ;
	$last_name		=	$_GET['last_name'] ;
	$username 		=	$_GET['username'] ;
	$phone			=	$_GET['phone'] ;
	$country		=	$_GET['country'] ;
	$address		=	$_GET['address'] ;
	$city			=	$_GET['city'] ;
	$email			=	$_GET['email'] ;
	$password		=	$_GET['password'] ;
	$gender			=	$_GET['gender'] ;
	$datee			=	$_GET['date'] ;
}
	$query  = "INSERT INTO register(first_name, last_name, username, password, email,phone,country,gender,dob,city,address) VALUES ('$first_name','$last_name','$username','$password','$email','$phone','$country','$gender','$datee','$city','$address')"; 
	mysqli_query($conn,$query);// or die(mysqli_error($conn));
	if (mysqli_error($conn)) {	
		echo("<script>alert('duplicate error');</script>");
		echo("<script>location='registerform.php'</script>");
	}
	if (!mysqli_connect_errno()) {
		echo "<script> location='../dist2/loginform.php' </script>";
	}
 ?>












