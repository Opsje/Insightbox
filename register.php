<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>InsightBox</title>
    <meta name="description" content="">
    <meta name="author" content="">

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

        
<form id="msform">
<form method="post" name="contact_form" action="registerdataform.php">

	<!-- progressbar -->
	
	<!-- fieldsets -->
	<fieldset class="fieldsetcontrol">
		<h5 class="finishedsteps">Step 1 of 6</h5>
        <h1 class="headerforplan3">Choose your options</h1>
        <h6 class="explanationtext"> 
                Choose your options of books in the next steps.
                    You can choose which language, how many books and what topics of books will get shipped to you.</h6>
		<input type="button" name="next" class="next btn44 btn5596" value="Choose Options " />
	</fieldset>
    
    
	<fieldset class="fieldsetcontrol">
		<h5 class="finishedsteps">Step 2 of 6</h5>
        <h1 class="headerforplan3">Choose your options</h1>
        
            <input type="email" name="fullname"  class=" fieldsetname email2 btn44" value="" id="fullnameid" placeholder="Full Name" >
            <input type="email" value="" name="EMAIL" class=" fieldsetname email2 btn44" id="mc-emailid" placeholder="Email Address" >
            <input type="email" value="" name="Password" class=" fieldsetname email2 btn44" id="passwordid" placeholder="Password" >
        
            
            <h5 class="question">Choose your book type.</h5>

            <input type="radio" id="choice1" name="choice" value="creative">
            <label for="choice1">PaperBook</label>

            <input type="radio" id="choice2" name="choice" value="productive">
            <label for="choice2">EBook</label>
        
            <input type="radio" id="choice3" name="choice" value="product">
            <label for="choice3">Audiobook</label>

            <div id="flap"><span class="content"></span></div>

            
            
   
		<input type="button" name="next" class="next btn44 btn559" value="Continue" onclick="validateForm()"/>
        <input type="button" name="previous" class="previous btn44 btn55" value="Previous" />
	</fieldset>
    
    
	<fieldset class="fieldsetcontrol">
		<h5 class="finishedsteps">Step 3 of 6</h5>
        <h1 class="headerforplan3">Choose your options</h1>

		<h5 class="question">What gender typ are you?</h5>
                <input  type="radio" name="rb" id="rb1" />
                <label class="labelradio" for="rb1">Male</label>
                <input type="radio" name="rb" id="rb2" />
                <label class="labelradio" for="rb2">Female</label>
                <input type="radio" name="rb" id="rb3" />
                <label class="labelradio" for="rb3">Other</label>
        
         
       <h5 class="question2">What language do you prefer?</h5>
        <select class="languageselector" id="language-select" name="languageselected" size="1">
              <option value="">--Please choose a language--</option>
              <option value="AF">Afrikanns</option>
              <option value="SQ">Albanian</option>
              <option value="AR">Arabic</option>
              <option value="HY">Armenian</option>
              <option value="EU">Basque</option>
              <option value="BN">Bengali</option>
              <option value="BG">Bulgarian</option>
              <option value="CA">Catalan</option>
              <option value="KM">Cambodian</option>
              <option value="ZH">Chinese (Mandarin)</option>
              <option value="HR">Croation</option>
              <option value="CS">Czech</option>
              <option value="DA">Danish</option>
              <option value="NL">Dutch</option>
              <option value="EN" selected>English</option>
              <option value="ET">Estonian</option>
              <option value="FJ">Fiji</option>
              <option value="FI">Finnish</option>
              <option value="FR">French</option>
              <option value="KA">Georgian</option>
              <option value="DE">German</option>
              <option value="EL">Greek</option>
              <option value="GU">Gujarati</option>
              <option value="HE">Hebrew</option>
              <option value="HI">Hindi</option>
              <option value="HU">Hungarian</option>
              <option value="IS">Icelandic</option>
              <option value="ID">Indonesian</option>
              <option value="GA">Irish</option>
              <option value="IT">Italian</option>
              <option value="JA">Japanese</option>
              <option value="JW">Javanese</option>
              <option value="KO">Korean</option>
              <option value="LA">Latin</option>
              <option value="LV">Latvian</option>
              <option value="LT">Lithuanian</option>
              <option value="MK">Macedonian</option>
              <option value="MS">Malay</option>
              <option value="ML">Malayalam</option>
              <option value="MT">Maltese</option>
              <option value="MI">Maori</option>
              <option value="MR">Marathi</option>
              <option value="MN">Mongolian</option>
              <option value="NE">Nepali</option>
              <option value="NO">Norwegian</option>
              <option value="FA">Persian</option>
              <option value="PL">Polish</option>
              <option value="PT">Portuguese</option>
              <option value="PA">Punjabi</option>
              <option value="QU">Quechua</option>
              <option value="RO">Romanian</option>
              <option value="RU">Russian</option>
              <option value="SM">Samoan</option>
              <option value="SR">Serbian</option>
              <option value="SK">Slovak</option>
              <option value="SL">Slovenian</option>
              <option value="ES">Spanish</option>
              <option value="SW">Swahili</option>
              <option value="SV">Swedish </option>
              <option value="TA">Tamil</option>
              <option value="TT">Tatar</option>
              <option value="TE">Telugu</option>
              <option value="TH">Thai</option>
              <option value="BO">Tibetan</option>
              <option value="TO">Tonga</option>
              <option value="TR">Turkish</option>
              <option value="UK">Ukranian</option>
              <option value="UR">Urdu</option>
              <option value="UZ">Uzbek</option>
              <option value="VI">Vietnamese</option>
              <option value="CY">Welsh</option>
              <option value="XH">Xhosa</option>
        </select>
		<input type="button" name="next" class="next btn44 btn559" value="Continue" />
        <input type="button" name="previous" class="previous btn44 btn55" value="Previous" />
	</fieldset>
    
    
    <fieldset class="fieldsetcontrol">
		<h5 class="finishedsteps">Step 4 of 6</h5>
        <h1 class="headerforplan3">Choose your options</h1>
        
        <h5 class="question3">Choose your topics of books.</h5>
        
        
        <div class="form-group col-md-6 col-lg-6 col-sm-6">
        <select id="DDLActivites" data-style="btn-default2" class=" country selectpicker form-control" onchange="myTopic()" multiple>
            <option value="Advice">Advice</option>
            <option value="Best Sellers">Best Sellers</option>
            <option value="Biography">Biography</option>
            <option value="Business">Business</option>
            <option value="Classical">Classical</option>
            <option value="Engineering">Engineering</option>
            <option value="Entrepreneurship">Entrepreneurship</option>
            <option value="Fiction">Fiction</option>
            <option value="Finance">Finance</option>
            <option value="Health">Health</option>
            <option value="History">History</option>
            <option value="Leadership">Leadership</option>
            <option value="Politics">Politics</option>
            <option value="Psychology">Psychology</option>
            <option value="Sales">Sales</option>
            <option value="Random">Random</option>
        </select>
        </div>
        <button type="button">Get Values</button>

        
        <script>
            $(document).ready(function() {
            $("button").click(function(){
                var countries = [];
            $.each($(".country option:selected"), function(){            
            countries.push($(this).val());
            });
            alert("You have selected the country - " + countries.join(", "));
            });
            });
