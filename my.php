<?php
session_start(); 
#after user click on log in button user get verifed and log in to his account
if(isset($_POST['submit']))
{
	include 'login.php';
	$uid=mysqli_real_escape_string($con,$_POST['uid']);//because user not able add  sql query in log in box
	$pwd=mysqli_real_escape_string($con,$_POST['pwd']);
//error handling
	//check inputs is empty
	if(empty($uid)||empty($pwd)){
			header("Location:index.php?login=empty");
		exit();
	}
	else{
		$sql="SELECT * FROM users WHERE user_uid='$uid';";
		$result=mysqli_query($con,$sql);
		$resultch=mysqli_num_rows($result);
		if($resultch < 1){
			header("Location:index.php?login=error");
			exit();
		}
		else{
			if ($row = mysqli_fetch_assoc($result)) {
				
				//dehashing of password user type
				$hashedPwdCheck = password_verify($pwd , $row['user_pwd']);
				if($hashedPwdCheck == false)
				{
					
					header("Location:index.php?login=errorindehashedpwd");
					exit();
				}elseif($hashedPwdCheck == true){
					//log in the user in website here
					$_SESSION['u_id']=$row['user_id'];
					$_SESSION['u_first']=$row['user_first'];
					$_SESSION['u_last']=$row['user_last'];
					$_SESSION['u_email']=$row['user_email'];
					$_SESSION['u_uid']=$row['user_uid'];
					header("Location:index.php?login=success");
					exit();
				}
			}
		}
	}


}

 ?>