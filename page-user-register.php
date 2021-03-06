<!DOCTYPE html>
<html>
<head>
	<title>PowerCore Digital</title>

	<link href="/AmusedFrogs/assets/brand/favicon.ico" rel="shortcut icon" type="image/x-icon">
	
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
</head>

<body>
<header class="section-header">

<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-2 col-6">
		<a href="index.php" style="font-size: 20px;">
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
			<div class="widget-header2  mr-3">
				<a href="page-user-login.php" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
				<span class="badge badge-pill badge-danger notify">0</span>
			</div>
			<div class="widget-header3 icontext">
				<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
			</div>
			<div class="text-index4">
				<span class="text-muted">Welcome!</span>
					<div class="php"> 
						<pre class="top-right-style"><a class="profile-index" href="#">Login</a> | <a class="profile-index" href="page-user-register.php">Register</a></pre>
					</div>
			</div>
		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">

<!-- ============================ COMPONENT REGISTER   ================================= -->
	<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
      <article class="card-body">
		<header class="mb-4"><h2 class="card-title">Registration</h2></header>
		<form method="POST" action="#">
				<div class="form-row">
					<div class="col form-group">
						<label>First name</label>
					  	<input type="text" name="firstname" class="form-control" placeholder="">
					</div> <!-- form-group end.// -->
					<div class="col form-group">
						<label>Last name</label>
					  	<input type="text" name="lastname" class="form-control" placeholder="">
					</div> <!-- form-group end.// -->
				</div> <!-- form-row end.// -->
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="">
					<small class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div> <!-- form-group end.// -->
				<div class="form-row">
					<div class="form-group col-md-6">
					  <label>City</label>
					  <input type="text" name="city" class="form-control">
					</div> <!-- form-group end.// -->
					<div class="form-group col-md-6">
						<label>Username</label>
					    <input class="form-control" name="username" type="text">
					</div> <!-- form-group end.// -->
				</div> <!-- form-row.// -->
				<div class="form-row">
					<div class="form-group col-md-6">
					    <label>Create password</label>
					    <input class="form-control" name="password" type="password" id="user_password">
					    <button type="button" class="show-password" onclick="passwordFunction()">
				                <i class="far fa-eye-slash" id="fa-eye-slash1"></i>
					    </button>
					</div> <!-- form-group end.// --> 
					<div class="form-group col-md-6">
					    <label>Repeat password</label>
					    <input class="form-control" type="password" id="user_password1">
					    <button type="button" class="show-password" onclick="passwordFunction1()">
				                <i class="far fa-eye-slash" id="fa-eye-slash2"></i>
					    </button>
					</div> <!-- form-group end.// -->  
				</div>
				<br>
				<div class="form-group"> 
					<p>I Agree With <a href="#">Terms & Conditions:</a><input class="check" type="checkbox">
				</div>	
				<div class="form-group">
			        <a href="page-user-login.php" class="registration-button textcenter">Register</a>
			    </div> <!-- form-group// -->      
			</form>
		</article><!-- card-body.// -->
    </div> <!-- card .// -->
    <p class="text-center mt-4">Have an account? <a href="page-user-login.php">Log In</a></p>
    <br>
<!-- ============================ COMPONENT REGISTER  END.// ================================= -->


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
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Career</a></li>
						<li> <a href="#">Rules and terms</a></li>
						<li> <a href="#">Sitemap</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Help</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Contact us</a></li>
						<li> <a href="#">Refunds</a></li>
						<li> <a href="#">Order status</a></li>
						<li> <a href="#">Shipping info</a></li>
						<li> <a href="#">Open dispute</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Account</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> User Login </a></li>
						<li> <a href="#"> User register </a></li>
						<li> <a href="#"> Account Setting </a></li>
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
<!-- ========================= FOOTER END // ========================= -->
</body>
</html>
