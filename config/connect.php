<?php 

	$server   = "localhost" ;
	$username = "root" ;
	$password = "" ;
	$database = "new" ;

	$conn = mysqli_connect($server,$username,$password) ;
	mysqli_select_db($conn,$database);

 ?>


