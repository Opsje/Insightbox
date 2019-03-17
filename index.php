
<!DOCTYPE html>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>InsightBox | MONTHLY BOOK BOX SUBSCRIPTION COMPANY</title>
    <meta name="description" content="Are you interested in living the best and happiest life possible, then a good way to start is to educate yourself. Insightbox is a monthly subscription box for books so that you never need to think about which book you should read next to rise to your greatest potential. The company was founded, because we want to help people to bring the best out of themselves and change their life for the better.">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" href="favicon.ico">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- script
    ================================================== -->

    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.ajaxchimp.js"></script>
    <script src="js/main2.js"></script>

    

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="google-site-verification" content="F0ZPQoQ2VfcjTvcqFV2wi6vKp2tdBD_R30v9gft2iHA" />
    
</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.php">
                <img src="images/logophoto.png" class="site-logo" alt="Subscription Bookbox for Readers">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a onclick="document.getElementById('id01').style.display='block'" title="login">Log In</a></li>
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
					<li><a class="smoothscroll"  href="#product" title="Product">Products</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Shipment</a></li>
                    <!--<li><a class="smoothscroll"  href="#clients" title="clients">Clients</a></li>-->
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
                </ul>
                        
    
                
    
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/InsightBox-397320934083781"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Insightbox1"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/insightboxofficial/"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/insightbox/"><i class="fa fa-linkedin"></i></a>
                    </li>
                  
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header>
    <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/herobg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
        <div class="home-content" alt="Cheap books with a Subscription box">
            <div class="row home-content__main">
                
                <h1 class="undertexts2">
                    Expand your knowledge <br>
                    and rise to your <br>
                    full potential.
                </h1>
                <div class="row home-content__buttons buttonchange">
                    <a href="betaregister.php"
                       class="btn btn-stroke">
                        JOIN NOW AND Get one book for free!*
                    </a>
                </div>
                <div class=" home-content__buttons2 buttonchange2">
                    <a href="betaregister.php"
                       class="btn btn-stroke ">
                        JOIN NOW
                    </a>
                </div>
            </div>
            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>
            <div class="home-content__line"></div>
        </div> <!-- end home-content -->
        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/InsightBox-397320934083781"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/Insightbox1"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/insightboxofficial/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/insightbox/"><i class="fa fa-linkedin" aria-hidden="true"></i><span>LinkedIn</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


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
    
    <!-- how it works
    ================================================== -->
    <section id='howitworks' class="s-howitworks">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead3">How does Insightbox work?</h3>
                
            </div>
            
            <ul class="whatlist">
                <li class="subhead subhead--dark stepwhat">1. Sign up on the Insightbox website</li>
                <li class="subhead subhead--dark stepwhat">2. Wait for your shipping</li>
                <li class="subhead subhead--dark stepwhat">2. Read the books you got sent from Insightbox</li>
                <li class="subhead subhead--dark stepwhat">4. Return to step 2.</li>
            </ul>
        </div>
        <!-- end section-header 
        <div class="row howitworks-list block-1-2 block-tab-full">
            <div class="howitworks-item" data-aos="fade-up">
                <div class="howitworks-icon">
                    <i class="fa fa-desktop"></i>
                    <h5 class="undertexticon">Sign up</h5>
                </div>
            </div>
            <div class="howitworks-item" data-aos="fade-up">
                <div class="howitworks-icon2">
                    <i class="fa fa-chevron-right"></i>
                </div>
            </div>
            <div class="howitworks-item" data-aos="fade-up">
                <div class="howitworks-icon">
                    <i class="fa fa-truck"></i>
                    <h5 class="undertexticon">Monthly</h5><br>
                    <h5 class="undertexticon2">delivery</h5>
                </div>
            </div>
            <div class="howitworks-item" data-aos="fade-up">
                <div class="howitworks-icon2">
                    <i class="fa fa-chevron-right"></i>
                </div>
            </div>
            <div class="howitworks-item" data-aos="fade-up">
                <div class="howitworks-icon">
                    <i class="fa fa-book"></i>
                    <h5 class="undertexticon">Read</h5>
                </div>
            </div>
            <div class="howitworks-item" data-aos="fade-up">
                <div class="howitworks-icon2">
                    <i class="fa fa-chevron-right"></i>
                </div>
            </div>
            <div class="howitworks-item" data-aos="fade-up">
                <div class="howitworks-icon">
                    <i class="fa fa-smile-o"></i>
                    <h5 class="undertexticon">Smile</h5>
                </div>
            </div>
        </div>
        -->
    </section>
        
    
    
    
    
    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Hello There</h3>
                <h1 class="display-1 display-1--light">This is InsightBox</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                Are you interested in living the best and happiest life possible, then a good way to start is to educate yourself. Insightbox is a monthly subscription box for books so that you never need to think about which book you should read next to rise to your greatest potential. The company was founded, because we want to help people to bring the best out of themselves and change their life for the better.
                
                </p>
            </div>
        </div> 

        <div class="about__line"></div>

    </section>
    

    
    <!-- product images
