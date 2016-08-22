<?php

session_start();



?>
<html>
<head>
<title>about donate charity</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
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
				 <a href="index.php"><h1>Donate <span>Humanity</span></h1></a>
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
			 <li class="active"><a href="about.html"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>About</a></li>
			 <li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>login</a></li>
			 <li><a href="signup.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>signup</a></li>
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
<div class="about">
	 <div class="container">
		 <h2>About</h2>
		 <div class="about-grids">
			 <div class="col-md-6 about-info">
				 <h3>A Few Words About Us</h3>
				 <h5>we are someone who
				 lives in the heart of humanity ,we connect those who need help and those who want to help,we believe that still some person like you will be always helpful for us.  </h5>
				 <p>Sometimes you want to help but you can't because you have no appropriate person in your sight, we are the one who meet you the person who really need your help,who really deserve this</p>
			 </div>
			 <div class="col-md-6 abt-pic">
				 <img src="images/pic.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>			 
		 </div>
	
				 <div class="clearfix"></div> 
			 </div>
	     </div>
	 </div>
</div>

<div class="copywrite">
	 <div class="container">
			 <p> © 2016 Donate humanity. All rights reserved </p>
	 </div>
</div>
<!---->
</body>
</html>