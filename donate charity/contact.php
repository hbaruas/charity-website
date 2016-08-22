

<?php

session_start();



?>
<html>
<head>
<title>contact us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery ka plugin-->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<style type="text/css">
.mess{font-size:2em;font-family:arial;color:#696969;}</style>
</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		 <div class="header-top">
			 <div class="logo">
				 <a href="index.php"><h1> Donate<span>Humanity</span></h1></a>
			 </div>
		
			 <div class="clearfix"> </div> 
			 <!-- search-scripts -->
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
			 <li><a href="profile.php"><span class="	glyphicon glyphicon-leaf" aria-hidden="true"></span>profile</a></li>
			 <li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>login</a></li>
			 <li><a href="signup.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>signup</a></li>
			 <li class="active"><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>
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
				<h3 class="hdng">contact us</h3>
			
			</div>
		</div>			
</div>

<center>
<form action="contactmail.php" method="POST">
<input type="text" placeholder="your name" name="name" maxlength="45" style="width:70%;height:47px;line-height:47px; text-align:center;" required /><br/>
<br/>
<input type="text" placeholder="email id" maxlength="45" name="email" style="width:70%;height:47px;line-height:47px; text-align:center;" required /><br/>
<br/>
<textarea placeholder="enter your message" name="message" style="width:70%;height:120px;line-height:47px;text-align:center;" required /></textarea>
<br/><br/>
<input type="submit" value="send" style="background-color:#FF008C;width:120px;border:none;color:white;height:30px"/><br/><br/>

<br/>
<br/><br/>
<br/>
<br/>
<br/>
</form>
</center>
<!---->
<div class="copywrite">
	 <div class="container">
			 <p> © 2016 Donate Humanity. All rights reserved</p>
	 </div>
</div>
<!---->
</body>
</html>