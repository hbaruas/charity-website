
<?php
// for connecting to the database
require 'connect.inc.php';
?>

<?php

session_start();



?>
<?php
// check that data is correct or not

if(isset($_POST['fname'])&& isset($_POST['lname']) && isset($_POST['cno']) && isset($_POST['email_id']) && isset($_POST['address']) && isset($_POST['pin_code']) && isset($_POST['pass'])&& !empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['cno']) && !empty($_POST['email_id'])&& !empty($_POST['address'])&& !empty($_POST['pin_code'])&& !empty($_POST['pass']))
	

{
	$email_id=htmlentities($_POST['email_id']);
	$fname = htmlentities($_POST['fname']);
	$lname=htmlentities($_POST['lname']);
	$cno=htmlentities($_POST['cno']);
	
	$address=htmlentities($_POST['address']);
	$pin_code=htmlentities($_POST['pin_code']);
	$pass=htmlentities($_POST['pass']);
	$password_hash=(md5($pass));
	$time=time();
//--------------------
if (filter_var($email_id,FILTER_VALIDATE_EMAIL)===false) {
			echo "<div class=\"success\">Please enter a valid Email.</div>";
}else{
//--------------------
	//inserting data into database
	
	$query="insert into userdata (first_name,last_name,cont_no,email_id,address,pin,password,time) values('$fname','$lname','$cno','$email_id','$address','$pin_code','$password_hash','$time')";
	$result=mysqli_query(
$connection,$query);

	//-----------------
	
	
	
	
	
	
	
// redirecting the page to confirmation.php
	if($result)
	{
		$redirect_page = 'confirmation.php';
		$redirect = true;
		if($redirect == true){
			header('Location:'.$redirect_page);
			
		}
		else{
			echo 'Something went wrong.';
		}

	
	//-------------------------------//
	}	
}
}
 
?>

<html>
<head>
<title>sign up page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery ka plugin -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/lightbox.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-top">
			 <div class="logo">
				 <a href="index.php"><h1>Donate <span>humanity</span></h1></a>
			 </div>
			
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
			<!-- //search-scripts -->
		 </div>
		 <div class="top-menu">
			 <span class="menu">MENU</span>
			 <ul>
			 <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			 <li><a href="profile.php"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>profile</a></li>
			 <li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>login</a></li>
			 <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>signup</a></li>
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
				<h3 class="hdng">sign up</h3>
			
			</div>
		</div>			
</div>

<center>
<form action="signup.php" method="POST">
<input type="text" placeholder="first name" name="fname" maxlength="45" style="width:70%;height:47px;line-height:47px; text-align:center;" required /><br/>
<br/>
<input type="text" placeholder="last name" name="lname" maxlength="45" style="width:70%;height:47px;line-height:47px; text-align:center;" required /><br/>
<br/>
<input type="number" placeholder="contact number" name="cno" maxlength="45" style="width:70%;height:47px;line-height:47px; text-align:center;" required /><br/>
<br/>

<input type="text" placeholder="email id" maxlength="45" name="email_id" style="width:70%;height:47px;line-height:47px; text-align:center;" required /><br/>
<br/>
<input type="text" placeholder="your address" maxlength="45" name="address" style="width:70%;height:47px;line-height:47px; text-align:center;" required /><br/><br/>
<input type="number" placeholder=" pin code" maxlength="45" name="pin_code" style="width:70%;height:47px;line-height:47px; text-align:center;" required /><br/>
<br/>
<input type="password" placeholder="password" name="pass" maxlength="20" style="width:70%;height:47px;line-height:47px;text-align:center;" required /><br/><br/>

<input type="submit" value="signup" style="background-color:#FF008C;width:120px;border:none;color:white;height:30px"/><br/><br/>
<br/>
<br/>
<br/>
<br/>
<br/>

</form>
</center>

<!---->
<div class="copywrite">
	 <div class="container">
			 <p> © 2015 Charity. All rights reserved </p>
	 </div>
</div>
<!---->
</body>
</html>