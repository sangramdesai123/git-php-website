<?php
 session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<div class="main-wrapper">
			    <img src="logo.jpg" class="logo">
				<ul>
					<li><a class="an" href="index.php">Home</a></li>
					<li><a class="an" href="contact.php">Contact</a></li>
					<li><a class="an" href="about.php">About</a></li>
					<li><a class="an" href="news.php">News</a></li>
				</ul>

				<div class="nav-login">
					<?php  

						if(isset($_SESSION['u_id']))
						{
							$user=$_SESSION['u_uid'];
						echo '<p class="para">'.$user.'</p>'.'<form action="logout.php" method="POST">
							<button type="submit" name="submit">LogOut!
							</button>
							
							</form>';

						}
						else{
						echo '<form action="my.php" method="POST">
						<input type="text" name="uid" placeholder="UserName">
						<input type="password" name="pwd" placeholder="password">
						<button type="submit" name="submit">
							Log In!
						</button>

						<a class="new" href="signup.php">New User</a>
						</form>';
						}
					?>
				</div>
			</div>
		</nav>
	</header>
</body>
</html>