======================================-->
    
	<!--<section id='product' class="s-product">
		<div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h1 class="display-2 display-2--light">Our Product options</h1>
                </div>
            </div> 
			
        </div>
		<div class="productimage">
			
		
		</div>
	
	</section>-->
    
    <!-- plan
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Offer</h3>
                <h1 class="display-2">Every month we send books to you!</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-text"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Get Book Summaries</h3>
                    <p>We will send you a summary for every book so that you don't need to read them again. And can easily find the most important knowledge out of the book.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-book"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">eBooks / Books /Audiobooks</h3>
                    <p> (Next version)InsightBox can send you physical copies by mail or you can get audiobooks and ebooks send via e-mail, if you want. 
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-comment"></i>
                </div>  
                <div class="service-text">
                    <h3 class="h2">Choose your theme</h3>
                    <p>(Next version)You can choose your theme from 14 different options. When signed up you will also be able to change these online to fullfill your present needs. 
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-signal"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Expanding your Knowledge</h3>
                    <p>InsightBox will send you the books in the right order to perfectly extend your knowledge and help you develop excellent skills to make your life prosperous.
                    </p>
                </div>
            </div>
<!--
           
-->
        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Recent Shipments</h3>
                    <h1 class="display-2 display-2--light">We love what we do, check out some of our latest shipments</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/Books.jpg" class="thumb-link" title="Books" data-size="1180x1772">
                                    <img src="images/portfolio/Books.jpg" 
                                         srcset="images/portfolio/Books.jpg 1x, images/portfolio/Books.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Books we ship
                                </h3>
                                <p class="item-folio__cat">
                                    Success
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>You choose how many books you will get and then get them shipped to you to your specifications.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/boxpic.jpg" class="thumb-link" title="Books in a box" data-size="2012x2012">
                                    <img src="images/portfolio/boxpic.jpg" 
                                         srcset="images/portfolio/boxpic.jpg 1x, images/portfolio/boxpic.jpg 2x" alt="Business">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Books in a box
                                </h3>
                                <p class="item-folio__cat">
                                    Business
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p> You will get a box like this one and your quantity of books you choose when you registered.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                   <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/Photo 2019-02-26, 15 15 59.jpg" class="thumb-link" title="Self-development" data-size="1500x2208">
                                    <img src="images/portfolio/Photo 2019-02-26, 15 15 59.jpg"
                                         srcset="images/portfolio/Photo 2019-02-26, 15 15 59.jpg 1x, images/portfolio/Photo 2019-02-26, 15 15 59.jpg 2x" alt="Self-development">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Box in the sun.
                                </h3>
                                <p class="item-folio__cat">
                                    Advice
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Look how astonishing our product looks.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/Photo 2019-02-26, 17 01 27.jpg" class="thumb-link" title="Productivity" data-size="1200x1823">
                                    <img src="images/portfolio/Photo 2019-02-26, 17 01 27.jpg" 
                                         srcset="images/portfolio/Photo 2019-02-26, 17 01 27.jpg 1x, images/portfolio/Photo 2019-02-26, 17 01 27.jpg 2x" alt="Advise Productivity">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Smarter Faster Better
                                </h3>
                                <p class="item-folio__cat">
                                    Productivity
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Join Insightbox to get smarter Faster and better information from your books. You will save a lot o time and energy you could use else where.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

   

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->




    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header">
            <div class="col-full">
                <h3 class="subhead">Contact Us</h3>
                <h1 class="display-2 display-2--light">Reach out for questions or just say hello</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <h3 class="h6">Send Us A Message</h3>

                <form name="contactForm" id="contactForm" method="post" action="sendEmail.php" novalidate="novalidate">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="text" id="contactEmail" placeholder="Your Email" value="" required="@" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="   Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width textareastyle"></textarea>
                    </div>
                    <div class="form-field">
						<input type="submit" value="Submit"><input type="reset" value="Clear">
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                    <div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                            Norevägen 3, Spånga Stockholm<br>
                            16341 SWE
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            <a href="mailto:proposal@InsightBox.org?subject=Suggestion">
suggestion@InsightBox.com</a><br>
                            <a href="mailto:help@InsightBox.org?subject=Help">
