<?php 
	include_once 'header.php'
 ?>
	<section class="main-container">
		<div class="main-wrapper">
			<h2>Contacts</h2>

			<?php 
			 if(isset($_SESSION['u_id']))
			 {
			 	echo "You Are Log In Now";
			 }

			 ?>
		</div>
	</section>

<?php 
	include_once 'footer.php'
 ?>