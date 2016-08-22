<?php

require 'connect.inc.php';
session_start();
?>







<head>
<title>profile</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery ka plugin -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<style type="text/css">
.review{font-family:arial;font-size:2em;color:#696969;}
.review:hover{text-decoration:none;}
.name{font-family:arial;font-size:1.5em;color:#696969;}
</style>
</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-top">
			 <div class="logo">
				 <a href="index.php"><h1>Donate <span>charity</span></h1></a>
			 </div>
			
			 <div class="clearfix"> </div>
			
		 </div>
		 <div class="top-menu">
			 <span class="menu">MENU</span>
			 <ul>
			 <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			 <li><a href="profile.php"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>profile</a></li>
			 <li class=""><a href="logout.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>logout</a></li>
			 <li><a href="upload.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>upload</a></li>
			 <li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
			 </ul>
		 </div>
		 <!-- script-for-menu -->
		 <script>					
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle("slow" , function(){
						});
					});
		 </script>
		 <!-- script-for-menu -->
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="contact">
		<div class="container">		
			
			
		</div>
		<div class="contact-form">
			<div class="container">		
				<h3 class="hdng">profile</h3>
			
			</div>
		</div>			
</div>
<!------>



<?php



if(isset($_SESSION['email_id']) &&isset($_SESSION['password']))
{

	$email_id=$_SESSION['email_id'];
$password=$_SESSION['password'];
	$sql="select id,first_name,last_name,cont_no,email_id,address,pin from userdata where password='$password' AND email_id ='$email_id'";
					$query =mysqli_query($connection,$sql);
					while($row=mysqli_fetch_array($query)){
						$first_name=$row["first_name"];
						$last_name=$row['last_name'];
						$cont_no=$row['cont_no'];
						$email_id=$row['email_id'];
						$address=$row['address'];
						$pin=$row['pin'];
						
					echo '<center><div class="name">'.' '.$first_name.' '.$last_name.'</div></center>'.'<br/>';
					echo '<center><div class="name">'.' phone no'.' '.$cont_no.'</div></center>'.'<br/>';
					echo '<center><div class="name">'.'email id'.' '.$email_id.'</div></center>'.'<br/>';
					echo '<center><div class="name">'.'you are from'.' '.$address.'</div></center>'.'<br/>';
					echo '<center><div class="name">'.'pin code'.' '.$pin.'</div></center>'.'<br/>';
}
}

else
{

header("location:login.php");
}


?>
<?php
echo '<center><a href="reviewupload.php"  class="review" >Review all the uploaded products</a></center>';
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<!---->
<div class="copywrite">
	 <div class="container">
			 <p> © 2016 Donate Humanity. All rights reserved</p>
	 </div>
</div>
<!---->
</body>
</html>