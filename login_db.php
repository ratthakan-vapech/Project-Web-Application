<?php
	session_start();
    include('server.php');
    
	$error = array();

	if (isset($_POST['login_user'])){
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		if (empty($username)){
			array_push($error,"username is required");
		}

		if (empty($password)){
			array_push($error,"password is required");
		}

		if(count($errors) == 0){
			$password = md5($password);
			$query = "SELECT *  FROM user WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($conn,$query);

			if (mysqli_num_rows($result) == 1){
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Your are now logged in ";
				header("location: index.php");
			} else{
				array_push($error,"Wrog username/password combination");
				$_SESSION['error'] = "บัญชีผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
				header("location: login.php");
			}

		}
	}
?>