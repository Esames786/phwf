<?php

function get_contact($column)
{

    $query = \App\contactus::first();
    if (!empty($query->$column)) {
        return $query->$column;
    } else {
        return "NOT FOUND";
    }

}

?>

<script async id="slcLiveChat" src="https://widget.sonetel.com/SonetelWidget.min.js" data-account-id="207423285"></script>
<footer class="site-footer footer-dark">
    <!-- FOOTER BLOCKES START -->
    <div class="footer-top overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">About Company</h4>

                        <div class="logo-footer clearfix p-b15">
                            <a href="/laado"> <img src="{{ url('assets2')}}/images/laddo_logo.jpg" style="height:100px;width: 200px;padding: 10px;border-radius: 20px"  alt=""/></a>
                        </div>
                        <p>Laa-Do Is one of the leading company in pakistan providing services to more than millions of people , Specially in Major Cities Like Karachi.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">Useful links</h4>
                        <ul>
                            <li><a href="/about_us">About</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/service">Services</a></li>
                            <li><a href="/contact_us">Contact Us</a></li>

                        </ul>
                    </div>
                </div>
                <!-- NEWSLETTER -->
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget_newsletter">
                        <h4 class="widget-title">Newsletter</h4>

                        <div class="newsletter-bx">
                            <form role="search" method="post">
                                <div class="input-group">
                                    <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL"
                                           type="text">
                                    <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i
                                                        class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- SOCIAL LINKS -->
                    <div class="widget widget_social_inks">
                        <h4 class="widget-title">Social Links</h4>
                        <ul class="social-icons social-square social-darkest">
                            <li><a href="{{get_contact("fb_link")}}" class="fa fa-facebook"></a></li>
                            <li><a href="{{get_contact("twitter_link")}}" class="fa fa-twitter"></a></li>
                            <li><a href="{{get_contact("linkdin_link")}}" class="fa fa-linkedin"></a></li>
                            <li><a href="{{get_contact("youtube_link")}}" class="fa fa-youtube"></a></li>
                            <li><a href="{{get_contact("instagram_link")}}" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-sm-6  p-tb20">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md text-primary">
                            <span class="iconmoon-travel"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Address</h5>

                            <p>{{get_contact("address")}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6  p-tb20 ">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                        <div class="icon-md text-primary">
                            <span class="iconmoon-smartphone-1"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Phone</h5>

                            <p class="m-b0">{{get_contact("phone")}}</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 p-tb20">
                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md text-primary">
                            <span class="iconmoon-email"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Email</h5>

                            <p class="m-b0">{{get_contact("email")}}</p>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main"></div>
        <div class="constrot-strip"></div>
        <div class="container p-t30">
            <div class="row">
                <div class="wt-footer-bot-left">
                        <span
                                class="copyrights-text">© <?PHP date_default_timezone_set("America/New_York"); ECHO  date("Y") ?> Your Company. All Rights Reserved. Designed By <a >Laado</a>.</span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right">
                        <li><a href="javascript:void(0);">Terms & Condition</a></li>
                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                        <li><a href="/contact_us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JAVASCRIPT  FILES ========================================= -->
<script type="text/javascript" src="{{ url('assets2')}}/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script type="text/javascript" src="{{ url('assets2')}}/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script type="text/javascript" src="{{ url('assets2')}}/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script type="text/javascript" src="{{ url('assets2')}}/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script type="text/javascript" src="{{ url('assets2')}}/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script type="text/javascript" src="{{ url('assets2')}}/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script type="text/javascript" src="{{ url('assets2')}}/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script type="text/javascript" src="{{ url('assets2')}}/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script type="text/javascript" src="{{ url('assets2')}}/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script type="text/javascript" src="{{ url('assets2')}}/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script type="text/javascript" src="{{ url('assets2')}}/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
<script type="text/javascript" src="{{ url('assets2')}}/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script type="text/javascript" src="{{ url('assets2')}}/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script type="text/javascript" src="{{ url('assets2')}}/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script type="text/javascript" src="{{ url('assets2')}}/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->
