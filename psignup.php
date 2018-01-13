<?php

if(isset($_POST['submit']))
{
	include_once 'login.php';
	$first = mysqli_real_escape_string($con,$_POST['first']);
	$last = mysqli_real_escape_string($con,$_POST['last']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$uid = mysqli_real_escape_string($con,$_POST['uid']);
	$pwd = mysqli_real_escape_string($con,$_POST['pwd']);
	//error handeral
	//cheack empty input
	if(empty($first) ||empty($last)||empty($email)||empty($uid)||empty($pwd))
	{
		header("Location:signup.php?signup=empty");
		exit();
	}
	else{
		//cheak if input char is valid
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location:signup.php?signup=invalid");
			exit();
		}else{
			//email is valid or not
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location:signup.php?signup=invalidEmail");
				exit();
			}
			else{
				$sql="SELECT * FROM users WHERE user_uid='$uid';";
				$result=mysqli_query($con,$sql);
				$resultCheck=mysqli_num_rows($result);
				if($resultCheck>0)
				{
					header("Location:signup.php?signup=userNameExist");
					exit();
				}else{
					//hashing password
					$hashedpwd=password_hash($pwd,PASSWORD_DEFAULT);
					//INSERT USER INTO DATABASE
					$sql="INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd) VALUES('$first','$last','$email','$uid','$hashedpwd');";
					mysqli_query($con,$sql);
					header("Location:signup.php?signup=Success");
					exit();
				}

			}
		}
	}

}

?>