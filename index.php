

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
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Newline CSS Template with a video background</title>
<!--
Newline Template
http://www.templatemo.com/tm-503-newline
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

        <div class="overlay"></div>
        <section class="top-part">
          <video controls autoplay loop>
            <source src="videos/video.mp4" type="video/mp4">
            <source src="videos/video.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video>
        </section>
        
        <section class="cd-hero">

          <div class="cd-slider-nav">
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li class="selected"><a href="#0"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Welcome</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/about-icon.png"></div><h6>About Us</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/featured-icon.png"></div><h6>Services</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/projects-icon.png"></div><h6>Projects</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/contact-icon.png"></div><h6>Contact Us</h6></a></li>
              </ul>
            </nav> 
          </div> <!-- .cd-slider-nav -->

          <ul class="cd-hero-slider">

            <li class="selected">
              <div class="heading">
                <h1>PROMINENCE</h1>
                <span>STRUCTURAL DESIGN CONSULTANT</span>
              </div>
              <div class="cd-full-width first-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content first-content">
                        <h4>Let’s Talk More About Newline</h4>
                        <p>Welcome to PROMINENCE DESIGN AND CONSULTANCY, for modern, Economic and Dynamic designers in the field of civil engineering. The team prominence is comprises of professionals having Master Knowledge in all aspects of civil engineering structures</p>
<!--
                        <div class="primary-button">
                          <a href="#">Discover More</a>
                        </div>
-->
						<div style="margin-top:18px">
						</div>  
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>About Us</h1>
                <span>Get More Info About Our Agency</span> 
              </div>
              <div class="cd-half-width second-slide">   
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="img/left-about-image.jpg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>Who we are?</h4>
                              <p>We are a global network of experts working with clients, communities to develop and implement innovative solutions to the world’s most complex challenges.</p>
<!--
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
-->
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>What we do?</h4>
                              <p>We are dedicated to tackling our clients’ toughest infrastructure and natural resource challenges with optimism and imagination. Explore all our capabilities, see our projects and connect with us, so together, we can turn challenge into opportunity.</p>
<!--
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
-->
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="img/right-about-image.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>SERVICES</h1>
                <span>We provide these Services</span> 
              </div>
              <div class="cd-half-width third-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content third-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="img/left-feature-image.png">
                          </div>
                          <div class="col-md-5">
                            <div class="right-feature-text">
<!--                              <h4>Featured Product: <em>Newline</em></h4>-->
                              <div class="feature-list">
                                <ul>
                                  <p>- Structural design of reinforced cement concrete structures Residential and commercial buildings.</p>
                                  <p>- Design of Steel Structures.</p>
                                  <p>- Design of Bridges, Culverts and Regulators.</p>
                                  <p>- Planning of Buildings</p>
                                  <p>- Approval.</p>
								  <p>- Student Project Guidance.</p>
                                </ul>
                              </div>
								<h5 style="margin-top:20px;">On Going Projects</h5>
								<div class="feature-list">
								<ul>
                                  <p>- Commercial flats in Sarjapura, Bangalore.</p>
                                  <p>- Residential projects in Bangalore.</p>
                                  <p>- Residential Projects in Chickmagalure Karnataka.</p>
                                </ul>
								</div>
<!--						   
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
-->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Our projects</h1>
                <span>Here you can check our recent projects</span> 
              </div>
              <div class="cd-half-width fourth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fourth-content">
                        <div class="row">
                          <div class="col-md-3 project-item">
                            <a href="img/item-01.jpg" data-lightbox="image-1"><img src="img/project-item-01.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-02.jpg" data-lightbox="image-1"><img src="img/project-item-02.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-03.jpg" data-lightbox="image-1"><img src="img/project-item-03.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-04.jpg" data-lightbox="image-1"><img src="img/project-item-04.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-05.jpg" data-lightbox="image-1"><img src="img/project-item-05.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-06.jpg" data-lightbox="image-1"><img src="img/project-item-06.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-07.jpg" data-lightbox="image-1"><img src="img/project-item-07.jpg"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="img/item-08.jpg" data-lightbox="image-1"><img src="img/project-item-08.jpg"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Contact us</h1>
                <span>You'll be responded within 48 hrs</span> 
              </div>
              <div class="cd-half-width fivth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fivth-content">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="left-info">
                              <p>
								  MAIL : <br><a href="mailto:prominencedesign15@gmail.com">prominencedesign15@gmail.com</a><br>
								  PHONE : <br><a href="tel:9495717528">9495717528</a><br><br>
                              <em>Address1 Address2<br>Address 3 Address 4 </em>
                              </p>
                              <ul class="social-icons">
                                <i><a href="#"><i class="fa fa-facebook"></i></a></i>
                                <i><a href="#"><i class="fa fa-twitter"></i></a></i>
                                <i><a href="#"><i class="fa fa-linkedin"></i></a></i>
                                <i><a href="#"><i class="fa fa-rss"></i></a></i>
                                <i><a href="#"><i class="fa fa-behance"></i></a></i>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="row">
                              <form id="contact" action="" method="post">
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="contactName" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="contactEmail" type="email" class="form-control" id="email" placeholder="Email" required="">
                                  </fieldset>
                                </div>
								<div class="col-md-4">
                                  <fieldset>
                                    <input name="phone" type="text" class="form-control" id="phone" pattern="[789][0-9]{9}"  placeholder="Mobile Number" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" name="send" id="form-submit" class="btn">Send Message</button>
                                  </fieldset>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>
          </ul> <!-- .cd-hero-slider -->
        </section> <!-- .cd-hero -->


        <footer>
          <p>Copyright &copy; 2017 Your Company 
                                
        	| Designed by <a href="http://inkers.in" target="_parent"><em>inkers.Inc</em></a></p>
        </footer>
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>