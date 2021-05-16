<?php
if (isset($_POST['btn btn-primary btn-block'])){
	$user = $_POST['username'];
	$_pass = $_POST['password'];
	if($user=='admin' && $pass=='admin'){
		echo("username and password matched");
	} else{
	echo("error! please enter correct details");
	}
}
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>PowerCore Digital Sing In</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>
<script>
	function passwordFunction() {
		var x = document.getElementById("user_password");
  		if (x.type === "password") {
    	x.type = "text"; //this is basically stating that when the variable x, which is the input field, is of the type "password", on click of button, the input type of x will change to type = text and the characters of this input field will be made available to see. 
  		} else {
    	x.type = "password"; //this is stating that else, after something if the button is not clicked, the variable x remains of type = password and the characters entered into this field will be not-visible. 
	}
}
</script>
</head>
<body>


	<header class="section-header">

		<section class="header-main border-bottom">
			<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-2 col-6">
				<a href="index.html" style="font-size: 20px;">
					<img class="logo"  src="assets/brand/logo/logoblue.png" style= "width: 80px;"> <br> PowerCore Digital
				</a>
			</div>
			<div class="col-lg-6 col-12 col-sm-12">
				<form action="#" class="search">
					<div class="input-group w-100">
						<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-append">
						  <button class="btn btn-primary" type="submit">
							<i class="fa fa-search"></i> Search
						  </button>
						</div>
					</div>
				</form> <!-- search-wrap .end// -->
			</div> <!-- col.// -->
			<div class="col-lg-4 col-sm-6 col-12">
				<div class="widgets-wrap float-lg-right">
					<div class="widget-header  mr-3">
						<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
						<span class="badge badge-pill badge-danger notify">0</span>
					</div>
					<div class="widget-header icontext">
						<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
						<div class="text">
							<span class="text-muted">Welcome!</span>
							<div> 
								<a href="#">Sign in</a> |  
								<a href="#"> Register</a>
							</div>
						</div>
					</div>
				</div> <!-- widgets-wrap.// -->
			</div> <!-- col.// -->
		</div> <!-- row.// -->
			</div> <!-- container.// -->
		</section> <!-- header-main .// -->
		</header> <!-- section-header.// -->
 
		  </header> <!-- section-header.// -->



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height:84vh">

<!-- ============================ COMPONENT LOGIN   ================================= -->
	<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
      <div class="card-body">
      <h2 class="card-title mb-4">Sign in</h2>
      <form>
      	  <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp  Sign in with Facebook</a>
      	  <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp  Sign in with Google</a>
          <div class="form-group">
			 <input name="username" class="form-control" placeholder="Username" type="text">
          </div> <!-- form-group// -->
          <div class="form-group">
			<input name="password" class="form-control" placeholder="Password" type="password" id="user_password">
			<button type="button" class="show-password" onclick="passwordFunction()">
				<i class="far fa-eye-slash"></i>
			</button>
          </div> <!-- form-group// -->
          
          <div class="form-group">
          	<a href="#" class="float-right">Forgot password?</a> 
            <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Remember </div> </label>
          </div> <!-- form-group form-check .// -->
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block"> Login  </button>
          </div> <!-- form-group// -->    
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->

     <p class="text-center mt-4">Don't have account? <a href="#">Register</a></p>
     <br><br>
<!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top bg">
	<div class="container">
		<section class="footer-top  padding-y">
			<div class="row">
				<aside class="col-md col-6">
					<h6 class="title">Brands</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Nvidia</a></li>
						<li> <a href="#">AMD</a></li>
						<li> <a href="#">Asus Rog</a></li>
						<li> <a href="#">MSI</a></li>
						<li> <a href="#">EVGA</a></li>
						<li> <a href="#">GIGABYTE</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Company</h6>
					<ul class="list-unstyled">
						<li> <a href="page-about-us.html">About us</a></li>
						<li> <a href="#">Career</a></li>
						<li> <a href="#">Rules and terms</a></li>
						<li> <a href="sitemap.html">Sitemap</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Help</h6>
					<ul class="list-unstyled">
						<li> <a href="contactus.html">Contact us</a></li>
						<li> <a href="#">Refund Policy</a></li>
						<li> <a href="#">Order status</a></li>
						<li> <a href="#">Shipping Info</a></li>
						<li> <a href="#">Open Dispute</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Account</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> User Login </a></li>
						<li> <a href="#"> User register </a></li>
						<li> <a href="#"> Account Settings </a></li>
						<li> <a href="#"> My Orders </a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Social</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom row">
			<div class="col-md-2">
				<p class="text-muted"> &copy 2021 PowerCore Digital </p>
			</div>
			<div class="col-md-8 text-md-center">
				<span  class="px-2">powercoredigital@gmail.com</span>
				<span  class="px-2">1800 POWER</span>
				<span  class="px-2">Bourke Street 123, Melbourne 3000 VIC</span>
			</div>
			<div class="col-md-2 text-md-right text-muted">
				<i class="fab fa-lg fa-cc-visa"></i>
				<i class="fab fa-lg fa-cc-paypal"></i>
				<i class="fab fa-lg fa-cc-mastercard"></i>
			</div>
		</section>
	</div><!-- //container -->
</footer>


</body>
</html>
