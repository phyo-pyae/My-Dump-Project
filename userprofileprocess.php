<?php 
require('config/connect.php');
require('config/auth.php');
if ($_GET['option']=='Back') {
  echo "<script>location='userinformation.php'</script>";
}
if(isset($_GET['white']) and isset($_GET['updateid'])){
  $white = $_GET['white'] ;
  if($white==1){
  	$updateid = $_GET['updateid'] ;
  	$first_name=$_GET['first_name'];
  	$last_name=$_GET['last_name'];
  	$username=$_GET['username'];
  	$password=$_GET['password'];
  	$email=$_GET['email'];
  	$phone=$_GET['phone'];
  	$country=$_GET['country'];
  	$gender=$_GET['gender'];
  	$dob=$_GET['dob'];
  	$city=$_GET['city'];
  	$address=$_GET['address'];

$query = "UPDATE `register` SET `first_name`='$first_name',`last_name`='$last_name',`username`='$username',`password`='$password',`email`='$email',`phone`='$phone',`country`='$country',`gender`='$gender',`dob`='$dob',`city`='$city',`address`='$address' WHERE `register`.`uid`=$updateid" ;
$result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
$white = 0 ;
$_SESSION['username'] = $username; 
echo "<script>location='userprofile.php'</script>" ;
}
}else{}

 ?>
