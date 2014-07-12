<?php
session_start();
 error_reporting(0);
 
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$Name = clean($_POST['Name']);
	$Email_Address = clean($_POST['Email_Address']);

	if($Name == '') {
		$errmsg_arr[] = 'Name missing';		//If no name display name missing
		$errflag = true;
	}
	if($Email_Address == '') {
		$errmsg_arr[] = 'Email Address missing';    //If no email display email missing
		$errflag = true;
	}

	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");		//Send back to page if an error accrued
	
		exit();
	}
		
	else {
	 echo"Thank you for you message '$Name'";	//Display 
exit();

}

?>