help@InsightBox.com</a>
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Phone: (+46) <br>
                            Mobile: (+46) 707716993<br>
                            Fax: (+46)
                        </p>
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="https://www.facebook.com/InsightBox-397320934083781"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Insightbox1"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/insightboxofficial/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        
                        
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <img class="footer-logo" src="images/logophoto.png"><br>
                InsightBox is a service for entrepreneurs, chefs, leaders, game changer and every one else in this world. We try to make the society smarter and help you to expand your knowledge. 

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Get notified to find out what is new in our great company and also get notified for special events.</p>
                                        


                <div class="subscribe-form">
                   <div id="mc_embed_signup">
        <form action="//design4.us3.list-manage.com/subscribe/post?u=36c4fd991d266f23781ded980&id=aefe40901a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate submiiting" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
                
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email Address" style="color: white;" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; color: aliceblue; left: -5000px;">
                    <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
                </div>
                
                <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button full-width btn--primary">Submit <i class="fa fa-envelope"></i></button>
                <label for="mce-EMAIL" class="submiiting"></label>
                <div class="info"></div>
            </div>
        </form>
    </div>

    <!--End mc_embed_signup-->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="jquery.ajaxchimp.js"></script>
    <script>
    $(document).ready(function() {
        $('#mc_embed_signup').find('form').ajaxChimp();
    });
    </script>
                </div>
                

            </div>
            <div class="paymentaccepted">
            <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="" />
            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <br>
                    <span>© Copyright InsightBox 2018</span> 
                    	
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer>
     
    <!-- end footer -->
    <script>
        (function ($) {
    'use strict';

    $.ajaxChimp = {
        responses: {
            'We have sent you a confirmation email'                                             : 0,
            'Please enter a valid email'                                                        : 1,
            'An email address must contain a single @'                                          : 2,
            'The domain portion of the email address is invalid (the portion after the @: )'    : 3,
            'The username portion of the email address is invalid (the portion before the @: )' : 4,
            'This email address looks fake or invalid. Please enter a real email address'       : 5
        },
        translations: {
            'en': null
        },
        init: function (selector, options) {
            $(selector).ajaxChimp(options);
        }
    };

    $.fn.ajaxChimp = function (options) {
        $(this).each(function(i, elem) {
            var form = $(elem);
            var email = form.find('input[type=email]');
            var label = form.find('.info');

            var settings = $.extend({
                'url': form.attr('action'),
                'language': 'en'
            }, options);

            var url = settings.url.replace('/post?', '/post-json?').concat('&c=?');

            form.attr('novalidate', 'true');
            email.attr('name', 'EMAIL');

            form.submit(function () {
                var msg;
                function successCallback(resp) {
                    if (resp.result === 'success') {
                        msg = 'We have sent you a confirmation email';
                        label.removeClass('error').addClass('valid');
                        email.removeClass('error').addClass('valid');
                    } else {
                        email.removeClass('valid').addClass('error');
                        label.removeClass('valid').addClass('error');
                        var index = -1;
                        try {
                            var parts = resp.msg.split(' - ', 2);
                            if (parts[1] === undefined) {
                                msg = resp.msg;
                            } else {
                                var i = parseInt(parts[0], 10);
                                if (i.toString() === parts[0]) {
                                    index = parts[0];
                                    msg = parts[1];
                                } else {
                                    index = -1;
                                    msg = resp.msg;
                                }
                            }
                        }
                        catch (e) {
                            index = -1;
                            msg = resp.msg;
                        }
                    }

                    // Translate and display message
                    if (
                        settings.language !== 'en'
                        && $.ajaxChimp.responses[msg] !== undefined
                        && $.ajaxChimp.translations
                        && $.ajaxChimp.translations[settings.language]
                        && $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]
                    ) {
                        msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]];
                    }
                    label.html(msg);

                    label.show(2000);
                    if (settings.callback) {
                        settings.callback(resp);
                    }
                }

                var data = {};
                var dataArray = form.serializeArray();
                $.each(dataArray, function (index, item) {
                    data[item.name] = item.value;
                });

                $.ajax({
                    url: url,
                    data: data,
                    success: successCallback,
                    dataType: 'jsonp',
                    error: function (resp, text) {
                        console.log('mailchimp ajax submit error: ' + text);
                    }
                });

                // Translate and display submit message
                var submitMsg = 'Submitting...';
                if(
                    settings.language !== 'en'
                    && $.ajaxChimp.translations
                    && $.ajaxChimp.translations[settings.language]
                    && $.ajaxChimp.translations[settings.language]['submit']
                ) {
                    submitMsg = $.ajaxChimp.translations[settings.language]['submit'];
                }
                label.html(submitMsg).show(2000);

                return false;
            });
        });
        return this;
    };
})(jQuery);
    </script>


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

    </div> <!-- end photoSwipe background -->


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

</body>

</html>