<?php
	$lo="localhost";
	$user="root";
	$pass="";
	$dbname="loginsystem";

	$con=new mysqli($lo,$user,$pass,$dbname);
	
	$id=$_POST['userno'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$uid=$_POST['uid'];
	$pwd=$_POST['password'];
    echo $first;


	$sql="INSERT INTO users (user_id, user_first, user_last,user_email,user_uid,user_pwd)
		VALUES($id,'$first','$last','$email','$uid','$pwd');";
		 echo $last;
		mysqli_query($con,$sql);
		
	header("Location:login.php?signup=success");
	/*
	$sql="SELECT * FROM USERS WHERE user_id=3;";
	$results=mysqli_query($con,$sql);
	$re=mysqli_num_rows($results);
	if($re >0)
	{
		while ($row = mysqli_fetch_assoc($results)) {
			echo $row['user_first']."<br>";
		}
	}*/
?>