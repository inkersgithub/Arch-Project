

<?php
include_once 'dbconnect.php';
if(isset($_POST['send'])){
    $to = "anoop.inkers@gmail.com"; // this is your Email address
    $from = $_POST['contactEmail']; // this is the sender's Email address
    $first_name = $_POST['contactName'];
	$mobile = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
	$temp = $_POST['message'];
    $message = $first_name ."\n" . $mobile . "\nWrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

	mysqli_query($con, "INSERT INTO inbox(name,email,phone,message) VALUES('" . $first_name . "', '" . $from . "', '" . $mobile . "', '" . $temp . "')");

	mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $smsg= "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

    // You can also use header('Location: thank_you.php'); to redirect to another page.

    }

?>


<!doctype html>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Prominence</title>


        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/easy-responsive-tabs.min.css">
        <link rel="stylesheet" href="css/tabs.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Laoding page  -->
    <div class="preloader">
      <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- End Laoding page  -->

    <!-- Begin HorizontalTab style 6 -->
    <section class="section-full image-bg">

      <div class="container" style="margin-top: -86px;">

        <div class="row">

          <div class="col-md-12">

            <a href="index.php"><div class="responsive-logo hidden-lg hidden-md hidden-sm"><img src="img/logo.png"></div></a>

            <!-- Begin .HorizontalTab -->
            <div class="VerticalTab VerticalTab_hash_scroll VerticalTab_6 tabs_ver_6">

              <ul class="resp-tabs-list hor_1">
                <a href="index.php"><div class="logo"><img src="img/logo.png"></div></a>
                <li class="tabs-1" data-tab-name="home"><span class="tabs-text">Home</span></li>
                <li class="tabs-2" data-tab-name="services"><span class="tabs-text">Services</span></li>
                <li class="tabs-3" data-tab-name="gallery"><span class="tabs-text">Gallery</span></li>
                <li class="tabs-4" data-tab-name="contact"><span class="tabs-text">Contact Us</span></li>
				<li class="tabs-5" data-tab-name="register"><span class="tabs-text">Register</span></li>
              </ul>

              <div class="resp-tabs-container hor_1 tabs_scroll">

                <div class="fc-tab-1">

                  <div class="home-container">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="left-content">
						  <h2 style="text-align: center;">PROMINENCE<em></em></h2>
							<p style="font-size: 15px; color: #343434;font-style: normal; font-weight: bolder; text-align: -webkit-center;">Welcome to PROMINENCE DESIGN AND CONSULTANCY, for modern, Economic and
							 Dynamic designers in the field of civil engineering. The team prominence is comprises of
							professionals having Master Knowledge in all aspects of civil engineering structures</p>
							 <p style="text-align:center; margin-top: 47px;font-size: 22px; font-style: normal;color: #f78b26;font-family: monospace;">CLEAN,CREATIVE &amp; UNIQUE</p>
							 <span><?php if (isset($smsg)) { echo $smsg; } ?></span>
							<!--
                          <div class="primary-button">
                            <a href="#">Discover More</a>
                          </div>
-->
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="right-content">
                          <img src="img/home-image.jpg">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="fc-tab-2">

                  <div class="home-container">
                    <div class="row">
                      <div class="col-md-6" style="border-right: 3px #b1b6b5; border-style: solid; border-width: 0px 2px;">
                        <div class="left-content" style="padding-top: 8%; font-size: 30px; font-weight: 700;">
                          <h2 style="text-align: center;font-size: 26px;">Design Works Undertakings<em></em></h2>
                          <p>Structural design of reinforced cement concrete structures Residential and commercial buildings</p>
						  <p>Design of Steel Structures</p>
						  <p>Design of Bridges, Culverts and Regulators</p>
						  <p>Planning of Buildings</p>
						  <p>Approval</p>
						  <p>Student Project Guidance</p>
<!--
                          <div class="primary-button">
                            <a href="#">Discover More</a>
                          </div>
