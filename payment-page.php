<?php 
	
	session_start(); 
	if (!isset($_SESSION['Logged_in']) || $_SESSION['Logged_in'] = false) {
		header("Location: page-user-login.php");
		exit();
	}

?>
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
			<div class="widget-header  mr-3">
				<a href="page-user-login.php" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
				<span class="badge badge-pill badge-danger notify">0</span>
			</div>
			<div class="widget-header icontext">
				<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
			</div>
				<div class="text-index">
				<span class="text-muted">Welcome, inte!</span>
					<div class="php"> 
						<a class="profile-index" href="#">Profile</a> |
						<form method="POST" action="logout.php">
							<button class="logout-button">Logout</button>
						</form>
					</div>
				</div>
		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->

<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
	<div class="container">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
  
	  <div class="collapse navbar-collapse" id="main_nav">
		<ul class="navbar-nav">
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="index.php" style="font-size: 20px;">Home</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="product-listings-page1.php"style="font-size: 20px;">Shop</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="page-about-us.php"style="font-size: 20px;">About Us</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="contactus.php"style="font-size: 20px;">Contact Us</a>
		  </li>
		</ul>
	  </div> <!-- collapse .// -->
	</div> <!-- container .// -->
  </nav>
  
  </header> <!-- section-header.// -->

              <section class="section-pagetop bg-primary">
                <div class="container">
                    <h2 class="title-page text-white">Checkout</h2>
                
                </div> <!-- container //  -->
                </section>
<div class="card-payment-page">
        <div class="card-body-payment">
        <h3 class="card-title mb-4">Your Details</h3>
        <form role="form">
    <div class="form-group">
    <label for="username">Name on card</label>
    <input type="text" class="form-control" name="username" placeholder="Eg. John Smith" required="">
    </div> <!-- form-group.// -->

    <div class="form-group">
    <label for="cardNumber">Card number</label>
    <div class="input-group">
    <input type="text" class="form-control1" name="cardNumber" placeholder="">
    <div class="input-group-append1">
        <span class="input-group-text1">
            <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp; 
            <i class="fab fa-cc-mastercard"></i> 
        </span>
    </div>
    </div> <!-- input-group.// -->
    </div> <!-- form-group.// -->
    <br><br>
    <div class="row">
    <div class="col-md flex-grow-0">
        <div class="form-group">
            <label><span class="hidden-xs">Expiration</span> </label>
            <div class="form-inline" style="min-width: 220px">
                <input class="form-control" type="text" id="inputExpDate" placeholder="MM / YY" maxlength='7'>
                <select style="display:none;" id="monthSelect" name="dwfrm_billing_paymentMethods_creditCard_expiration_month" ><option class="select-option" label="Month" value="" selected="selected">Month</option><option class="select-option" label="01" value="1">01</option><option class="select-option" label="02" value="2">02</option><option class="select-option" label="03" value="3">03</option><option class="select-option" label="04" value="4">04</option><option class="select-option" label="05" value="5">05</option><option class="select-option" label="06" value="6">06</option><option class="select-option" label="07" value="7">07</option><option class="select-option" label="08" value="8">08</option><option class="select-option" label="09" value="9">09</option><option class="select-option" label="10" value="10">10</option><option class="select-option" label="11" value="11">11</option><option class="select-option" label="12" value="12">12</option></select>
                
                <select style="display:none;" class="input-select year required valid" id="yearSelect" name="dwfrm_billing_paymentMethods_creditCard_expiration_year" aria-required="true" aria-describedby="dwfrm_billing_paymentMethods_creditCard_expiration_year-error" aria-invalid="false"><option class="select-option" label="Year" value="" selected="selected">Year</option><option class="select-option" label="2017" value="2017">2017</option><option class="select-option" label="2018" value="2018">2018</option><option class="select-option" label="2019" value="2019">2019</option><option class="select-option" label="2020" value="2020">2020</option><option class="select-option" label="2021" value="2021">2021</option><option class="select-option" label="2022" value="2022">2022</option><option class="select-option" label="2023" value="2023">2023</option><option class="select-option" label="2024" value="2024">2024</option><option class="select-option" label="2025" value="2025">2025</option><option class="select-option" label="2026" value="2026">2026</option><option class="select-option" label="2027" value="2027">2027</option></select>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
            <input class="form-control" required="" type="password" maxlength="3">
        </div> <!-- form-group.// -->
    </div>
    </div> <!-- row.// -->
    <form>
    <br>
      <div class="form-group">
        <h4>Delivery Information</h4>
        <br>
          <label class="custom-control custom-radio custom-control-inline">
              <input class="custom-control-input" checked="" type="radio" name="delivery" value="Standard">
              <span class="custom-control-label"> Standart Delivery <br>Free </span>
          </label>
          <label class="custom-control custom-radio custom-control-inline">
              <input class="custom-control-input" type="radio" name="delivery" value="Express">
              <span class="custom-control-label"> Express Delivery <br> $35 </span>
          </label>
      </div> <!-- form-group end.// -->
  
      <div class="form-row">
          <div class="col form-group">
              <label>Confirm Email</label>
                  <input type="email" class="form-control" placeholder="">
          </div> <!-- form-group end.// -->
          <div class="col form-group">
              <label>Confirm Phone Number</label>
                  <input type="text" class="form-control" placeholder="">
          </div> <!-- form-group end.// -->
      </div> <!-- form-row end.// -->
  
      <div class="form-row">
          <div class="form-group col-md-6">
              <label>Country</label>
              <select id="inputState" class="form-control">
              <option> Choose...</option>
                  <option selected="">Australia</option>
                  <option>USA</option>
                  <option>New Zealand</option>
              </select>
          </div> <!-- form-group end.// -->
          <div class="form-group col-md-6">
              <label>City</label>
              <input type="text" class="form-control">
          </div> <!-- form-group end.// -->
      </div> <!-- form-row.// -->
      <div class="form-group">
          <label>Address</label>
          <textarea class="form-control" rows="2" style="resize: none;"></textarea>
      </div> <!-- form-group// -->  
      <br>                       
      </form>
    </form>


  
