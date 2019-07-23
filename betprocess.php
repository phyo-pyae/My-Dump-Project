<?php 
	require('config/connect.php');
	require('config/auth.php');
	$test = $_GET['bett'];
	if ($test=="backtohome") {
		echo("<script>location='index.php'</script>");
	}else{
		$userid  = $_SESSION['uid'] ;
		$matchid 		= $_GET['mid'] ;
		$amount 		= (float)$_GET['amount'] ;

		$var 			=  $_GET['option'];
		$arr = explode ("-", $var);  

		$odd 			= (float)$arr[0];
		$prefer_side	= $arr[1];

		$query = "SELECT balance from account where UID='$userid'" ;
		$result = mysqli_query($conn,$query) or die(mysqli_error($conn)); 
		$row = mysqli_fetch_array($result,true);
		$previous = $_SERVER['HTTP_REFERER'] ;
		if($row['balance']<$amount){
			echo "<script>alert('You dont have enough balance');</script>" ;
			echo "<script>location='".$previous."'</script>" ;
		}else{
			$row['balance']=$row['balance']-$amount ;
			$lol 	=		$row['balance'] ;
         	$query = "UPDATE `account` SET `balance` = '$lol' WHERE `account`.`uid` = $userid";
          	mysqli_query($conn,$query) or die(mysqli_error($conn));
		}

		//INSERT INTO `bet`(`UID`, `MID`, `prefer_side`, `odd`, `amount`) VALUES (123,2,'draw',2.1,20)
		$query  = "INSERT INTO bet(UID, MID, prefer_side, odd, amount) VALUES ($userid,'$matchid','$prefer_side',$odd,$amount)" ; 
		mysqli_query($conn,$query); 

		if ($prefer_side=="draw") {
			echo "<script>alert('You betted draw for the match"." Amount:".$amount." dollars')</script>"; 
		}else{
			echo "<script>alert('You betted for team ".$prefer_side. " Amount:".$amount." dollars')</script>" ;
 
		}	
		echo("<script>location = 'index.php'</script>");
	}	
?>




