<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<?php
     include 'server.html';
?>
<html>
<head>
<title>Genial Subscribe Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Genial Subscribe Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/styles.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css -->
<!-- js -->

<!-- /js -->
</head>
<body>
<h1 class="header-agileits w3layouts w3 w3l w3ls">Subscribe Form</h1>
<div class="content-w3ls agileits agileinfo wthree w3-agileits">
	<img src="images/email.png" alt="email" title="subscribe">
	<h3 class="agileits-w3layouts agile w3-agile">Subscribe</h3>
	<p class="agileits-w3layouts agile w3-agile">Subscribe To Our Site & Stay Updated.</p>
	<div class="subscribe-w3ls">
		<form action="subscribe.html" method="post">
			<div class="form-group1 w3layouts w3 w3l w3ls">
				<input type="text" id="email" name="email" placeholder="Enter Your Email Address"  required>
			</div>
			<div class="form-group2 agileits agileinfo wthree w3-agileits">
				<button name="subscribe" type="submit" class="btn btn-outline btn-lg"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
			<div class="clear"></div>
		</form>
		<?php
    if(isset($_POST['subscribe'])){
	  
  	$email = $_POST['email'];
	
	  	
	  		$query = "select * from subscriber WHERE email = '$email' ";
			$query_run = mysqli_query($con,$query);
			
			    if(mysqli_num_rows($query_run)>0){     
					 
					 echo '<script type = "text/javascript"> alert("Email is already exists try another") </script>' ;					 
				}
				
			    else{ 
		            $query = "INSERT INTO subscriber(email) VALUES('$email')"; 
				    $query_run = mysqli_query($con,$query);  
				     header('location: courses.html');
					
			}
	  	
    }

 ?>
	</div>	
</div>
<p class="copyright w3layouts w3 w3l w3ls agileinfo wthree w3-agileits">© 2017 Genial Subscribe Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
</body>
</html>