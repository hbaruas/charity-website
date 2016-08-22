<head>
	

	<style type="text/css">
		.success{
			font-size:2em;
			color:green;
			opacity:.8;
			text-align:center;
		}
	</style>
		
</head>
<?php
	header("Refresh:3;url=profile.php");
	if(isset($_SERVER['HTTP_REFERER'])){
echo '<center><span class="success">Thanks for helping someone</span></center>.<br><center><b>Redirecting to Home page...</b></center>';}
?>
