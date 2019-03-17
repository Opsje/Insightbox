<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>InsightBox | MONTHLY BOOK BOX SUBSCRIPTION COMPANY</title>
    <meta name="description" content="Free book">
    <meta name="author" content="Moritz Junker">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" src="registerdataform.php ">
</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header2">

        <div class="header-logo">
            <a class="" href="index.php">
                <img src="images/logophotoblack.png" class="site-logo" alt="Homepage">
            </a>
        </div>

        

        <a class="header-menu-toggle2" onclick="document.getElementById('id01').style.display='block'">
            <span class="btn3">Log in</span>
        </a>
        <div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php">
      
      
    <h5 class="finishedsteps4">Log In</h5>

    <div class="container2">
      <input type="text" class="usernameclass" placeholder="Enter Email" name="uname" required>
      <input type="password" class="passwordclass" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" class="loginbuttonclass">Login</button>
      

      <span class="psw">Forgot <a href="#">password?</a></span>

    
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>
        
        <div class="hrt"></div>


    </header>
    
    
    <!-- home
    ================================================== -->
    <section id="register" class="s-home2 target-section">

        
<form id="msform" width="100%">
<form method="post" name="contact_form" action="">
	
	
	<!-- progressbar -->
	<!-- fieldsets -->
    
    
	<fieldset class="fieldsetcontrol6">
		<h5 class="finishedsteps">Step 1 of 6</h5>
        <h1 class="headerforplan3">Get started</h1>
        <h6 class="explanationtext"> 
                You can choose how many books you want to get send to you every month.</h6>
		<input type="button" name="next" class="next btn44 btn5596" value="Choose Options " />

        
	</fieldset>
    
    <fieldset class="fieldsetcontrol">
        <h5 class="finishedsteps">Step 2 of 6</h5>
        <h1 class="headerforplan3">Choose your Plan</h1>
        
        
        
		<div class="snip1214">
		  <div class="plan">
			<h3 class="plan-title">
			  Starter
			</h3>
			<div class="plan-cost"><span class="plan-price">$14.99</span><span class="plan-type">/ Monthly</span></div>
			<ul class="plan-features">
			  <li><i class="ion-checkmark"> </i>No free book </li>
			  <li><i class="ion-checkmark"> </i>1 Self help Book/month</li>
			  <li><i class="ion-checkmark"> </i>1 Book summaries</li>
			  <li><i class="ion-checkmark"> </i>24/7 Email support</li>
			  <li><i class="ion-checkmark"> </i></li>
			</ul>
			<!--<input type="radio" id="planselect1" value="0" name="quantitybook">-->
			<label for="planselect1" class="choosemelabel">Choose Plan</label>
		  </div>

		  <div class="plan">
			<h3 class="plan-title">
			  Basic
			</h3>
			<div class="plan-cost"><span class="plan-price">$29.99</span><span class="plan-type">/ Monthly</span></div>
			<ul class="plan-features">
			   <li><i class="ion-checkmark"> </i>One Free book </li>
			  <li><i class="ion-checkmark"> </i>2 Self help Books/month</li>
			  <li><i class="ion-checkmark"> </i>2 Book summaries</li>
			  <li><i class="ion-checkmark"> </i>24/7 Email support</li>
			  <li><i class="ion-checkmark"> </i></li>
			</ul>
			 <!--<input type="radio" id="planselect2" value="2" name="quantitybook" >-->
			<label for="planselect2" class="choosemelabel">Choose Plan</label>
		  </div>

		  <div class="plan featured">
			<h3 class="plan-title">
			  Pro
			</h3>
			<div class="plan-cost"><span class="plan-price">$39.99</span><span class="plan-type">/ Monthly</span></div>
			<ul class="plan-features">
			   <li><i class="ion-checkmark"> </i>One Free book </li>
			  <li><i class="ion-checkmark"> </i>3 Self help Books/month</li>
			  <li><i class="ion-checkmark"> </i>3 Book summaries</li>
			  <li><i class="ion-checkmark"> </i>24/7 Email support</li>
			  <li><i class="ion-checkmark"> </i></li>
			</ul>
			<!-- <input type="radio" id="planselect3" value="1" name="quantitybook"  checked> -->
			<label for="planselect3" class="choosemelabel">Choose Plan</label>
		  </div>

		  <div class="plan">
			<h3 class="plan-title">
			  Advanced
			</h3>
			<div class="plan-cost"><span class="plan-price">$49.99</span><span class="plan-type">/ Monthly</span></div>
			<ul class="plan-features">
			  <li><i class="ion-checkmark"> </i>One Free book </li>
			  <li><i class="ion-checkmark"> </i>4 Self help Books/month  </li>
			  <li><i class="ion-checkmark"> </i>4 Book summaries</li>
			  <li><i class="ion-checkmark"> </i>24/7 Email support</li>
			  <li><i class="ion-checkmark"> </i></li>
			</ul>
			<!--	<input type="radio" id="planselect4" name="quantitybook" value="3"> -->
			<label for="planselect4" class="choosemelabel">Choose Plan</label>

            </div> 
        </div>
        
        <input type="button" name="next" class="next btn44 btn559" href="#header" value="Continue" />
        <input type="button" name="previous" class="previous btn44 btn5775" value="Previous" />
        
    </fieldset>
    
	<fieldset class="fieldsetcontrol6">
		<h5 class="finishedsteps">Step 2 of 6</h5>
        <h1 class="headerforplan3">Register</h1>

        <div class="<?php echo (!empty($fullname_err)) ? 'has-error' : ''; ?>">
            <input type="email" value="" name="fullname"  class=" fieldsetname email2 btn44" placeholder="Full Name" >
            <span class="help-block"><?php echo $fullname_err; ?></span>
            <h9> This name is used to shipping the box to you. So please use your real name.</h9>
        </div>

        <div class="<?php echo (!empty($useremail_err)) ? 'has-error' : ''; ?>">
            <input type="email" value="" name="EMAIL" class=" fieldsetname email2 btn44"  placeholder="Email Address" >
            <span class="help-block"><?php echo $useremail_err; ?></span>
        </div>

        <div class="<?php echo (!empty($userpassword_err)) ? 'has-error' : ''; ?>">
            <input type="email" value="" name="Password" class=" fieldsetname email2 btn44" placeholder="Password" >
            <span class="help-block"><?php echo $userpassword_err; ?></span>
        </div>

        <div class="<?php echo (!empty($confirm_userpassword_err)) ? 'has-error' : ''; ?>">
            <input type="email" value="" name="CPassword" class=" fieldsetname email2 btn44" placeholder="Confirm Password" >
            <span class="help-block"><?php echo $confirm_userpassword_err; ?></span>
        </div>
        
   
		<input type="button" name="next" class="next btn44 btn5539" value="Continue" />
        <input type="button" name="previous" class="previous btn44 btn55" value="Previous" />
        <p> Already have an account? <a class="" onclick="document.getElementById('id01').style.display='block'">
            <span class="">Log in</span>
        </a></p>
	</fieldset>
    
  
	<fieldset class="fieldsetcontrol6">
		<h5 class="finishedsteps">Step 5 of 6</h5>
        <h1 class="headerforplan3">Shipping Adress</h1>
        
        <input type="email" name="adress"  class="chatinput email6 btn44" value="" id="adress" placeholder="Adress">
        <input type="email" value="" name="city" class="chatinput2 email6 btn44" id="city" placeholder="City" >
        
							
	<div class="form-group4"> <!-- State Button -->
		<select class="languageselector" id="country_id" onchange="myCountry()">
            <option value="">--Please choose a country--</option>
			<option value="">Austria</option>
			<option value="">Belgium</option>
			<option value="">Bulgaria</option>
			<option value="">Croatia</option>
			<option value="">Cyprus</option>
			<option value="">Czench Republic</option>
			<option value="">Denmark</option>
			<option value="">Estonia</option>
			<option value="">Finland</option>
			<option value="">France</option>
			<option value="">Germany</option>
			<option value="">Greece</option>
			<option value="">Hungary</option>
			<option value="">Ireland</option>
			<option value="">Italy</option>
			<option value="">Lativa</option>
			<option value="">Lithuania</option>
			<option value="">Luxembourg</option>
			<option value="">Malta</option>
			<option value="">Netherlands</option>
			<option value="">Poland</option>
			<option value="">Portugal</option>
			<option value="">Romania</option>
			<option value="">Slovakia</option>
			<option value="">Slovenia</option>
			<option value="">Spain</option>
			<option value="">Sweden</option>
			<option value="">United Kingdom</option>
		</select>					
	</div>
	
	<input type="email" name="postnumber"  class="chatinput3 email7 btn44" value="" id="postnumberid"  required="1, 2, 3, 4, 5, 6, 7, 8 ,9" minlength="5" aria-required="true" placeholder="Zip Code">		
	

		<input type="button" name="next" class="next btn44 btn5539" value="Continue" />
        <input type="button" name="previous" class="previous btn44 btn55" value="Previous" />
	</fieldset>
	<fieldset class="fieldsetcontrol6">
		<h5 class="finishedsteps">Step 6 of 6</h5>
        <h1 class="headerforplan3">Payment</h1>
        <h5 class="finishedsteps2">No obligations.</h5>
        <h5 class="finishedsteps2">Cancel your month whenever you want with no hidden fees.</h5>
        <!--
        <button type="button" name="next" class="next btn10 btn230">Credit Card <img src="/images/visa.png" width="35px" height="35px"> <img src="/images/mastercard.png" width="35px" height="35px"><img src="/images/amex.png" width="35px" height="35px"><img src="/images/maestro.png" width="35px" height="35px">
        
        </button>
        <h6 class="orpayment"> or use </h6>-->
        <h6 class="pleasefillin">Please choose the plan you want to have:</h6>
        <select class="quantitybooksselector" id="bookquantity-select" onchange="myFunction()">
            <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TQ443X9DCRFLG">Test</option>
            <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=UMZHWHMHR8LLW">1 Book/month</option>
            <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=S4M5DL4QRHJZC" selected>2 Books/month</option>
            <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4T2BF4SGTWYP6">3 Books/month</option>
            <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Y4F3BS96SY9MJ">4 Books/month</option>
        
        </select>
    
        <div class="home-content__buttons3">
            <input type="submit" onclick="gotosite(9)" value="Subscribe now" class="btn10 btn20" >
            </input>
            
        </div>
        
        
        <h5 class="subscriptiontitle">Your subscription:</h5>
        <h4 class="subscriptioninfo">You will get <span class="subscriptioninfo2" id="option3">3 Books for 39.99€/month</span> send to <span class="registershipdata subscriptioninfo2">No adress</span>, <span class="registershipdata2 subscriptioninfo2">No City</span> <span class="subscriptioninfo2" id="whatcountry">No Country</span>, <span class="registershipdata3 subscriptioninfo2">No Zipcode</span></h4>
        
        
		<input type="button" name="previous" class="previous btn443 btn555" value="Previous" />
		
	</fieldset>
    
    <!--
    <fieldset class="fieldsetcontrol">
        <h1 class="checkoutcreditcard">Your payment details, please.</h1>
        <label class="checkoutlabel3">Name on Card</label>
        <input type="email" name="fullname"  class="email2 btn44" value="" id="mc-email "placeholder="Moritz Junker">
        <ul id="menur">
            <li><label class="checkoutlabel">Card Number</label></li>
            <li><label class="checkoutlabel2">CVV</label></li>  
        </ul>
        
            
            <input id="securitycodeid" class="email4 btn44"
				inputmode="numeric"
				type="email" name="security-code"
				placeholder="&#149;&#149;&#149;">
            <input type="email" name="cardnumber" class="email3 btn44" id="cardnumberid" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" >
        
        <label class="checkoutlabel3">Expiration date</label>
        
        <input type="email" name="expirationdate"  class="email2 btn44" value="" id="expirationdateid"placeholder="MM / YY">

        <input type="button" name="Payment" class=" next btn414 btn66" value="Pay now for one free book" />
        <input type="button" name="previous" class="previous btn443 btn555" value="Change payment option" />
        
        
        
    </fieldset>-->
    
    
   <fieldset>
        <h1 class="headerforplan4">Your payment was succesful :)</h1>
        <h3> You got an email send to your email adress which has your log in password. Click on the link in the email and sign up with your email adress and your given password. You can change the password when logged in and also change your shipping adress and topics.</h3>
        
        <a href="index.php">
            <input type="button" class="btn44 btn55" value="Go back to the main webpage" />
        </a>
    </fieldset>
	
    </form>
    
        </form>   


        
    </section>
    
    <script>
        function gotosite() {
  window.location = document.getElementById("bookquantity-select").value; // JQuery:  $("#menu").val();
}
    </script>
    
    
    
    <!-- end s-home -->
 
    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <img class="footer-logo" src="images/logophoto2.png"><br>
                InsightBox is a service for entrepreneurs, chefs, leaders, game changer and every one else in this world. We try to make the society smarter and help you to expand your knowledge. 

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Get notified every month and find out what is new in our company and get notified about special events.</p>
                                        


                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="@">
                        <button type="submit" class="full-width btn--primary" name="subscribe" value="Subscribe">Subscribe</button>
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>
            <div class="paymentaccepted">
            <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="Buy now with PayPal" />
            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <br>
                    <span>© Copyright InsightBox 2019</span> 
                    	
                </div>
                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>

                
            </div>

        </div> <!-- end footer-bottom -->

    </footer>
    <!--
    <script>
        function gotosite() {
            if(document.getElementById('planselect1').checked) {
            document.getElementById('myLink').href = ""; }
            else if(document.getElementById('planselect2').checked) {
            document.getElementById('myLink').href = ""; }
            else if(document.getElementById('planselect3').checked) {
            document.getElementById('myLink').href = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HJFT86F6RUPDJ"; }
            else (document.getElementById('planselect4').checked) {
            document.getElementById('myLink').href = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=K87FVBNYGAQW4"; }
        
 
}
    </script>
    <script>
        function gotosite() {
  window.location = document.getElementById("bookquantity-select").value; // JQuery:  $("#menu").val();
}
    </script> end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div>
    <!-- end photoSwipe background -->
    
    
    <script>

    // Render the PayPal button

    paypal.Button.render({

        // Set your environment

        env: 'production', // sandbox | production

        // Specify the style of the button

        style: {
            label: 'paypal',
            size:  'large',    // small | medium | large | responsive
            shape: 'rect',     // pill | rect
            color: 'black',     // gold | blue | silver | black
            tagline: false    
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
            production: '<insert production client id>'
        },

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '0.01', currency: 'USD' }
                        }
                    ]
                }
            });
        },

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                window.alert('Payment Complete!');
            });
        }

    }, '#paypal-button-container');

</script>

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/checkout.js"></script>
    <script src="language.js"></script>
    <script src="js/main2.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
    

</body>

</html>