</script>
        <br>
        <!--
        <div class="container9">
            <input class="topicchooser" id="select" ng-model=""/>
        </div>
        -->
        <h5 class="question8">How many books do you want per month?</h5>
        
        <select class="languageselector2" id="bookquantity-select" onchange="myFunction()">
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TQ443X9DCRFLG">Test Books for 0.01€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=UMZHWHMHR8LLW">1 Books for 14.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=S4M5DL4QRHJZC">2 Books for 26.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4T2BF4SGTWYP6">3 Books for 39.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Y4F3BS96SY9MJ" selected>4 Books for 49.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2ENLP22BMTGH4">5 Books for 64.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HJFT86F6RUPDJ">6 Books for 79.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WHE55FTSEYAM4">7 Books for 94.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DWRND8SRPSNCU">8 Books for 104.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=GEM53QGDKZ6ZJ">9 Books for 119.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LHSLBTTGPU49J">10 Books for 129.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LLNRBQYKH4EDL">11 Books for 144.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WWZERHL95GQYN">12 Books for 159.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DDWXF5TM6BBGU">13 Books for 174.99€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SKTW8W8C4F7RE">14 Books for 189.98€/month</option>
              <option value="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=K87FVBNYGAQW4">15 Books for 199.98€/month</option>
            
        </select>
        <h5 class="morethanone"> * you must choose more than one book to get a free book</h5>
        



		<input type="button" name="next" class="next btn44 btn559" value="Continue" />
        <input type="button" name="previous" class="previous btn44 btn55" value="Previous" />
    </fieldset>
	<fieldset class="fieldsetcontrol">
		<h5 class="finishedsteps">Step 5 of 6</h5>
        <h1 class="headerforplan3">Shipping Adress</h1>
        
        <input type="email" name="adress"  class="chatinput email6 btn44" value="" id="adress" placeho‚lder="Adress">
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
	
	<input type="email" name="postnumber"  class="chatinput3 email6 btn44" value="" id="postnumberid"  required="1, 2, 3, 4, 5, 6, 7, 8 ,9" minlength="5" aria-required="true" placeholder="Zip Code">		
	

		<input type="submit" name="next" class="next btn44 btn559" value="Continue" />
        <input type="button" name="previous" class="previous btn44 btn55" value="Previous" />
	</fieldset>
	<fieldset class="fieldsetcontrol">
		<h5 class="finishedsteps">Step 6 of 6</h5>
        <h1 class="headerforplan3">Payment</h1>
        <h5 class="finishedsteps2">No obligations.</h5>
        <h5 class="finishedsteps2">Cancel your month whenever you want with no hidden fees.</h5>
        <!--
        <button type="button" name="next" class="next btn10 btn230">Credit Card <img src="/images/visa.png" width="35px" height="35px"> <img src="/images/mastercard.png" width="35px" height="35px"><img src="/images/amex.png" width="35px" height="35px"><img src="/images/maestro.png" width="35px" height="35px">
        
        </button>
        <h6 class="orpayment"> or use </h6>-->
        <div class="home-content__buttons3">
            <button type="submit" id="go" onclick="gotosite()" class="btn10 btn20" >Subscribe now
            </button>
        </div>
        
        
        <h5 class="subscriptiontitle">Your subscription:</h5>
        <h6 class="subscriptioninfo">You will get <span class="subscriptioninfo2" id="option3">4 Books for 49.99€/month</span> send to <span class="registershipdata subscriptioninfo2">No adress</span>, <span class="registershipdata2 subscriptioninfo2">No City</span> <span class="subscriptioninfo2" id="whatcountry">No Country</span>, <span class="registershipdata3 subscriptioninfo2">No Zipcode</span>. Also you will get a small summary and the most importanten sentences out of every book. </h6>
        
        
		<input type="button" name="previous" class="previous btn443 btn555" value="Previous" />
		
	</fieldset>
    <script>

    </script>
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
        <h3> You got an email send to your email adress which has your log in password. 
        Click on the link in the email and sign up with your email adress and your given password. 
        You can change the password when logged in and also change your shipping adress and topics.</h3>
        
        <a href="index.php">
            <input type="button" class="btn44 btn55" value="Go back to the main webpage" />
        </a>
    </fieldset>
	
    </form>
    
        </form>   


        
    </section>
    
    
    
    
    
    <!-- end s-home -->
 
    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <img class="footer-logo" src="images/logophoto2.png"><br>
                InsightBox is a service for entrepreneurs, chefs, leaders, game changer and every one else on this world. We try to make the society smarter and help you to expand your knowledge. 

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
                    <span>© Copyright InsightBox 2018</span> 
                    	
                </div>

                
            </div>

        </div> <!-- end footer-bottom -->

    </footer>
    <script>
        function gotosite() {
  window.location = document.getElementById("bookquantity-select").value; // JQuery:  $("#menu").val();
}
    </script><!-- end footer -->


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