-->
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="left-content" style="padding-top: 8%; font-size: 30px; font-weight: 700;">
                          <h2 style="text-align: center;font-size: 26px;">Present on Going Projects<em></em></h2>
							<p>Commercial flats in Sarjapura, Bangalore</p>
						    <p>Residential projects in Bangalore</p>
						    <p>Residential Projects in Chickmagalure Karnataka.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="fc-tab-3">

                  <div class="owl-carousel owl-theme projects-container">
                    <div>
                      <div class="project-item">
                        <div class="thumb-holder">
                          <div class="hover-effect">
                            <div class="hover-content">
                              <h4>Project One</h4>
                              <a href="img/item-01.jpg" data-lightbox="image-1"><img src="img/project-icon.png"></a>
                            </div>
                          </div>
                          <img src="img/project-item-01.jpg">
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="project-item">
                        <div class="thumb-holder">
                          <div class="hover-effect">
                            <div class="hover-content">
                              <h4>Project Two</h4>
                              <a href="img/item-02.jpg" data-lightbox="image-1"><img src="img/project-icon.png"></a>
                            </div>
                          </div>
                          <img src="img/project-item-02.jpg">
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="project-item">
                        <div class="thumb-holder">
                          <div class="hover-effect">
                            <div class="hover-content">
                              <h4>Project Three</h4>
                              <a href="img/item-03.jpg" data-lightbox="image-1"><img src="img/project-icon.png"></a>
                            </div>
                          </div>
                          <img src="img/project-item-03.jpg">
                        </div>
                      </div>
                    </div>
					  <div>
                      <div class="project-item">
                        <div class="thumb-holder">
                          <div class="hover-effect">
                            <div class="hover-content">
                              <h4>Project Four</h4>
                              <a href="img/item-03.jpg" data-lightbox="image-1"><img src="img/project-icon.png"></a>
                            </div>
                          </div>
                          <img src="img/project-item-03.jpg">
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="project-item">
                        <div class="thumb-holder">
                          <div class="hover-effect">
                            <div class="hover-content">
                              <h4>Project Five</h4>
                              <a href="img/item-05.jpg" data-lightbox="image-1"><img src="img/project-icon.png"></a>
                            </div>
                          </div>
                          <img src="img/project-item-05.jpg">
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="project-item">
                        <div class="thumb-holder">
                          <div class="hover-effect">
                            <div class="hover-content">
                              <h4>Project Sixth</h4>
                              <a href="img/item-06.jpg" data-lightbox="image-1"><img src="img/project-icon.png"></a>
                            </div>
                          </div>
                          <img src="img/project-item-06.jpg">
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="project-item">
                        <div class="thumb-holder">
                          <div class="hover-effect">
                            <div class="hover-content">
                              <h4>Project Seven</h4>
                              <a href="img/item-07.jpg" data-lightbox="image-1"><img src="img/project-icon.png"></a>
                            </div>
                          </div>
                          <img src="img/project-item-07.jpg">
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="project-item">
                        <div class="thumb-holder">
                          <div class="hover-effect">
                            <div class="hover-content">
                              <h4>Project Eight</h4>
                              <a href="img/item-02.jpg" data-lightbox="image-1"><img src="img/project-icon.png"></a>
                            </div>
                          </div>
                          <img src="img/project-item-02.jpg">
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="project-item">
                        <div class="thumb-holder">
                          <div class="hover-effect">
                            <div class="hover-content">
                              <h4>Project Nine</h4>
                              <a href="img/item-01.jpg" data-lightbox="image-1"><img src="img/project-icon.png"></a>
                            </div>
                          </div>
                          <img src="img/project-item-01.jpg">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="fc-tab-4">

                  <div class="contact-container">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="contact-form">
                          <div class="heading">
                            <h2>Say Hello</h2>
                          </div>
                          <form id="contact" action="#" method="post">
                            <fieldset>
                              <input name="contactName" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                            </fieldset>
                            <fieldset>
                              <input name="contactEmail" type="email" class="form-control" id="email" placeholder="Email" required="">
                            </fieldset>
							 <fieldset>
                              <input name="phone" type="text" class="form-control" id="email" pattern="[789][0-9]{9}" placeholder="Mobile No..." required=" " >
                            </fieldset>
                            <fieldset>
                              <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>
                            </fieldset>
                            <fieldset>
                              <button type="submit" name="send" id="form-submit" class="btn">Send</button>
                            </fieldset>
                          </form>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="more-info">
                          <p style="font-weight: bolder;text-align: -webkit-center;font-size:15px;color: #343434;">Please contact us for any general questions or more information regarding our services.For more efficient communication, please complete and submit the form</p>
						  <p style="font-weight: bolder;font-size: 15px;color: #343434;">
							MAIL : <br><a href="mailto:prominencedesign15@gmail.com">prominencedesign15@gmail.com</a><br>
							PHONE : <br><a href="tel:9495717528">9495717528</a>
						  </p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>


				 <div class="fc-tab-5">

                  <div class="contact-container">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="contact-form">
                          <div class="heading">
                            <h2>REGISTER</h2>
                          </div>
<!--
                          <form id="payment" action="" method="post">
                            <fieldset>
                              <input name="payee" type="text" class="form-control" id="payee" placeholder="Your Name" required="">
                            </fieldset>
                            <fieldset>
                              <input name="amount" type="number" class="form-control" id="amount" placeholder="Amount" required="">
                            </fieldset>
                            <fieldset>
                              <textarea name="remarks" rows="6" class="form-control" id="remarks" placeholder="Remarks" required=""></textarea>
                            </fieldset>
                            <fieldset>
                              <button type="pay" id="form-submit" class="btn">Pay</button>
                            </fieldset>
                          </form>
-->
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="more-info">
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>
            <!-- End .HorizontalTab -->

          </div>

        </div>

      </div>

    </section>
    <!-- End HorizontalTab style 6 -->


      <footer>
        <p>Copyright &copy; Prominence

        | Design by: <a href="http://www.inkers.in" target="_blank"><em>inkers Inc.</em></a></p>
      </footer>
     <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/easyResponsiveTabs.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>


    </body>
</html>
