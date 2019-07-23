<?php 

require('config/connect.php');
require('config/auth.php') ;

$text 	=	$_GET['text'] ;
$id		=	$_SESSION['uid'] ;

$query = "INSERT INTO `feedback`(`uid`, `feedback`) VALUES ('$id','$text')" ;
$result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
echo "<script>alert('Submitted Thanks you for your feedback');</script>" ;
echo "<script>location='index.php'</script>" ;
 ?>