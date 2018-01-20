
<?php 
	include_once 'header.php'
 ?>
	<section class="main-container">
		<div class="main-wrapper">
			<h2>Home</h2>
			<?php 
				if($_GET['login']=="empty")
				{
				 echo "".'<script type="text/javascript">alert("wrong user or password");</script> ' ;
				}
			 ?>
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