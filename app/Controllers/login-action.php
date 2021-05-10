<?php
	include("config.php");

    $username = $_POST['uname'];
    $password = $_POST['pw'];
	$result=mysqli_query($mysqli,"select * from users where username='$username' AND password='$password'");
	
	$rowCheck = mysqli_num_rows($result);
	
	if($rowCheck > 0){
		while($row = mysqli_fetch_array($result)){
			session_start();
			$_SESSION['uname'] = $username;
			if($username=='admin'){
				header( "Location: index.php" );
			}
			else{
				
				header("Location: dashboard.php");
			}
			
		}
	}
	else {
		?><script> alert("User dan Password Tidak Ditemukan"); window.history.back();</script><?php
	}
?>