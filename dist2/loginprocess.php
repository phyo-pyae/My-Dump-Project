<?php 
	require("../config/connect.php");
	session_start();
	$username	=	$_GET['username'];
	$password	=	$_GET['password'];
	$query	 	= 	"SELECT * from register  where username='$username' and password='$password'" ;
	$result  	= 	mysqli_query($conn,$query) or die(mysqli_error($conn)); 
	$count		= 	mysqli_num_rows($result);
	$row = mysqli_fetch_array($result,true);
	if ($count==0) {			//no user name and password in user database
		echo "<script>alert('incorrect');</script>";
		echo "<script> location='loginform.php'</script>";
	}else{						//
		$query2 	= "SELECT * from admin where username='$username' and password='$password'" ;	
		$result2 = mysqli_query($conn,$query2) or die(mysqli_error($conn)) ;
		$count2 	= mysqli_num_rows($result2) ;
		$row2 	= mysqli_fetch_array($result2,true);
			if ($count2==0) {   // user but no admin
				//$_SESSION['aid'] 				=  $row['AID'] ;
				$_SESSION['uid']				=  $row['uid'] ;
				$_SESSION['username']			=  $row['username'] ;			
				echo "<script>alert('logged in successfully');</script>";
				echo "<script> location='../index.php'</script>";				
				$_SESSION['auth_key']			= 1 ;
			}else{
				//print_r($row2);
				$_SESSION['aid']			=  $row2['AIDD'] ;
				$_SESSION['username']		=  $row2['username'] ;
				
				//$_SESSION['password']	=  ;
				echo "<script>alert('HEllo ADmin logged in successfully');</script>";
				echo "<script> location='../index.php'</script>";
				$_SESSION['admin_key'] 			= 1 ;
	        }    
	}


 ?>		
