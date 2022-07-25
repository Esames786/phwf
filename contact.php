<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Humanity || Responsive HTML 5 Template</title> 

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">

 

</head>
<body>

<div class="boxed_wrapper">


<?php include './header.php' ?>
 

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
    <div class="container">
        <div class="box">
            <h1>Contact us</h1>
        </div>
    </div>
</div>
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="index-2.html">Home</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>

                <li>
                    Contact us
                </li>
            </ul>
        </div>
        <div class="pull-right">
            <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
        </div>
    </div>
</div>




<section class="contact sec-padd2">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>Send Your <span class="thm-color">Message</span></h2>
                </div>
                <div class="default-form-area">
                    <form id="contact-form" name="contact_form" class="default-form" action="http://st.ourhtmldemo.com/new/humanity-html/inc/sendmail.php" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Mail *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                </div>
                            </div>   
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="thm-btn" type="submit" data-loading-text="Please wait...">send message</button>
                                </div>
                            </div>   

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>Quick <span class="thm-color">Contact</span></h2>
                </div>
                <div class="content">
                    <div class="text">
                        <p>Anyone can contact us by the mentioned address and social media platform. We will be happy to hear your problems. You can also leave us a message via message box. One of our team members will contact you shortly. We are present on different social media platform like Facebook, Twitter, Whatsapp, LinkedIn and Instagram. </p>
                    </div>
                    <ul class="contact-info">
                        <li><i class="icon-phone"></i><span> Phone:</span> +92-302-28715563</li>
                        <li><i class="icon-back"></i><span>Email:</span>  phwfoundation2011@gmail.com</li>
                    </ul>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-feed"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
            

        </div>
    </div>
</section>



<section class="home-google-map">
    <div 
        class="google-map" 
        id="contact-google-map" 
        data-map-lat="42.568692" 
        data-map-lng="72.930105" 
        data-icon-path="images/logo/map-marker.png"
        data-map-title="Chester"
        data-map-zoom="8" >

    </div>

</section>





<?php include './footer.php' ?>

                                                                                             
    <!-- Scroll Top  -->
    <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
    <!-- preloader  -->
    <div class="preloader"></div>
   
   <?php include './donate.php'?>
  
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/imagezoom.js"></script> 
    <script src="js/jquery.magnific-popup.min.js"></script> 
    <script src="js/jquery.polyglot.language.switcher.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/validation.js"></script> 
    <script src="js/wow.js"></script> 
    <script src="js/jquery.fitvids.js"></script> 
    <script src="js/nouislider.js"></script> 
    <script src="js/bootstrap-select.min.js"></script>


    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> 
    <script src="js/gmap.js"></script>

    <script id="map-script" src="js/default-map.js"></script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    <script src="js/custom.js"></script>

</div>
    
</body>
</html>                 