<div class="card-body-overview">
<br><h3 class="Order-Summary" style="text-align: center;">Order Summary</h3><br>

<table class="table table-borderless table-shopping-cart">
<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col" width="120">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
<tr>
	<td class="test">
		<figure class="itemside">
			<div class="aside"><img src="assets\images\Geforce1080Ti.jpg" class="img-sm"></div>
			<figcaption class="info">
				<p class="title text-dark">ASUS ROG Strix GTX 1080 Ti (11 GB)</p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<select class="form-control">
			<option>1</option>
			<option>2</option>	
			<option>3</option>		
		</select> 
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">$1156.00</var> 
			<small class="text-muted"> Delivery: $0.99 </small> 
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right-table"> 
	<a data-original-title="Save to Wishlist" title="" href="" class="payment-page-button1" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
	<a href="" class="payment-page-button"> Remove</a>
	</td>
</tr>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="assets\images\GeForce_GTX_1080Ti_3qtr_Front_Left.png" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Nvidia GeForce?? GTX 1080 Ti</a>
			</figcaption>
		</figure>
	</td>
	<td> 
		<select class="form-control">
			<option>1</option>
			<option>2</option>	
			<option>3</option>		
		</select> 
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">$149.97</var> 
			<small  class="text-muted"> Delivery: $0.99 </small>  
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
	<a data-original-title="Save to Wishlist" title="" href="" class="payment-page-button1" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
	<a href="" class="payment-page-button"> Remove</a>
	</td>
</tr>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="assets\images\rtx2070.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Nvidia GeForce?? RTX 2070 - Founder???s Edition (8 GB GDDR6)</a>
			</figcaption>
		</figure>
	</td>
	<td> 
		<select class="form-control">
			<option>1</option>
			<option>2</option>	
			<option>3</option>	
		</select> 
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">$98.00</var> 
			<small class="text-muted"> Delivery: $0.99</small> 
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
		<a data-original-title="Save to Wishlist" title="" href="" class="payment-page-button1" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
		<a href="" class="payment-page-button"> Remove</a>
	</td>
</tr>
</tbody>
</table>
<p class="pre-payment-page">Total Due:   $2,729.27</p>
<br>
<div class="card-body-purchase">
  <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery for your first order within 1-2 weeks</p>
