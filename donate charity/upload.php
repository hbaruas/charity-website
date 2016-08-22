
<?php
// for connecting to the database
require 'connect.inc.php';
?>

<?php
session_start();
$email_id=$_SESSION['email_id'];
$password=$_SESSION['password'];

if(isset($_POST['name']) && isset($_POST['rating']) && isset($_POST['image']))

{
	$max_size=5000000;
	$size=($_FILES['image']['size']);
	$type=addslashes($_FILES['image']['type']);
	$image=addslashes($_FILES['image']['tmp_name']);
		if ($size<=$max_size ) {
		$image_size=getimagesize($image);
		$extension=$image_size['mime'];
		$extension = strtolower(substr($extension,strrpos($extension,'/') + 1 ));
	}
	if( $size>$max_size || $extension != 'jpg' && $extension != 'jpeg' && $extension != 'png')
	{	
		echo '<div class="success">Image not supported</div>';
	}
	$name = htmlentities($_POST['name']);
	$rating=htmlentities($_POST['rating']);

	//inserting data into database
	
	
		
		//new code
		
		$return1=savedata($name,$rating,$email_id,$password,$connection);
		$query12="Select id from product where email_id='$email_id' and password='$password' order by id desc limit 1";
		$id12=mysqli_query($connection,$query12);
		while($row=mysqli_fetch_array($id12)){
						$id=$row["id"];
						}
		$return2=img($image,$id,$extension);
		if($return1==true && $return2==true){
			$redirect_page = 'uploadsuccess.php';
			header('Location:'.$redirect_page);
		}else{
			echo '<div class="success">Something went wrong.</div>';
		}
	}
	
		//////////////////////
		
		
	


function savedata($name,$rating,$email_id,$password,$connection){
	
	
	$query="insert into product (name,rating,email_id,password) values('$name','$rating','$email_id','$password')";
     $result=mysqli_query($connection,$query);
	if($result)
	{
		return true;
	}
	else{
		return false;
	}
}	
			
function img($image,$id,$extension){

 $image_size=getimagesize($image);
 $image_width  = $image_size[0];

 $image_height = $image_size[1];

 $new_size = 3*($image_width + $image_height)/($image_width*($image_height/45));
  
 $new_width=$image_width*$new_size;
 $new_height=$image_height*$new_size;
 
 $new_image=imagecreatetruecolor($new_width,$new_height);

 
if ($extension=='jpg'||$extension=='jpeg') {
	$old_image=imagecreatefromjpeg($image);
}elseif ($extension='png') {
	$old_image=imagecreatefrompng($image);
}else{
	echo "<b>Image is not supproted</b>";
}
 imagecopyresized($new_image,$old_image,0,0,0,0,$new_width,$new_height,$image_width,$image_height);
 if(imagejpeg($new_image,"upload/$id.png")){return true;}else{return false;}
}	
 ?>

<html>
<head>
<title>upload page</title>
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
			 <li><a href="logout.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>logout</a></li>
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
				<h3 class="hdng">upload your product here</h3>
			
			</div>
		</div>			
</div>

<center>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="text" placeholder="name of your product" name="name" maxlength="45" style="width:70%;height:47px;line-height:47px; text-align:center;" required /><br/>
<br/>



<input type="number" placeholder="rate your product" name="rating"  min="1" max="10" style="width:70%;height:47px;line-height:47px; text-align:center;" required /><br/>
<br/>
<br/>
<input type="file" name="image" required></input>
<br/>

<input type="submit" value="upload" name="image" style="background-color:#FF008C;width:120px;border:none;color:white;height:30px"/><br/><br/>
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