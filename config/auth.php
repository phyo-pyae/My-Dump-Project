<?php 
	error_reporting(0);
	session_start();
	$auth_key = isset($_SESSION['auth_key']);
	$admin_key = isset($_SESSION['admin_key']);
	if (!$auth_key and !$admin_key) {
		echo("<script>alert('you r not loginned in');</script>");
		echo("<script> location = 'dist2/loginform.php'</script>");
	}else{
		
	}
 ?>