</div>
</div> <!-- card.// -->
        </div> <!-- card-body.// -->
    </div> <!-- card .// -->
</main> <!-- col.// -->
        <p class="position-absolute-payment-page">I Agree With <a href="#">Terms & Conditions of Purchase: </a><input class="payment-page-checkbox" type="checkbox"></p>
        <a href="#" class="make-purchase-button"> Make Purchase </a>
		    <a href="#" class="continue-shopping-button"> &laquo Continue Shopping</a>
    
    </div> <!-- card-body.// -->
    </div> <!-- card.// -->
    </aside> <!-- col.// -->
    </div> <!-- row.// -->
    <div class="card-delivery">
        <div class="card-body-delivery">
        
        </div> <!-- card-body.// -->
</div> <!-- card .// -->
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
                            <li> <a href="page-about-us.php">About us</a></li>
                            <li> <a href="#">Career</a></li>
                            <li> <a href="#">Rules and terms</a></li>
                            <li> <a href="sitemap.php">Sitemap</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Help</h6>
                        <ul class="list-unstyled">
                            <li> <a href="contactus.php">Contact us</a></li>
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
    <script>
        var app;

(function() {
  'use strict';
  
  app = {
    monthAndSlashRegex: /^\d\d \/ $/, // regex to match "MM / "
    monthRegex: /^\d\d$/, // regex to match "MM"
    
    el_cardNumber: '.ccFormatMonitor',
    el_expDate: '#inputExpDate',
    el_cvv: '.cvv',
    el_ccUnknown: 'cc_type_unknown',
    el_ccTypePrefix: 'cc_type_',
    el_monthSelect: '#monthSelect',
    el_yearSelect: '#yearSelect',
    
    cardTypes: {
      'American Express': {
        name: 'American Express',
        code: 'ax',
        security: 4,
        pattern: /^3[47]/,
        valid_length: [15],
        formats: {
          length: 15,
          format: 'xxxx xxxxxxx xxxx'
        }
      },
      'Visa': {
				name: 'Visa',
				code: 'vs',
        security: 3,
				pattern: /^4/,
				valid_length: [16],
				formats: {
						length: 16,
						format: 'xxxx xxxx xxxx xxxx'
					}
			},
      'Maestro': {
				name: 'Maestro',
				code: 'ma',
        security: 3,
				pattern: /^(50(18|20|38)|5612|5893|63(04|90)|67(59|6[1-3])|0604)/,
				valid_length: [16],
				formats: {
						length: 16,
						format: 'xxxx xxxx xxxx xxxx'
					}
			},
      'Mastercard': {
				name: 'Mastercard',
				code: 'mc',
        security: 3,
				pattern: /^5[1-5]/,
				valid_length: [16],
				formats: {
						length: 16,
						format: 'xxxx xxxx xxxx xxxx'
					}
			} 
    }
  };
  
  app.addListeners = function() {
      $(app.el_expDate).on('keydown', function(e) {
        app.removeSlash(e);
      });

      $(app.el_expDate).on('keyup', function(e) {
        app.addSlash(e);
      });

      $(app.el_expDate).on('blur', function(e) {
        app.populateDate(e);
      });

      $(app.el_cvv +', '+ app.el_expDate).on('keypress', function(e) {
        return e.charCode >= 48 && e.charCode <= 57;
      });  
  };
  
  app.addSlash = function (e) {
    var isMonthEntered = app.monthRegex.exec(e.target.value);
    if (e.key >= 0 && e.key <= 9 && isMonthEntered) {
      e.target.value = e.target.value + " / ";
    }
  };
  
  app.removeSlash = function(e) {
    var isMonthAndSlashEntered = app.monthAndSlashRegex.exec(e.target.value);
    if (isMonthAndSlashEntered && e.key === 'Backspace') {
      e.target.value = e.target.value.slice(0, -3);
    }
  };
  
  app.populateDate = function(e) {
    var month, year;
    
    if (e.target.value.length == 7) {
      month = parseInt(e.target.value.slice(0, -5));
      year = "20" + e.target.value.slice(5);
      
      if (app.checkMonth(month)) {
        $(app.el_monthSelect).val(month);
      } else {
        $(app.el_monthSelect).val(0);
      }
      
      if (app.checkYear(year)) {
        $(app.el_yearSelect).val(year);
      } else {
        $(app.el_yearSelect).val(0);
      }
      
    }
  };
  
  app.checkMonth = function(month) {
    if (month <= 12) {
      var monthSelectOptions = app.getSelectOptions($(app.el_monthSelect));
      month = month.toString();
      if (monthSelectOptions.includes(month)) {
        return true; 
      }
    }
  };
  
  app.checkYear = function(year) {
    var yearSelectOptions = app.getSelectOptions($(app.el_yearSelect));
    if (yearSelectOptions.includes(year)) {
      return true; 
    }
  };
          
  app.getSelectOptions = function(select) {
    var options = select.find('option');
    var optionValues = [];
    for (var i = 0; i < options.length; i++) {
      optionValues[i] = options[i].value;
    }
    return optionValues;
  };
  
  app.setMaxLength = function ($elem, length) {
    if($elem.length && app.isInteger(length)) {
      $elem.attr('maxlength', length);
    }else if($elem.length){
      $elem.attr('maxlength', '');
    }
  };
  
  app.isInteger = function(x) {
    return (typeof x === 'number') && (x % 1 === 0);
  };

  app.createExpDateField = function() {
    $(app.el_monthSelect +', '+ app.el_yearSelect).hide();
    $(app.el_monthSelect).parent().prepend('<input type="text" class="ccFormatMonitor">');
  };
  
  
  app.isValidLength = function(cc_num, card_type) {
    for(var i in card_type.valid_length) {
      if (cc_num.length <= card_type.valid_length[i]) {
        return true;
      }
    }
    return false;
  };

  app.getCardType = function(cc_num) {
    for(var i in app.cardTypes) {
      var card_type = app.cardTypes[i];
      if (cc_num.match(card_type.pattern) && app.isValidLength(cc_num, card_type)) {
        return card_type;
      }
    }
  };

  app.getCardFormatString = function(cc_num, card_type) {
    for(var i in card_type.formats) {
      var format = card_type.formats[i];
      if (cc_num.length <= format.length) {
        return format;
      }
    }
  };

  app.formatCardNumber = function(cc_num, card_type) {
    var numAppendedChars = 0;
    var formattedNumber = '';
    var cardFormatIndex = '';

    if (!card_type) {
      return cc_num;
    }

    var cardFormatString = app.getCardFormatString(cc_num, card_type);
    for(var i = 0; i < cc_num.length; i++) {
      cardFormatIndex = i + numAppendedChars;
      if (!cardFormatString || cardFormatIndex >= cardFormatString.length) {
        return cc_num;
      }

      if (cardFormatString.charAt(cardFormatIndex) !== 'x') {
        numAppendedChars++;
        formattedNumber += cardFormatString.charAt(cardFormatIndex) + cc_num.charAt(i);
      } else {
        formattedNumber += cc_num.charAt(i);
      }
    }

    return formattedNumber;
  };

  app.monitorCcFormat = function($elem) {
    var cc_num = $elem.val().replace(/\D/g,'');
    var card_type = app.getCardType(cc_num);
    $elem.val(app.formatCardNumber(cc_num, card_type));
    app.addCardClassIdentifier($elem, card_type);
  };

  app.addCardClassIdentifier = function($elem, card_type) {
    var classIdentifier = app.el_ccUnknown;
    if (card_type) {
      classIdentifier = app.el_ccTypePrefix + card_type.code;
      app.setMaxLength($(app.el_cvv), card_type.security);
    } else {
      app.setMaxLength($(app.el_cvv));
    }

    if (!$elem.hasClass(classIdentifier)) {
      var classes = '';
      for(var i in app.cardTypes) {
        classes += app.el_ccTypePrefix + app.cardTypes[i].code + ' ';
      }
      $elem.removeClass(classes + app.el_ccUnknown);
      $elem.addClass(classIdentifier);
    }
  };

  
  app.init = function() {

    $(document).find(app.el_cardNumber).each(function() {
      var $elem = $(this);
      if ($elem.is('input')) {
        $elem.on('input', function() {
          app.monitorCcFormat($elem);
        });
      }
    });
    
    app.addListeners();
    
  }();
  
})();
    </script>
    </body>
</html>