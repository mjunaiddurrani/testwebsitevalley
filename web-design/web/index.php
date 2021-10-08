<!doctype html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<?php
if (isset($_SERVER['HTTPS'])) {
$requesMet = "https";
}else{
$requesMet = "http";
}
?>
<!--  -->

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/packages.php');?>
<base href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].'/web-design/web/' ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon5e1f.ico?v=2">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="css/m-style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/tstyles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>

<title>Custom Web Design Services | Web Development Company – The Web Founders</title>

<meta name="description" content="We are best custom web development company in San Francisco offering professional custom web design services at affordable prices. Discuss your project now!" />



<style>


@media only screen and (max-width: 767px){

#header-sroll {
    background-color: transparent;
}
.banr-txt {
    padding-top: 1px;
}
}


@media only screen and (min-width: 0px) and (max-width: 480px){
header .logo a {
    width: 132px;
    height: 67px;
}
}
.nav-toggle {
    opacity: 1;
}
@media only screen and (max-width: 767px) and (min-width: 0px){
header #header-sroll .call-action span {
    color: #fff !important;
}
}
/* header #header-sroll:hover .call-action span {
    color: #68bef1;
} */
div.subservice-packages {
	border-top: none;
	border-bottom: none;
}
.breakdown .d_t {
	height: 0;
}
.secondary-nav-wrap {
	display: none;
}
.subservice-packages.section-padding {
	padding-bottom: 0px;
}
.hero-custom-logo .d_t, .hero-custom-logo .d_c {
    width: 100%;
    padding-top: 70px;
}

.hero-banner{    
    background-image: none;
    background-repeat: no-repeat;
    background-size: cover;
    float: none !important;}








</style>

</head>
<body class="mainbody">






<style>
.main-scroll-overlay .slimScrollBar {
    display: none !important;
}
</style>


<!-- Modal -->
<div class="modal fade modalForDiscount" id="modalForDiscount" tabindex="-1" role="dialog" aria-labelledby="modalForDiscount" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-body">
    <button type="button" class="close modalClose" data-dismiss="modal">&times;</button>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 mbl-none p-0">
            <!--<a type="button" class="modalClose" data-dismiss="modal" style="text-align: right;"><i class="fa fa-times"></i></a>-->
          
          <!-- <img src="img/footer.jpg" style="width:100%;height:100%;" alt=""> -->
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-12 text-white">
          <div class="modalDetailsOf">
            <div class="row modalDetailsOfRow text-center">
              <p class="mainH1 pt-5 w-100 text-white">LET'S GET STARTED</p>
              <hr class="hrModal">
              
            </div>
            <p class="text-center modal-para p-md-4 text-white">To schedule a consultation, please send us your details. We will guide you through the entire design and branding process.</p>
            <form action="/leads/" method="POST" class="modal-fom">
              <!-- <input type="hidden" name="setprice" class="setprice">  -->
              <div class="row">
                <div class="col-md-6">
                  <input required type="text" name="name" class="form-control" placeholder="Write your full name">
                  <input required type="email" name="email" class="form-control" placeholder="Write your email address">
                  <input required type="tel" name="phone"  class="form-control" placeholder="Write your phone number">
                  <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">   
                  <input type="hidden" name="brand" value="thewebfoundersuk">   
                  <input type="hidden" name="tag" value="modal-auto">
                  <input type="hidden" name="price" value="null">
                  <input type="hidden" name="news" value="1">
                </div>
              <div class="col-md-6 ">
                <textarea name="brief" class="form-control"  placeholder="Write your project description"></textarea>
              </div>
              </div>
              
                <label class="containerCheckBox">
                  <input  type="checkbox" name="subscription" checked disabled>
                  <span class="modal-check-para">I want to receive the latest news, updates and special offers directly to my inbox.</span>
                </label>
                <input type="hidden" name="set" value="true">
                <div class="text-center pb-3">
                  <button class="btn btnTheme btn-submit btn-modal font-weight-bold pl-md-4 pr-md-4 p-md-3">SUBMIT NOW</button>
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
<header>
  <div class="header">
    <div id="header-sroll" class="wow">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
            <div class="logo"><a href="/" title="The Web Founders"> </a></div>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 text-right">
            <div class="header-content">
              <div class="call-action"> 
              <span onclick="window.location.href='tel:6465829666'" ><small><i class="fa fa-calendar" aria-hidden="true"></i></small>Book a Call</span> 
              <span onclick="window.location.href='tel:6465829666'"><small><i class="fa fa-phone-square" aria-hidden="true"></i></small>+44 2038 834810</span>
               </div>
              <div class="main-menu">
                <nav id="nav">
                  <ul id="navigation">
                    <li><a data-active="home" class="nav-anim" href="/">Home</a></li>
                    <li><a data-active="about" class="nav-anim" href="/about-us/">About</a></li>
                    <li><a data-active="services" class="nav-anim" href="javascript:void(0)">Services </a>
                      <ul>
                        <li><a class="nav-anim-dd" href="/wordpress-website/">Wordpress Website </a></li>
                        <li><a class="nav-anim-dd" href="/ecommerce-website/">Ecommerce Website</a></li>
                        <li><a class="nav-anim-dd" href="/logo-services/">Logo Services</a></li>
                        <li><a class="nav-anim-dd" href="/seo-services/">SEO Services</a></li>
                        <li><a class="nav-anim-dd" href="/mobile-app-development/">Mobile App Development</a></li>
                        <li><a class="nav-anim-dd last" href="/web-app-development/">Web App Development</a></li>
                        <li><a class="nav-anim-dd" href="/video-animation/">Video Animation</a></li>
                        <li><a class="nav-anim-dd" href="/domain-hosting/">Domain Hosting</a></li>
                        <li><a class="nav-anim-dd" href="/website-maintenance/">Website Maintenance</a></li>
                        <li><a class="nav-anim-dd" href="/branding/">Branding</a></li>
                        
                        
                        

         
                      </ul>
                    </li>
                    <li><a data-active="packages" class="nav-anim" href="/packages/">Packages</a></li>
                    
                   
                    <li><a data-active="showcase" class="nav-anim" href="/portfolio/">Portfolio</a></li>
                    
                    
                    <li><a data-active="contact" class="nav-anim" href="/contact-us/">Contact us</a></li>
                    
                  </ul>
                </nav>
              </div>
              <div class="navicon wow"> <a class="nav-toggle" href="#"><span></span></a> </div>


              <div class="header-nav">
              <div class="container">
                <div class="logo-inside"><a href="/" title="The Web Founders"></a></div>

                
                
                <nav>
                 <div class="row">
                  <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                  <ul class="primary-nav clearfix">
                  
                  

                    <li class="feature-menu"><a href="/">Home </a></li>
                    <li class="feature-menu"><a href="/about-us/">About</a></li>


                    <li class="feature-menu"><a href="/packages/">Packages</a></li>
                    <li class="feature-menu"><a href="/portfolio/">Portfolio</a></li>
                    <li class="feature-menu"><a href="/contact-us/">Contact us</a></li>
                    
                   
                  </ul>
                  </div>
                  <div class="col-md-8 col-lg-8  col-sm-6 col-xs-12">
                  <div class="main-scroll-overlay">
                  
                    <ul id="parent" class="page-overlay-inner">





                        <li class="child"><a href="/wordpress-website/">Wordpress Website</a></li>
                        <li class="child"><a id="brand-identity" href="/ecommerce-website/">Ecommerce Website</a></li>
                        <li class="child"><a href="/logo-services/">Logo Services</a></li>
                        <li class="child"><a id="brand-identity" href="/seo-services/">SEO Services</a></li>
                        <li class="child"><a id="brand-identity" href="/mobile-app-development/">Mobile App Development</a></li>
                        <li class="child"><a href="/web-app-development/">Web App Development</a></li>
                        <li class="child"><a href="/video-animation/">Video Animation</a></li>
                        <li class="child"><a href="/domain-hosting/">Domain Hosting</a></li>
                        <li class="child"><a href="/website-maintenance/">Website Maintenance</a></li>
                        <li class="child"><a href="/branding/">Branding</a></li>
                        
                        
                    </ul>
                    <div class="overlay-scroll-btn">
                        <div id="down"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                         <div id="up"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                     </div>   
                        
                      
                   </div>
                  </div>
                 </div>
                </nav>
                
                
                <div class="dropmenu_footer">
                  <div class="row">
                    <div class="col-md-12">
                      <p>
                      <div style="display: none;"> <a href="#">English</a> <a href="#" class="active-lang">Arabic</a> </div>
                      <span class="copyright">© 2019 The Web Founders | All rights reserved.</span> <span class="pull-right"> 
                      <a target="_blank" href="https://www.facebook.com/thewebfounders"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                      <a target="_blank" href="https://twitter.com/thewebfounders"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                      <a target="_blank" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                      <a target="_blank" href="https://www.instagram.com/thewebfounders"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      <a target="_blank" href="https://medium.com/@thewebfounders"><i class="fa fa-medium" aria-hidden="true"></i></a>
                      <a target="_blank" href="https://www.pinterest.com/thewebfounders/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> 
                      <a target="_blank" href="https://vimeo.com/thewebfounders"><i class="fa fa-vimeo" aria-hidden="true"></i></a> 
                      <a target="_blank" href="https://dribbble.com/thewebfounders"><i class="fa fa-dribbble" aria-hidden="true"></i></a> </span>
                      </p>
                    </div>
                    <div class="col-md-8" style="display: none;">
                      <div class="footer-links">
                        <ul class="footer-group">
                          <li><a href="#">Site Map</a></li>
                          <li><a href="#">Site Feedback</a></li>
                          <li><a href="#">Work With Us</a></li>
                          <li><a href="https://www.thewebfounders.co.uk/privacy-policy">Privacy</a></li>
                          <li><a href="https://www.thewebfounders.co.uk/terms">Terms of Service</a></li>
                          <li><a href="#">Terms of Sale</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            </div>
            <div class="top-action"> <a class="btn-line-fill" href="Get-a-Free-Quote.html">GET A FREE QUOTE</a> </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</header>





<section class="floating_wrap">
  <div class="btns_wrap">
    
    <a href="javascript:;" class="chat_wrap" onclick="$zopim.livechat.window.toggle()">
      <i class="fa fa-comment"></i>
      <span>Chat With Us</span>
    </a>
    <a href="tel:+6465829666" class="call_wrap">
      <i class="fa fa-phone"></i>
      <span>+44 2038 834810</span>
    </a>
  </div>

  <div class="float_form_box">
    <div class="floating_form">
      <div class="floating_strip">
        <div class="rotatekaro">
          <a href="javascript:;" class="">Get Free Consultancy</a>
        </div>
      </div>
      <div class="floating_inner">
        <h3>Signup Now</h3>
        <div class="form_wrap">
          <div class="hero_form">
  
   <form method="POST" action="/leads/" autocomplete="off">
    <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">   
    <input type="hidden" name="brand" value="thewebfoundersuk">   
    <input type="hidden" name="tag" value="modal-auto">
    <input type="hidden" name="price" value="null">
    <input type="hidden" name="news" value="1">
  <div class="row">         <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
      <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="required">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
      <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 margin-bottom-20 field-mergedright">
      <input type="number" min="1" autocomplete="off" class="form-control" placeholder="phone" name="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="">
    </div>
  <div class="col-xs-12 col-sm-12 col-md-12 margin-bottom-20 field-mergedright">
     <textarea class="form-control" name="brief" placeholder="Your Project Specification" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Project Specification'" required></textarea>
    </div>
  
  <input type="hidden" name="redirect" value="thankyou">
   
          <!--<input type="hidden" name="additional" value="not applicable">-->
      <input type="hidden" name="page" value="web.html">
    <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedleft mid-body">
      <div class="text-center">
        <input class="btn-fill btn-quote" type="submit" id="quoteSubmit" name="quote" value="Get Free Consultancy">
        
      </div>
    </div> 
  </div>
</form>




</div>        </div>
      </div>
    </div>
  </div>

</section>


<section class="hero hero-home hero-custom-logo hero-customize-logo webmbres">
  
  <div class=" hero-banner" style="background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;">
    <div class="container">
      <div class="d_t">
        <div class="d_c">
          <div class="actions wow fadeInDown" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInDown;">
            <div class="row ">
              <div class="col-12 col-lg-6 paddingtop customize-fields">
                <div class="banr-txt">
                  <h2>We build website designs that build your business</h2>
                  <p>Our Creativity Knows No Bounds. The Web Founders is a Full-Service Agency that conducts extensive research on your target market and then designs effective solutions to target your customers in the most efficient way possible. Which is something most companies lack, we know we checked!</p>
                  <ul>
                    <li>Get an edge over your competition with your Custom Branding Solution</li>
                    <li>Cutting Edge, User Friendly & Responsive Website Designs</li>
                    <li>Reach a Wider array of audience with our Designs</li>
                    <li>With The Web Founders you get Ideas Realized.</li>
                    
                  </ul>
                  <a href="javascript:;" onclick="$zopim.livechat.window.toggle()" class="start">Get Your Web Design </a>
                  <a href="tel:+6465829666" class="nomber">Call Us: <span>+44 2038 834810</span></a>
                  
                  <div class="banner-bot">
                    <ul>
                      <li>
                        <a href="javascript:;" >
                          <img src="img/rateimg.png" style="padding-bottom:30px;"> 
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;" >
                          <img src="img/gpartner.png" style="padding-bottom:30px;">
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          <img src="images/partner1.png">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                
                
              </div>
              <div class="col-12 col-lg-6 ">
                <div class="topformcontainer">
                  <div class="topformwrap">
                    <!-- <div class="formheading">
                      <h2>Avail This Exclusive Offer <span>Book this discount offer for later use.</span></h2>
                    </div> -->
                    <div class="main-percent">
                      <div class="per-box1">
                        <figure>
                          <img class="hme-nmrl-img" src="img/50percent.png" alt="">
                        </figure>
                      </div>
                      <div class="per-box2">
                        <h3><span>chat</span> <p>with us to avail</p> 50% off</h3>
                      </div>
                    </div>
                    <div class="formbody">
                      <section class="banform myban">
                <div class="">
                  <div class="row">
                    <div class="">
                      <div class="ban-form">
                        <form class="cmxform" id="bannerform" method="POST" action="/leads/">
                          <input type="hidden" name="route" value="/">   
                          <input type="hidden" name="brand" value="thewebfoundersuk">   
                          <input type="hidden" name="tag" value="modal-auto">
                          <input type="hidden" name="price" value="null">
                          <input type="hidden" name="news" value="1">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="fldset">
                                <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name" required="">
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="fldset">
                                <input id="cemail" type="email" name="email" placeholder="Enter email here" required="">
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="fldset">
                                <!-- <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-3"><div class="flag-container"><div class="selected-flag" tabindex="0" title="Pakistan : +92"><div class="iti-flag pk"></div><div class="selected-dial-code">+92</div><div class="iti-arrow"></div></div></div><input id="phone-coun" name="phone" type="number" placeholder="Phone Number" required="" autocomplete="off">
                                </div> -->
                                <input id="phone" type="tel" name="phone" />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="fldset">
                                <textarea name="brief" id="" rows="7" placeholder="Talk About Your Project"></textarea>
                              </div>
                            </div>
                            
                            <div class="col-lg-12">
                              <div class="fldset">
                                <input name="submit" type="submit" placeholder="Connect With Us" required="">

                                <script type="text/javascript">
                              document.getElementById('location').value = window.location.href;
                            </script>
                            <input class="" type="hidden" name="ctry" value="">
                            <input type="hidden" name="pc" value="+92+92+92+92">
                            <input type="hidden" name="hiddencapcha" value="">
                            <input type="hidden" id="location" name="locationURL" value="https://www.thewebfounders.co.uk/">
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>      </div>
                  </div>
                  <!-- <div class="topformswitch">
                    <h4> Avail 50% Discount</h4>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   
</section>


<section class="mainform visibleweb">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="wrap">
          <div class="col-lg-5">
            <h3>Your Future awaits, Its Time to Launch</h3>
            <p>Let the Web Founders tell your story with their professional website designs</p>
            <figure class="formfig">
            
            </figure>
          </div>
          <div class="col-lg-6 col-lg-offset-1">
            <div class="restingform">
              <div class="hero_form">
  
   <form method="POST" action="/leads/" autocomplete="off">
    <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">   
    <input type="hidden" name="brand" value="thewebfoundersuk">   
    <input type="hidden" name="tag" value="modal-auto">
    <input type="hidden" name="price" value="null">
    <input type="hidden" name="news" value="1">
  <div class="row">         
    <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
      <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="required">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
      <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 margin-bottom-20 field-mergedright">
      <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Phone Number" name="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="">
    </div>
  <div class="col-xs-12 col-sm-12 col-md-12 margin-bottom-20 field-mergedright">
     <textarea class="form-control" name="brief" placeholder="Your Project Specification" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Project Specification'" required></textarea>
    </div>
  
   
    <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedleft mid-body">
      <div class="text-center">
        <input class="btn-fill btn-quote" type="submit" id="quoteSubmit" name="quote" value="Get Free Consultancy">
        
      </div>
    </div> 
  </div>
</form>




</div>            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="responsive-unique-design">
  <section class="section-white brandsBg">
    <div class="container">

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-12 paddingZero"><a href="#" class="slideImg text-center">

              <img src="img/secimgright-web.jpg">
            </a></div>
          </div>
          

      </div>

    </div>
  </section>
</div>

<section class="counter">
    <ul class="packslider d-block d-md-flex">
      <li class="">
        <a href="javascript:;" tabindex="-1">
          <figure>
            <img src="img/clock-icon.png">
          </figure>
          <div class="wrap">
            
            <p>We Transform ideas into reality with our website designs.</p>
            
          </div>
        </a>
      </li>
      <li class="" style="">
        <a href="javascript:;" tabindex="-1">
          <figure>
            <img src="img/chat-icon.png">
          </figure>
          <div class="wrap">
            
            <p>Our Experiences Business Analysts will help you realize your ideas into reality.</p>
          </div>
        </a>
      </li>
      <li class="dkblk">
        <a href="javascript:;" tabindex="-1">
          <figure>
            <img src="img/glob-icon.png">
          </figure>
          <div class="wrap">
            <p>Over 10 years of Experience establishing websites worldwide.</p>
          </div>
          
        </a>
      </li>
      <li class="dkblk">
        <a href="javascript:;" tabindex="-1">
          <figure>
            <img src="img/money-icon.png">
          </figure>
          <div class="wrap">
            
            <p>Drive your revenue with custom developed website solutions</p>
          </div>
          
        </a>
      </li>
    </ul>
</section>





<section class="section-padding service-detail service-drop-down hideweb">
  <div class="container">
    <section class="breakdown">
      <div class="row">
        <div class="col-md-7 col-sm-7 col-lg-7 col-xs-12">
          <h3 class="text-left breakdown-before-left">Web Design and Development</h3>
                      <p class="text-left">Web aesthetics are perhaps one of the most important things that we focus on at our website design company when creating a brand that aims to conquer the market. With more than half the population on earth wise enough to be online, it is important to make sure your business is too. Lucky for you, at The Web Founders we provide custom and professional web design services for your business.</p>
                      <p class="text-left">At The Web Founders, we consider website design as an essential part of the overall online existence. We’re a professional website design and development company that focuses on creating gorgeous web user interfaces. We are an affordable web design company that focuses on creating website design services that are easy on the wallet and attractive. We’re a group of web designers and developers that value top quality design solutions. Each web designer part of our custom web design company is efficient in generating custom website design solutions for our customers globally. From Ecommerce website design to corporate web design, there’s nothing our professional website designers can’t handle. As a matter of fact, we constantly train our team of professional website designers for such corporate solutions. Need Ecommerce designers and developers that work dedicatedly on the same project? No problem. Our ecommerce designers and developers are just what you’re looking for.</p>
                    <ul>
                                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Web Interface Design</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> User Interface Prototyping</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Back-End Development</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Cross Platform Web Development</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> CMS Development</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Portal Development</li>
                      </ul>
        </div>
        <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12 height-for-quote">
          <div class="d_t"> <form method="POST" action="https://www.thewebfounders.co.uk/quote/save" id="quoteForm" autocomplete="off">
  <div class="row">
          <div class="col-md-12 col-xs-12 margin-bottom-10">
      <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"  required="required"/>
    </div>
    <input type="hidden" name="_token" value="Y4M3O5ExAzJNiAwHGILiTbGx68DBsuoa49enunvp">
    <div class="col-md-12 col-xs-12 margin-bottom-10">
      <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"  required="required"/>
    </div>
    <div class="col-md-12 col-xs-12 margin-bottom-10 ">
      <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Phone Number" name="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required />
    </div>
    <div class="col-md-12 col-xs-12 margin-bottom-10">
      <input type="text" autocomplete="off" class="form-control" placeholder="Country" name="country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'"   required="required"/>
    </div>
        
                      <input type="hidden" name="interest" value=" Web Design and Development ">
            
    
                         <input type="hidden" name="budget" value="not required">
              <div class="col-md-12 col-xs-12 margin-bottom-20">
      <textarea class="form-control" name="description" placeholder="Talk about your project" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Description'" required></textarea>
    </div>
    <div class="col-md-12 col-xs-12 text-center">
      <div class="text-center mid-body">
        <input class="btn-fill btn-quote" type="submit" id="quoteSubmit" name="quote" value="Send Query" />
      </div>
    </div>
  </div>
  <input type="hidden" name="page" value="web.html" />
</form>
 </div>
        </div>
      </div>
    </section>
  </div>
</section>


<div class="boder-space visibleweb webportsec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="wow fadeInDown" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">Making brands the best of what they can be</h3> 
        <p class="text-center wow fadeInDown" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;">Our team of experts focus on the needs of our client and their specific requirements to develop a custom solution tailored to their needs. Our ideology is DEFYING BRANDING NORMS, SETTING NEW HORIZONS! This is one of the main reasons why our work is internationally recognized.</p>
      </div>
    </div>
    <div class="row">
      <div class="tab-custom">
        <ul class="tabbing-links">
          <li class="current" data-targetit="tab-website">Website</li>
          <li data-targetit="tabs-logo">Logo</li>
          <li data-targetit="tabs-branding">Branding</li>
          <li data-targetit="tabs-video-animation">Video Animation</li>
          <li data-targetit="tabs-mobile-app">Mobile App</li>
        </ul>

        <div class="tabs tab-website current">
          <div class="portwrapper ">
            <ul class="portfoliolist">
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_1.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy" src="/images/home/portfolio/website/thumbnail/web_design_1.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_2.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_2.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_3.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_3.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_4.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_4.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_5.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_5.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_6.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_6.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_7.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_7.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_8.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_8.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_9.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_9.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_10.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_10.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_11.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_11.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_12.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_12.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/website/web_design_13.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/website/thumbnail/web_design_13.jpg">
                  </figure>
                </a>
              </li>
              
              
            </ul>
          </div>
        </div>

        <div class="tabs tabs-logo">
          <div class="portwrapper ">
            <ul class="portfoliolist">
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_1.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_1.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_2.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_2.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_3.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_3.jpg">
                  </figure>
                </a>
              </li>
              
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_4.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_4.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_5.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_5.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_6.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_6.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_1n-(1).jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_1n-(1).jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_1n-(2).jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_1n-(2).jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_1n-(3).jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_1n-(3).jpg">
                  </figure>
                </a>
              </li>
              
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_1n-(4).jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_1n-(4).jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_1n-(5).jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_1n-(5).jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/logos/logo_1n-(6).jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/logos/logo_1n-(6).jpg">
                  </figure>
                </a>
              </li>
              
            </ul>
          </div>
        </div>

        <div class="tabs tabs-branding">
          <div class="portwrapper ">
            <ul class="portfoliolist">
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-16.png" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-16.png">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-15.png" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-15.png">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-14.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-14.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-13.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-13.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-12.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-12.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-11.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-11.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-10.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-10.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-9.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-9.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-8.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-8.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-7.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-7.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-6.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-6.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-5.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-5.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-4.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-4.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-3.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-3.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/branding/brand-2.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/branding/brand-2.jpg">
                  </figure>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="tabs tabs-video-animation">
          <div class="portwrapper ">
            <ul class="portfoliolist">
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/video/vid_1.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/video/vid_1.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/video/vid_2.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/video/vid_2.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/video/vid_3.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/video/vid_3.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/video/vid_4.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/video/vid_4.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/video/vid_5.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/video/vid_5.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/video/vid_6.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/video/vid_6.jpg">
                  </figure>
                </a>
              </li>
             
              
            </ul>
          </div>
        </div>

        <div class="tabs tabs-mobile-app">
          <div class="portwrapper ">
            <ul class="portfoliolist">
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_1.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_1.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_2.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_2.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_3.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_3.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_4.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_4.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_5.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_5.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_6.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_6.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_7.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_7.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_8.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_8.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_9.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_9.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_10.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_10.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_11.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_11.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_12.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_12.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_13.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_13.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_14.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_14.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_15.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_15.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_16.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_16.jpg">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="/images/home/portfolio/mobileApp/app_design_17.jpg" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="/images/home/portfolio/mobileApp/app_design_17.jpg">
                  </figure>
                </a>
              </li>
              
            </ul>
          </div>
        </div>

        <div class="tabs tabs-personal">
          <div class="portwrapper ">
            <ul class="portfoliolist">
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="img/port/kt-afroblue-initial.png" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="img/port/kt-afroblue-initial-t.png">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="img/port/kt-walking-paws-initial.png" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="img/port/kt-walking-paws-initial-t.png">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="img/port/ms-torie-rhyan-custom-art.png" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="img/port/ms-torie-rhyan-custom-art-t.png">
                  </figure>
                </a>
              </li>
              
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="img/port/nk-amber-lynn-jonesextra.png" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="img/port/nk-amber-lynn-jonesextra-t.png">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="img/port/rajsehmi-sas.png" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="img/port/rajsehmi-sas-t.png">
                  </figure>
                </a>
              </li>
              <li class="border-box-effect">
                <a class="" data-fancybox="port" href="img/port/tinarehman-sas-approved.png" tabindex="-1">
                  <figure>
                    <img class="lazy"   src="img/port/tinarehman-sas-approved-t.png">
                  </figure>
                </a>
              </li>
              
            </ul>
          </div>
        </div>


      </div>
    </div>


  </div>
</div>

<div class="subservice-packages section-padding">   <div class="package_slide_wrap">
  <div class="container make-left">
    <div class="row">
      <div class="col-md-12">
        <h3>FROM ENTREPRENEUERS TO CORPORATE GIANTS</h3>
        <p class="text-center max_width">
            <!--Our family of WordPress web designers and developers, ecommerce website designers and pretty much any-->
            <!--website design help us stand tall against some of the best website design and development companies online.-->
            <!--Need something different like custom WordPress web designs? Look no further. Our team of WordPress website designers-->
            <!--are enough to take over your project. Additionally, our WordPress website designers also look over the web maintenance-->
            <!--after the project is deployed. Our web design and development team thinks hugely different when it comes to making gorgeous-->
            <!--web interfaces. Reach us today and discuss your web design or development project. We provide our customers with results through pocket-friendly packages.-->
            
            The perfect website is critical for your business. The Web Founders as the leading Full-Service Agency based out of New York, specializes in providing affordable services to businesses globally. 
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <!-- <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="myCard2">
          <p class="font-32 font-w800">Startup Website <br> Package</p>
          <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for static based landing pages.</p>
          <div class="d-inline-flex align-items-center">
            <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£250</span>
            <span class="text-dec-line-thro text-red font-24">£500</span>
          </div>
          <div class="contentScroll">
            <p class="dot-before">5 Stock Photos</p>
            <p class="dot-before">5 Page Website</p>
            <p class="dot-before">3 Banner Design</p>
            <p class="dot-before">1 jQuery Slider Banner</p>
            <p class="dot-before">FREE Google Friendly Sitemap</p>
            <p class="dot-before">Complete W3C Certified HTML</p>
            <p class="dot-before">48 to 72 hours TAT</p>
            <p class="dot-before">Facebook Page Design</p>
            <p class="dot-before">Twitter Page Design</p>
            <p class="dot-before">YouTube Page Design</p>
            <p class="dot-before">Mobile Responsive will be Additional £99*</p>
            <p class="dot-before">CMS will be Additional £149*</p>
          </div>
          <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
          <a href="/pricing/startup-website-package/" class="view-detail ">VIEW DETAILS</a>
          <div class="row bot-links">
            <div class="col-xl-6 border-right">
              <div class="text-yellow">Share your idea?</div>
              <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
            </div>
            <div class="col-xl-6 pl-xl-4">
              <div class="text-yellow">Want to Discuss?</div>
              <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="myCard2">
          <p class="font-32 font-w800">Professional Website <br> Package</p>
          <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for basic startups looking to take it one step at a time.</p>
          <div class="d-inline-flex align-items-center">
            <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£449</span>
            <span class="text-dec-line-thro text-red font-24">£1000</span>
          </div>
          <div class="contentScroll">
            <p class="dot-before">10 Page Website</p>
            <p class="dot-before">CMS / Admin Panel Support</p>
            <p class="dot-before">8 Stock images</p>
            <p class="dot-before">5 Banner Designs</p>
            <p class="dot-before">1 jQuery Slider Banner</p>
            <p class="dot-before">FREE Google Friendly Sitemap</p>
            <p class="dot-before">Complete W3C Certified HTML</p>
            <p class="dot-before">48 to 72 hours TAT</p>
            <p class="dot-before">Facebook Page Design</p>
            <p class="dot-before">Twitter Page Design</p>
            <p class="dot-before">YouTube Page Design</p>
            <p class="dot-before">Dedicated Project Manager</p>
            <p class="dot-before">Complete Deployment</p>
          </div>
          <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
          <a href="/pricing/professional-website-package/" class="view-detail ">VIEW DETAILS</a>
          <div class="row bot-links">
            <div class="col-xl-6 border-right">
              <div class="text-yellow">Share your idea?</div>
              <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
            </div>
            <div class="col-xl-6 pl-xl-4">
              <div class="text-yellow">Want to Discuss?</div>
              <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="myCard2">
          <p class="font-32 font-w800">Elite Website <br> Package</p>
          <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for potential startups and basic revamps for small companies.</p>
          <div class="d-inline-flex align-items-center">
            <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£999</span>
            <span class="text-dec-line-thro text-red font-24">£1999</span>
          </div>
          <div class="contentScroll">
            <p class="dot-before">Upto 15 Unique Pages Website</p>
            <p class="dot-before">Conceptual and Dynamic Website</p>
            <p class="dot-before">Mobile Responsive</p>
            <p class="dot-before">Online Reservation/Appointment Tool (Optional)</p>
            <p class="dot-before">Online Payment Integration (Optional)</p>
            <p class="dot-before">Custom Forms</p>
            <p class="dot-before">Lead Capturing Forms (Optional)</p>
            <p class="dot-before">Striking Hover Effects</p>
            <p class="dot-before">Newsletter Subscription (Optional)</p>
            <p class="dot-before">Newsfeed Integration</p>
            <p class="dot-before">Social Media Integration</p>
            <p class="dot-before">Search Engine Submission</p>
            <p class="dot-before">5 Stock Photos</p>
            <p class="dot-before">3 Unique Banner Design</p>
            <p class="dot-before">1 jQuery Slider Banner</p>
            <p class="dot-before"> Complete W3C Certified HTML</p>
            <p class="dot-before">48 to 72 hours TAT</p>
            <p class="dot-before">Facebook Page Design</p>
            <p class="dot-before">Twitter Page Design</p>
            <p class="dot-before">YouTube Page Design</p>
            <p class="dot-before">Dedicated Project Manager</p>
            <p class="dot-before">Complete Deployment</p>
          </div>
          <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
          <a href="/pricing/elite-website-package/" class="view-detail ">VIEW DETAILS</a>
          <div class="row bot-links">
            <div class="col-xl-6 border-right">
              <div class="text-yellow">Share your idea?</div>
              <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
            </div>
            <div class="col-xl-6 pl-xl-4">
              <div class="text-yellow">Want to Discuss?</div>
              <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="myCard2">
          <p class="font-32 font-w800">Silver Website <br> Package</p>
          <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for strong startups that are looking to build a unique brand identity to help them stand apart from their competitors with a strong brand presence and strong brand revamps for companies.</p>
          <div class="d-inline-flex align-items-center">
            <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£1600</span>
            <span class="text-dec-line-thro text-red font-24">£3200</span>
          </div>
          <div class="contentScroll">
            <p class="dot-before">Custom Made, Interactive, Dynamic &amp; High End Design</p>
            <p class="dot-before">Custom WP (or) Custom PHP Development</p>
            <p class="dot-before">1 jQuery Slider Banner</p>
            <p class="dot-before">Up to 10 Custom Made Banner Designs</p>
            <p class="dot-before">10 Stock Images</p>
            <p class="dot-before">Unlimited Revisions</p>
            <p class="dot-before">Special Hover Effects</p>
            <p class="dot-before">Content Management System (CMS)</p>
            <p class="dot-before">Online Appointment/Scheduling/Online Ordering Integration (Optional)</p>
            <p class="dot-before">Online Payment Integration (Optional)</p>
            <p class="dot-before">Multi Lingual (Optional)</p>
            <p class="dot-before">Custom Dynamic Forms (Optional)</p>
            <p class="dot-before">Signup Area (For Newsletters, Offers etc.)</p>
            <p class="dot-before">Search Bar</p>
            <p class="dot-before">Live Feeds of Social Networks integration (Optional)</p>
            <p class="dot-before">Mobile Responsive</p>
            <p class="dot-before">FREE 5 Years Domain Name</p>
            <p class="dot-before">Free Google Friendly Sitemap</p>
            <p class="dot-before">Search Engine Submission</p>
            <p class="dot-before">Complete W3C Certified HTML</p>
            <p class="dot-before">Industry Specified Team of Expert Designers and Developers</p>
            <p class="dot-before">Complete Deployment</p>
            <p class="dot-before">Dedicated Project Manager</p>
            <p class="dot-before">Dedicated Accounts Manager</p>
            <p class="dot-before">Facebook Page Design</p>
            <p class="dot-before">Twitter Page Design</p>
            <p class="dot-before">YouTube Page Design</p>
          </div>
          <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
          <a href="/pricing/silver-website-package/" class="view-detail ">VIEW DETAILS</a>
          <div class="row bot-links">
            <div class="col-xl-6 border-right">
              <div class="text-yellow">Share your idea?</div>
              <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
            </div>
            <div class="col-xl-6 pl-xl-4">
              <div class="text-yellow">Want to Discuss?</div>
              <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="myCard2">
          <p class="font-32 font-w800">Business Website <br> Package</p>
          <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for mid sized startups who are looking to work with a strong R&D, Creative and marketing team to help develop a unique brand identity, strong digital presense, marketing strategies and help select elements to alter consumer behaviour toawrds their business. These strategies will help to compete directly with some of the top competitors in your target market.</p>
          <div class="d-inline-flex align-items-center">
            <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£2500</span>
            <span class="text-dec-line-thro text-red font-24">£5000</span>
          </div>
          <div class="contentScroll">
            <p class="dot-before">Custom Made, Interactive, Dynamic &amp; High End Design</p>
            <p class="dot-before">Custom WP (or) Custom PHP Development</p>
            <p class="dot-before">1 jQuery Slider Banner</p>
            <p class="dot-before">Up to 10 Custom Made Banner Designs</p>
            <p class="dot-before">10 Stock Images</p>
            <p class="dot-before">Unlimited Revisions</p>
            <p class="dot-before">Special Hover Effects</p>
            <p class="dot-before">Content Management System (CMS)</p>
            <p class="dot-before">Online Appointment/Scheduling/Online Ordering Integration (Optional)</p>
            <p class="dot-before">Online Payment Integration (Optional)</p>
            <p class="dot-before">Multi Lingual (Optional)</p>
            <p class="dot-before">Custom Dynamic Forms (Optional)</p>
            <p class="dot-before">Signup Area (For Newsletters, Offers etc.)</p>
            <p class="dot-before">Search Bar</p>
            <p class="dot-before">Live Feeds of Social Networks integration (Optional)</p>
            <p class="dot-before">Mobile Responsive</p>
            <p class="dot-before">15 Seconds 2D Explainer Video</p>
            <p class="dot-before">Voice - Over &amp; Sound Effects</p>
            <p class="dot-before">Professional Script Writing</p>
            <p class="dot-before">Storyboard</p>
            <p class="dot-before">SEO Meta Tags</p>
            <p class="dot-before">FREE 5 Years Domain Name</p>
            <p class="dot-before">Free Google Friendly Sitemap</p>
            <p class="dot-before">Search Engine Submission</p>
            <p class="dot-before">Complete W3C Certified HTML</p>
            <p class="dot-before">Industry Specified Team of Expert Designers and Developers</p>
            <p class="dot-before">Dedicated Accounts Manager</p>
            <p class="dot-before">Complete Deployment</p>
          </div>
          <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
          <a href="/pricing/business-website-package/" class="view-detail ">VIEW DETAILS</a>
          <div class="row bot-links">
            <div class="col-xl-6 border-right">
              <div class="text-yellow">Share your idea?</div>
              <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
            </div>
            <div class="col-xl-6 pl-xl-4">
              <div class="text-yellow">Want to Discuss?</div>
              <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="myCard2">
          <p class="font-32 font-w800">Automated Conferencing Portal</p>
          <p class="font-13 text-grey contentScroll contentScroll-upper">Allows live conferencing features and custom client/user dashboards for clients with a strong semi-automated admin panel.</p>
          <div class="d-inline-flex align-items-center">
            <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£5000</span>
            <span class="text-dec-line-thro text-red font-24">£9999</span>
          </div>
          <div class="contentScroll">
            <p class="dot-before">Unlimited Page Website</p>
            <p class="dot-before">Custom Content Management System (CMS)</p>
            <p class="dot-before">Unique Pages and UI Design</p>
            <p class="dot-before">Complete Custom Development</p>
            <p class="dot-before">Process Automation Tools</p>
            <p class="dot-before">Newsfeed Integration</p>
            <p class="dot-before">Social Media Plugins Integration</p>
            <p class="dot-before">Upto 40 Stock images</p>
            <p class="dot-before">10 Unique Banner Designs</p>
            <p class="dot-before">JQuery Slider</p>
            <p class="dot-before">Search Engine Submission</p>
            <p class="dot-before">Free Google Friendly Sitemap</p>
            <p class="dot-before">Custom Email Addresses</p>
            <p class="dot-before">Social Media Page Designs (Facebook, Twitter, Instagram)</p>
            <p class="dot-before">Complete W3C Certified HTML</p>
            <p class="dot-before">Dedicated Accounts Manager</p>
            <p class="dot-before">Complete Deployment</p>
            <p class="dot-before">Money Back Guarantee</p>
            <p class="dot-before">Automated Course Creation</p>
            <p class="dot-before">Video Conferencing</p>
            <p class="dot-before">Skills/Certification Tracking</p>
            <p class="dot-before">Mobile Learning</p>
            <p class="dot-before">Asynchronous Learning</p>
            <p class="dot-before">CRM Features</p>
            <p class="dot-before">Gamification</p>
            <p class="dot-before">Social Learning/Message Boards</p>
            <p class="dot-before">Motivational Triggers</p>
            <p class="dot-before">Forums And Webinars</p>
            <p class="dot-before">E-commerce And Subscriptions</p>
            <p class="dot-before">Online Course Booking</p>
            <p class="dot-before">Excellent Reporting</p>
            <p class="dot-before">Invoicing Integration</p>
            <p class="dot-before">Financial Integrations</p>
            <p class="dot-before">Student Information management</p>
            <p class="dot-before">Automated communications</p>
            <p class="dot-before">Learning Management System</p>
            <p class="dot-before">Quick And Easy Course Scheduling</p>
            <p class="dot-before">Reporting And Data Analysis</p>
            <p class="dot-before">Assessment Management &amp; Live Feedback</p>
            <p class="dot-before">Gradebooks</p>
            <p class="dot-before">Quick User Integration</p>
            <p class="dot-before">Easy Payment Methods</p>
            <p class="dot-before">Online Communities &amp; Social Engagement</p>
            <p class="dot-before">Curation of Resources And Adding Own Resources</p>
            <p class="dot-before">Dedicated Accounts Manager</p>
          </div>
          <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
          <a href="/pricing/automatedinteractive-conferencing-portal-package/" class="view-detail ">VIEW DETAILS</a>
          <div class="row bot-links">
            <div class="col-xl-6 border-right">
              <div class="text-yellow">Share your idea?</div>
              <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
            </div>
            <div class="col-xl-6 pl-xl-4">
              <div class="text-yellow">Want to Discuss?</div>
              <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="myCard2">
          <p class="font-32 font-w800">Custom CRM <br>Portal</p>
          <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for mid sized and strong Enterprises with Custom Dashboard Features, Automation/Intelligence, CRM Features, Sales Automation, Forecasting and Advanced back office intelligent managmement system.
          (Job Portals, Real Estate Portals, I.T Management Portals, Medical Portals, HRM Portals, CRM Portals, Dating Portals, Management Portals)</p>
          <div class="d-inline-flex align-items-center">
            <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£7000</span>
            <span class="text-dec-line-thro text-red font-24">£14000</span>
          </div>
          <div class="contentScroll">
            <p class="dot-before">Unlimited Page Website</p>
            <p class="dot-before">Unique Pages and UI Design</p>
            <p class="dot-before">Complete Custom Development</p>
            <p class="dot-before">Newsfeed Integration</p>
            <p class="dot-before">CRM (Customer Relation Management System)</p>
            <p class="dot-before">Performance and analytics</p>
            <p class="dot-before">Customization of Personal Details</p>
            <p class="dot-before">Process management</p>
            <p class="dot-before">Sales Automation</p>
            <p class="dot-before">Team Collaboration</p>
            <p class="dot-before">Marketing Automation</p>
            <p class="dot-before">Security</p>
            <p class="dot-before">Integrations</p>
            <p class="dot-before">Sales Reports</p>
            <p class="dot-before">Trend Analytics</p>
            <p class="dot-before">Forecasting</p>
            <p class="dot-before">Territory Management</p>
            <p class="dot-before">Account Management</p>
            <p class="dot-before">Event Integration</p>
            <p class="dot-before">Advanced Data Security</p>
            <p class="dot-before">Account Management</p>
            <p class="dot-before">Opportunity Management</p>
            <p class="dot-before">Sales Forecasting</p>
            <p class="dot-before">Quotes</p>
            <p class="dot-before">Contracts</p>
            <p class="dot-before">Document Library</p>
            <p class="dot-before">Case Management</p>
            <p class="dot-before">Analytics and Dashboards</p>
            <p class="dot-before">Lead Management</p>
            <p class="dot-before">Resource Management</p>
            <p class="dot-before">Analytics</p>
            <p class="dot-before">Web Intelligence</p>
            <p class="dot-before">Automated Emails, Invoices & Estimates</p>
            <p class="dot-before">Automated Split invoicing</p>
            <p class="dot-before">Automated Combine invoices</p>
            <p class="dot-before">Invoice templates</p>
            <p class="dot-before">Financial Reports</p>
            <p class="dot-before">Generate automated sales reports</p>
            <p class="dot-before">Core Features</p>
            <p class="dot-before">Reporting</p>
            <p class="dot-before">Accounting</p>
            <p class="dot-before">Tracking and Visibility</p>
            <p class="dot-before">Centralized Modules</p>
            <p class="dot-before">Human Resources Management</p>
            <p class="dot-before">Business Process Management</p>
            <p class="dot-before">Enterprise Analytics</p>
            <p class="dot-before">Business Intelligence</p>
            <p class="dot-before">Centralized Modules</p>
            <p class="dot-before">Accounting</p>
            <p class="dot-before">Distribution</p>
            <p class="dot-before">Business Intelligence</p>
            <p class="dot-before">Insights</p>
            <p class="dot-before">Standardization</p>
            <p class="dot-before">Procurement</p>
            <p class="dot-before">Reporting and Analytics</p>
            <p class="dot-before">Projection</p>
            <p class="dot-before">Enterprise-wide integration</p>
            <p class="dot-before">Real-Time Operations</p>
            <p class="dot-before">Problem definition</p>
            <p class="dot-before">Description of the program’s objectives and scope</p>
            <p class="dot-before">Assumptions</p>
            <p class="dot-before">Implementation costs</p>
            <p class="dot-before">Implementation schedule</p>
            <p class="dot-before">Development and operational risks</p>
            <p class="dot-before">Projected benefits</p>
            <p class="dot-before">Team Members</p>
            <p class="dot-before">Contracts</p>
            <p class="dot-before">Infrastructure Upgrades</p>
            <p class="dot-before">Create work plans and timelines</p>
            <p class="dot-before">Analyze gaps</p>
            <p class="dot-before">Configure parameters</p>
            <p class="dot-before">Migrate data</p>
            <p class="dot-before">Test system</p>
            <p class="dot-before">Document system</p>
            <p class="dot-before">Online Payment Solutions (optional)</p>
            <p class="dot-before">Advanced Admin Features 2.0</p>
            <p class="dot-before">User Signup/Login Functionalities</p>
            <p class="dot-before">Advanced User Features</p>
            <p class="dot-before">User Profile Management</p>
            <p class="dot-before">General Configuration Features</p>
            <p class="dot-before">Complete W3C Certified HTML</p>
            <p class="dot-before">Complete Deployment</p>
          </div>
          <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
          <a href="/pricing/custom-crm-portal-website/" class="view-detail ">VIEW DETAILS</a>
          <div class="row bot-links">
            <div class="col-xl-6 border-right">
              <div class="text-yellow">Share your idea?</div>
              <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
            </div>
            <div class="col-xl-6 pl-xl-4">
              <div class="text-yellow">Want to Discuss?</div>
              <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="row">
        <div class="col-12">
          <ul class="nav nav-pills mt-5 justify-content-center" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link 	active" id="pills-web-tab" data-toggle="pill" href="#pills-web" role="tab" aria-controls="pills-web" aria-selected="true">Web Design</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-ecom-tab" data-toggle="pill" href="#pills-ecom" role="tab" aria-controls="pills-ecom" aria-selected="false">Ecommerce</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-brand-tab" data-toggle="pill" href="#pills-brand" role="tab" aria-controls="pills-brand" aria-selected="false">Branding</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Video Animation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-seo-tab" data-toggle="pill" href="#pills-seo" role="tab" aria-controls="pills-seo" aria-selected="false">Search Engine Optimization</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-combo-tab" data-toggle="pill" href="#pills-combo" role="tab" aria-controls="pills-combo" aria-selected="false">Combo Packages</a>
          </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane  active" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                <div class="row">
                  <div class="owl-carousel owl-theme owl-loaded" id="home-pricing-web">
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Startup Website <br> Package</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for static based landing pages.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£199</span>
                          <span class="text-dec-line-thro text-red font-24">£400</span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">5 Stock Photos</p>
                          <p class="dot-before">5 Page Website</p>
                          <p class="dot-before">3 Banner Design</p>
                          <p class="dot-before">1 jQuery Slider Banner</p>
                          <p class="dot-before">FREE Google Friendly Sitemap</p>
                          <p class="dot-before">Complete W3C Certified HTML</p>
                          <p class="dot-before">48 to 72 hours TAT</p>
                          <p class="dot-before">Facebook Page Design</p>
                          <p class="dot-before">Twitter Page Design</p>
                          <p class="dot-before">YouTube Page Design</p>
                          <p class="dot-before">Mobile Responsive will be Additional £99*</p>
                          <p class="dot-before">CMS will be Additional £149*</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/startup-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Professional Website <br> Package</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for basic startups looking to take it one step at a time.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£449</span>
                          <span class="text-dec-line-thro text-red font-24">£1000</span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">10 Page Website</p>
                          <p class="dot-before">CMS / Admin Panel Support</p>
                          <p class="dot-before">8 Stock images</p>
                          <p class="dot-before">5 Banner Designs</p>
                          <p class="dot-before">1 jQuery Slider Banner</p>
                          <p class="dot-before">FREE Google Friendly Sitemap</p>
                          <p class="dot-before">Complete W3C Certified HTML</p>
                          <p class="dot-before">48 to 72 hours TAT</p>
                          <p class="dot-before">Facebook Page Design</p>
                          <p class="dot-before">Twitter Page Design</p>
                          <p class="dot-before">YouTube Page Design</p>
                          <p class="dot-before">Dedicated Project Manager</p>
                          <p class="dot-before">Complete Deployment</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/professional-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Elite Website <br> Package</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for potential startups and basic revamps for small companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£749</span>
                          <span class="text-dec-line-thro text-red font-24">£1600</span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">Upto 15 Unique Pages Website</p>
                          <p class="dot-before">Conceptual and Dynamic Website</p>
                          <p class="dot-before">Mobile Responsive</p>
                          <p class="dot-before">Online Reservation/Appointment Tool (Optional)</p>
                          <p class="dot-before">Online Payment Integration (Optional)</p>
                          <p class="dot-before">Custom Forms</p>
                          <p class="dot-before">Lead Capturing Forms (Optional)</p>
                          <p class="dot-before">Striking Hover Effects</p>
                          <p class="dot-before">Newsletter Subscription (Optional)</p>
                          <p class="dot-before">Newsfeed Integration</p>
                          <p class="dot-before">Social Media Integration</p>
                          <p class="dot-before">Search Engine Submission</p>
                          <p class="dot-before">5 Stock Photos</p>
                          <p class="dot-before">3 Unique Banner Design</p>
                          <p class="dot-before">1 jQuery Slider Banner</p>
                          <p class="dot-before"> Complete W3C Certified HTML</p>
                          <p class="dot-before">48 to 72 hours TAT</p>
                          <p class="dot-before">Facebook Page Design</p>
                          <p class="dot-before">Twitter Page Design</p>
                          <p class="dot-before">YouTube Page Design</p>
                          <p class="dot-before">Dedicated Project Manager</p>
                          <p class="dot-before">Complete Deployment</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/elite-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Silver Website <br> Package</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for strong startups that are looking to build a unique brand identity to help them stand apart from their competitors with a strong brand presence and strong brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£<?= $silverWebsite?></span>
                          <span class="text-dec-line-thro text-red font-24">£<?= cutPrice($silverWebsite);?></span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">Custom Made, Interactive, Dynamic &amp; High End Design</p>
                          <p class="dot-before">Custom WP (or) Custom PHP Development</p>
                          <p class="dot-before">1 jQuery Slider Banner</p>
                          <p class="dot-before">Up to 10 Custom Made Banner Designs</p>
                          <p class="dot-before">10 Stock Images</p>
                          <p class="dot-before">Unlimited Revisions</p>
                          <p class="dot-before">Special Hover Effects</p>
                          <p class="dot-before">Content Management System (CMS)</p>
                          <p class="dot-before">Online Appointment/Scheduling/Online Ordering Integration (Optional)</p>
                          <p class="dot-before">Online Payment Integration (Optional)</p>
                          <p class="dot-before">Multi Lingual (Optional)</p>
                          <p class="dot-before">Custom Dynamic Forms (Optional)</p>
                          <p class="dot-before">Signup Area (For Newsletters, Offers etc.)</p>
                          <p class="dot-before">Search Bar</p>
                          <p class="dot-before">Live Feeds of Social Networks integration (Optional)</p>
                          <p class="dot-before">Mobile Responsive</p>
                          <p class="dot-before">FREE 5 Years Domain Name</p>
                          <p class="dot-before">Free Google Friendly Sitemap</p>
                          <p class="dot-before">Search Engine Submission</p>
                          <p class="dot-before">Complete W3C Certified HTML</p>
                          <p class="dot-before">Industry Specified Team of Expert Designers and Developers</p>
                          <p class="dot-before">Complete Deployment</p>
                          <p class="dot-before">Dedicated Project Manager</p>
                          <p class="dot-before">Dedicated Accounts Manager</p>
                          <p class="dot-before">Facebook Page Design</p>
                          <p class="dot-before">Twitter Page Design</p>
                          <p class="dot-before">YouTube Page Design</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/silver-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Business Website <br> Package</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for mid sized startups who are looking to work with a strong R&D, Creative and marketing team to help develop a unique brand identity, strong digital presense, marketing strategies and help select elements to alter consumer behaviour toawrds their business. These strategies will help to compete directly with some of the top competitors in your target market.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£<?= $businessWebsite;?></span>
                          <span class="text-dec-line-thro text-red font-24">£<?= cutPrice($businessWebsite);?></span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">Custom Made, Interactive, Dynamic &amp; High End Design</p>
                          <p class="dot-before">Custom WP (or) Custom PHP Development</p>
                          <p class="dot-before">1 jQuery Slider Banner</p>
                          <p class="dot-before">Up to 10 Custom Made Banner Designs</p>
                          <p class="dot-before">10 Stock Images</p>
                          <p class="dot-before">Unlimited Revisions</p>
                          <p class="dot-before">Special Hover Effects</p>
                          <p class="dot-before">Content Management System (CMS)</p>
                          <p class="dot-before">Online Appointment/Scheduling/Online Ordering Integration (Optional)</p>
                          <p class="dot-before">Online Payment Integration (Optional)</p>
                          <p class="dot-before">Multi Lingual (Optional)</p>
                          <p class="dot-before">Custom Dynamic Forms (Optional)</p>
                          <p class="dot-before">Signup Area (For Newsletters, Offers etc.)</p>
                          <p class="dot-before">Search Bar</p>
                          <p class="dot-before">Live Feeds of Social Networks integration (Optional)</p>
                          <p class="dot-before">Mobile Responsive</p>
                          <p class="dot-before">15 Seconds 2D Explainer Video</p>
                          <p class="dot-before">Voice - Over &amp; Sound Effects</p>
                          <p class="dot-before">Professional Script Writing</p>
                          <p class="dot-before">Storyboard</p>
                          <p class="dot-before">SEO Meta Tags</p>
                          <p class="dot-before">FREE 5 Years Domain Name</p>
                          <p class="dot-before">Free Google Friendly Sitemap</p>
                          <p class="dot-before">Search Engine Submission</p>
                          <p class="dot-before">Complete W3C Certified HTML</p>
                          <p class="dot-before">Industry Specified Team of Expert Designers and Developers</p>
                          <p class="dot-before">Dedicated Accounts Manager</p>
                          <p class="dot-before">Complete Deployment</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/business-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Automated Conferencing Portal</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Allows live conferencing features and custom client/user dashboards for clients with a strong semi-automated admin panel.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£5000</span>
                          <span class="text-dec-line-thro text-red font-24">£9999</span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">Unlimited Page Website</p>
                          <p class="dot-before">Custom Content Management System (CMS)</p>
                          <p class="dot-before">Unique Pages and UI Design</p>
                          <p class="dot-before">Complete Custom Development</p>
                          <p class="dot-before">Process Automation Tools</p>
                          <p class="dot-before">Newsfeed Integration</p>
                          <p class="dot-before">Social Media Plugins Integration</p>
                          <p class="dot-before">Upto 40 Stock images</p>
                          <p class="dot-before">10 Unique Banner Designs</p>
                          <p class="dot-before">JQuery Slider</p>
                          <p class="dot-before">Search Engine Submission</p>
                          <p class="dot-before">Free Google Friendly Sitemap</p>
                          <p class="dot-before">Custom Email Addresses</p>
                          <p class="dot-before">Social Media Page Designs (Facebook, Twitter, Instagram)</p>
                          <p class="dot-before">Complete W3C Certified HTML</p>
                          <p class="dot-before">Dedicated Accounts Manager</p>
                          <p class="dot-before">Complete Deployment</p>
                          <p class="dot-before">Money Back Guarantee</p>
                          <p class="dot-before">Automated Course Creation</p>
                          <p class="dot-before">Video Conferencing</p>
                          <p class="dot-before">Skills/Certification Tracking</p>
                          <p class="dot-before">Mobile Learning</p>
                          <p class="dot-before">Asynchronous Learning</p>
                          <p class="dot-before">CRM Features</p>
                          <p class="dot-before">Gamification</p>
                          <p class="dot-before">Social Learning/Message Boards</p>
                          <p class="dot-before">Motivational Triggers</p>
                          <p class="dot-before">Forums And Webinars</p>
                          <p class="dot-before">E-commerce And Subscriptions</p>
                          <p class="dot-before">Online Course Booking</p>
                          <p class="dot-before">Excellent Reporting</p>
                          <p class="dot-before">Invoicing Integration</p>
                          <p class="dot-before">Financial Integrations</p>
                          <p class="dot-before">Student Information management</p>
                          <p class="dot-before">Automated communications</p>
                          <p class="dot-before">Learning Management System</p>
                          <p class="dot-before">Quick And Easy Course Scheduling</p>
                          <p class="dot-before">Reporting And Data Analysis</p>
                          <p class="dot-before">Assessment Management &amp; Live Feedback</p>
                          <p class="dot-before">Gradebooks</p>
                          <p class="dot-before">Quick User Integration</p>
                          <p class="dot-before">Easy Payment Methods</p>
                          <p class="dot-before">Online Communities &amp; Social Engagement</p>
                          <p class="dot-before">Curation of Resources And Adding Own Resources</p>
                          <p class="dot-before">Dedicated Accounts Manager</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/automatedinteractive-conferencing-portal-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Custom CRM <br>Portal</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for mid sized and strong Enterprises with Custom Dashboard Features, Automation/Intelligence, CRM Features, Sales Automation, Forecasting and Advanced back office intelligent managmement system.
                        (Job Portals, Real Estate Portals, I.T Management Portals, Medical Portals, HRM Portals, CRM Portals, Dating Portals, Management Portals)</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£7000</span>
                          <span class="text-dec-line-thro text-red font-24">£14000</span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">Unlimited Page Website</p>
                          <p class="dot-before">Unique Pages and UI Design</p>
                          <p class="dot-before">Complete Custom Development</p>
                          <p class="dot-before">Newsfeed Integration</p>
                          <p class="dot-before">CRM (Customer Relation Management System)</p>
                          <p class="dot-before">Performance and analytics</p>
                          <p class="dot-before">Customization of Personal Details</p>
                          <p class="dot-before">Process management</p>
                          <p class="dot-before">Sales Automation</p>
                          <p class="dot-before">Team Collaboration</p>
                          <p class="dot-before">Marketing Automation</p>
                          <p class="dot-before">Security</p>
                          <p class="dot-before">Integrations</p>
                          <p class="dot-before">Sales Reports</p>
                          <p class="dot-before">Trend Analytics</p>
                          <p class="dot-before">Forecasting</p>
                          <p class="dot-before">Territory Management</p>
                          <p class="dot-before">Account Management</p>
                          <p class="dot-before">Event Integration</p>
                          <p class="dot-before">Advanced Data Security</p>
                          <p class="dot-before">Account Management</p>
                          <p class="dot-before">Opportunity Management</p>
                          <p class="dot-before">Sales Forecasting</p>
                          <p class="dot-before">Quotes</p>
                          <p class="dot-before">Contracts</p>
                          <p class="dot-before">Document Library</p>
                          <p class="dot-before">Case Management</p>
                          <p class="dot-before">Analytics and Dashboards</p>
                          <p class="dot-before">Lead Management</p>
                          <p class="dot-before">Resource Management</p>
                          <p class="dot-before">Analytics</p>
                          <p class="dot-before">Web Intelligence</p>
                          <p class="dot-before">Automated Emails, Invoices & Estimates</p>
                          <p class="dot-before">Automated Split invoicing</p>
                          <p class="dot-before">Automated Combine invoices</p>
                          <p class="dot-before">Invoice templates</p>
                          <p class="dot-before">Financial Reports</p>
                          <p class="dot-before">Generate automated sales reports</p>
                          <p class="dot-before">Core Features</p>
                          <p class="dot-before">Reporting</p>
                          <p class="dot-before">Accounting</p>
                          <p class="dot-before">Tracking and Visibility</p>
                          <p class="dot-before">Centralized Modules</p>
                          <p class="dot-before">Human Resources Management</p>
                          <p class="dot-before">Business Process Management</p>
                          <p class="dot-before">Enterprise Analytics</p>
                          <p class="dot-before">Business Intelligence</p>
                          <p class="dot-before">Centralized Modules</p>
                          <p class="dot-before">Accounting</p>
                          <p class="dot-before">Distribution</p>
                          <p class="dot-before">Business Intelligence</p>
                          <p class="dot-before">Insights</p>
                          <p class="dot-before">Standardization</p>
                          <p class="dot-before">Procurement</p>
                          <p class="dot-before">Reporting and Analytics</p>
                          <p class="dot-before">Projection</p>
                          <p class="dot-before">Enterprise-wide integration</p>
                          <p class="dot-before">Real-Time Operations</p>
                          <p class="dot-before">Problem definition</p>
                          <p class="dot-before">Description of the program’s objectives and scope</p>
                          <p class="dot-before">Assumptions</p>
                          <p class="dot-before">Implementation costs</p>
                          <p class="dot-before">Implementation schedule</p>
                          <p class="dot-before">Development and operational risks</p>
                          <p class="dot-before">Projected benefits</p>
                          <p class="dot-before">Team Members</p>
                          <p class="dot-before">Contracts</p>
                          <p class="dot-before">Infrastructure Upgrades</p>
                          <p class="dot-before">Create work plans and timelines</p>
                          <p class="dot-before">Analyze gaps</p>
                          <p class="dot-before">Configure parameters</p>
                          <p class="dot-before">Migrate data</p>
                          <p class="dot-before">Test system</p>
                          <p class="dot-before">Document system</p>
                          <p class="dot-before">Online Payment Solutions (optional)</p>
                          <p class="dot-before">Advanced Admin Features 2.0</p>
                          <p class="dot-before">User Signup/Login Functionalities</p>
                          <p class="dot-before">Advanced User Features</p>
                          <p class="dot-before">User Profile Management</p>
                          <p class="dot-before">General Configuration Features</p>
                          <p class="dot-before">Complete W3C Certified HTML</p>
                          <p class="dot-before">Complete Deployment</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/custom-crm-portal-website/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="tab-pane " id="pills-ecom" role="tabpanel" aria-labelledby="pills-ecom-tab">
              <div class="row">
                <div class="owl-carousel owl-theme" id="home-pricing-ecom">
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Beginners E-Commerce<br> Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for small startups who are looking to sell products online.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£<?= $beginnersEcommerce?></span>
                        <span class="text-dec-line-thro text-red font-24">£<?= cutPrice($beginnersEcommerce);?></span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">Conceptual and Dynamic Website</p>
                        <p class="dot-before">Content Management System (CMS)</p>
                        <p class="dot-before">Mobile Responsive</p>
                        <p class="dot-before">Easy Product Search</p>
                        <p class="dot-before">Product Reviews</p>
                        <p class="dot-before">Up To 100 Products</p>
                        <p class="dot-before">Up To 7 Categories</p>
                        <p class="dot-before">Full Shopping Cart Integration</p>
                        <p class="dot-before">Payment Module Integration</p>
                        <p class="dot-before">Sales &amp; Inventory Management</p>
                        <p class="dot-before">Jquery Slider</p>
                        <p class="dot-before">Free Google Friendly Sitemap</p>
                        <p class="dot-before">FREE 1 Years Hosting</p>
                        <p class="dot-before">Custom Email Addresses</p>
                        <p class="dot-before">Complete W3C Certified HTML</p>
                        <p class="dot-before">Facebook Page Design</p>
                        <p class="dot-before">Twitter Page Design</p>
                        <p class="dot-before">YouTube Page Design</p>
                        <p class="dot-before">Complete Deployment</p>
                        <p class="dot-before">Dedicated Accounts Manager</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/beginners-e-commerce-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Corporate E-Commerce<br> Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for strong startups looking to create a client base and develop a unique brand identity to help them stand apart from their competitors.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£<?= $corporateEcommerce?></span>
                        <span class="text-dec-line-thro text-red font-24">£<?= cutPrice($corporateEcommerce);?></span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">Conceptual and Dynamic Website</p>
                        <p class="dot-before">Content Management System (CMS)</p>
                        <p class="dot-before">Mobile Responsive</p>
                        <p class="dot-before">Easy Product Search</p>
                        <p class="dot-before">Product Reviews</p>
                        <p class="dot-before">Unlimited Products</p>
                        <p class="dot-before">Unlimited Categories</p>
                        <p class="dot-before">Full Shopping Cart Integration</p>
                        <p class="dot-before">Payment Module Integration</p>
                        <p class="dot-before">Sales &amp; Inventory Management</p>
                        <p class="dot-before">Jquery Slider</p>
                        <p class="dot-before">Free Google Friendly Sitemap</p>
                        <p class="dot-before">Custom Email Addresses</p>
                        <p class="dot-before">Complete W3C Certified HTML</p>
                        <p class="dot-before">Facebook Page Design</p>
                        <p class="dot-before">Twitter Page Design</p>
                        <p class="dot-before">YouTube Page Design</p>
                        <p class="dot-before">Instagram Page Design</p>
                        <p class="dot-before">Complete Deployment</p>
                        <p class="dot-before">Dedicated Accounts Manager</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/corporate-e-commerce-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Elite E-Commerce <br>Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for mid sized startups/enterprises who are looking to take it on the next level and grow their businesses at a much faster pace with a strong brand presence.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£<?= $eliteEcommerce?></span>
                        <span class="text-dec-line-thro text-red font-24">£<?= cutPrice($eliteEcommerce);?></span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">By 6 Award Winning Designers</p>
                        <p class="dot-before">Icon Design</p>
                        <p class="dot-before">UNLIMITED Revisions</p>
                        <p class="dot-before">Print Media</p>
                        <p class="dot-before">Stationary Design (BusinessCard,Letterhead &amp; Envelope)</p>
                        <p class="dot-before">Invoice Design, Email Signature</p>
                        <p class="dot-before">Bi-Fold Brochure (OR) 2 Sided Flyer Design</p>
                        <p class="dot-before">Product Catalog Design</p>
                        <p class="dot-before">Signage Design (OR) Label Design</p>
                        <p class="dot-before">T-Shirt Design (OR) Car Wrap Design</p>
                        <p class="dot-before">Website</p>
                        <p class="dot-before">E-Commerce Store Design</p>
                        <p class="dot-before">Product Detail Page Design</p>
                        <p class="dot-before">Unique Banner Slider</p>
                        <p class="dot-before">Featured Products Showcase</p>
                        <p class="dot-before">Full Shopping Cart Integration</p>
                        <p class="dot-before">Unlimited Products</p>
                        <p class="dot-before">Unlimited Categories</p>
                        <p class="dot-before">Product Rating &amp; Reviews</p>
                        <p class="dot-before">Easy Product Search</p>
                        <p class="dot-before">Payment Gateway Integration</p>
                        <p class="dot-before">Multi-currency Support</p>
                        <p class="dot-before">Content Management System</p>
                        <p class="dot-before">Customer Log-in Area</p>
                        <p class="dot-before">Mobile Responsive</p>
                        <p class="dot-before">Social Media Plugins Integration</p>
                        <p class="dot-before">Tell a Friend Feature</p>
                        <p class="dot-before">Social Media Pages</p>
                        <p class="dot-before">Facebook , Twitter, YouTube, Google+ &amp; Pinterest Page Designs</p>
                        <p class="dot-before">Value Added Services</p>
                        <p class="dot-before">Dedicated Account Manager</p>
                        <p class="dot-before">Unlimited Revisions</p>
                        <p class="dot-before">All Final File Formats</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/elite-e-commerce-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Automated E-Commerce Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for strong/mid/large sized enterprises and startups who are looking to work with a strong R&D, Creative and Marketing team to help select every element towards their branding, create strong digital marketing and brand presence strategies and to compete with mid/large level enterprises to grow at faster pace and start off directly at the start of the food chain.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£<?= $automatedEcommerce ?></span>
                        <span class="text-dec-line-thro text-red font-24">£<?= cutPrice($automatedEcommerce); ?></span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">Custom Content Management System (CMS)</p>
                        <p class="dot-before">Unique Pages and UI Design</p>
                        <p class="dot-before">Complete Custom Development</p>
                        <p class="dot-before">Process Automation Tools</p>
                        <p class="dot-before">Newsfeed Integration</p>
                        <p class="dot-before">Social Media Plugins Integration</p>
                        <p class="dot-before">Upto 40 Stock images</p>
                        <p class="dot-before">10 Unique Banner Designs</p>
                        <p class="dot-before">JQuery Slider</p>
                        <p class="dot-before">Search Engine Submission</p>
                        <p class="dot-before">Free Google Friendly Sitemap</p>
                        <p class="dot-before">Custom Email Addresses</p>
                        <p class="dot-before">Social Media Page Designs (Facebook, Twitter, Instagram)</p>
                        <p class="dot-before">Complete W3C Certified HTML</p>
                        <p class="dot-before">Complete Deployment</p>
                        <p class="dot-before">Money Back Guarantee</p>
                        <p class="dot-before"><strong>Automated Inventory/Shipping/Supplier Module:</strong></p>
                        <p class="dot-before">Manage thousands to millions of inventory with ease and check stock levels in real-time. Receive low inventory notifications and generate purchase orders to replenish your stock.</p>
                        <p class="dot-before">Suppliers Integration (API NEEDED)</p>
                        <p class="dot-before">Shipper Integration (API NEEDED)</p>
                        <p class="dot-before">Order management</p>
                        <p class="dot-before">LOT numbers and expire date tracking</p>
                        <p class="dot-before">Transfer stock between warehouses (If Warehouse - API NEEDED)</p>
                        <p class="dot-before">Receive stock into a specific warehouse (If Warehouse - API NEEDED)</p>
                        <p class="dot-before">Fulfill orders from a particular warehouse (If Warehouse - API NEEDED)</p>
                        <p class="dot-before">Stock Management</p>
                        <p class="dot-before">Actionable Insights</p>
                        <p class="dot-before">Real- Time Visibility</p>
                        <p class="dot-before">Inventory Opportunities</p>
                        <p class="dot-before"><strong>Advanced Features: (API Needed For Suppliers/Warehouse)</strong></p>
                        <p class="dot-before">Speak to suppliers during trivial conversations.</p>
                        <p class="dot-before">Set and send actions to suppliers regarding governance and compliance materials. Place purchasing requests.</p>
                        <p class="dot-before">Research and answer internal questions regarding procurement functionalities or a supplier/supplier set.</p>
                        <p class="dot-before">Receiving/filing/documentation of invoices and payments/order requests</p>
                        <p class="dot-before">Machine Learning (ML) for Supply Chain Planning (SCP)</p>
                        <p class="dot-before">Machine Learning for Warehouse Management</p>
                        <p class="dot-before">Natural Language Processing (NLP) for Data Cleansing and Building Data Robustness</p>
                        <p class="dot-before"><strong>Automated Invoices &amp; Estimates</strong></p>
                        <p class="dot-before">Create beautiful, professional invoices &amp; estimates in just a few seconds and then instantly email them as PDF's directly to your customers or prospects.</p>
                        <p class="dot-before">Automated Split invoicing</p>
                        <p class="dot-before">Automated Combine invoices</p>
                        <p class="dot-before">Invoice templates</p>
                        <p class="dot-before"><strong>Automated Barcode Scanning</strong></p>
                        <p class="dot-before">Scan inventory into your orders, generate barcodes for your documents, and search for inventory or documents by scanning barcodes.</p>
                        <p class="dot-before"><strong>Locations and Zones</strong></p>
                        <p class="dot-before">Have multiple warehouses, offices, or retail stores? No problem. Easily track where all your inventory is by organizing everything into locations and zones. Organize inventory items using custom attributes such as size, color, and location. View how many you have globally or at each location.</p>
                        <p class="dot-before"><strong>Customer Accounts</strong></p>
                        <p class="dot-before">Performance and analytics</p>
                        <p class="dot-before">Customization of Personal Details</p>
                        <p class="dot-before">Process management</p>
                        <p class="dot-before">Sales Automation</p>
                        <p class="dot-before">Team Collaboration</p>
                        <p class="dot-before">Marketing Automation</p>
                        <p class="dot-before"> Security</p>
                        <p class="dot-before">Integrations</p>
                        <p class="dot-before">Mobile Notifications</p>
                        <p class="dot-before">Sales Reports</p>
                        <p class="dot-before">Trend Analytics</p>
                        <p class="dot-before">Forecasting</p>
                        <p class="dot-before">Territory Management</p>
                        <p class="dot-before">Account Management</p>
                        <p class="dot-before">Event Integration</p>
                        <p class="dot-before">Advanced Data Security</p>
                        <p class="dot-before"><strong>Purchase Orders</strong></p>
                        <p class="dot-before">With integrated purchase orders, you can easily replenish your inventory levels by ordering more stock and even track when those new items will arrive.</p>
                        <p class="dot-before">Partial orders fulfill</p>
                        <p class="dot-before">Backordering</p>
                        <p class="dot-before"><strong>Financial Reports</strong></p>
                        <p class="dot-before">Generate extremely detailed reports for your inventory, sales and services. Filter your reports by date-range and category to see what's making you the most money.</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/automatedinteractive-e-commerce-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Custom E Commerce Marketplace Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for strong marketplaces where clients can come, sell their products and customers can come and puchase where you make commision out of every sale being done through the portal with multiple revenue models. Includes a strong R&D, Creative and Marketing team to help select every element towards their branding, create strong digital marketing and brand presence strategies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£4999</span>
                        <span class="text-dec-line-thro text-red font-24">£10000</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">Unique Pages and UI Design</p>
                        <p class="dot-before">Complete Custom Development</p>
                        <p class="dot-before">Newsfeed Integration</p>
                        <p class="dot-before">Social Media Plugins Integration</p>
                        <p class="dot-before">Advanced Ecommerce Marketplace Features</p>
                        <p class="dot-before">Inventory Management</p>
                        <p class="dot-before">CRM (Customer Relation Management System)</p>
                        <p class="dot-before">Advanced Admin Features 2.0</p>
                        <p class="dot-before">Advanced User Features</p>
                        <p class="dot-before">Dashboard and Analytics</p>
                        <p class="dot-before">Seller/Shipping Distribution</p>
                        <p class="dot-before">Seller Profile Management</p>
                        <p class="dot-before">User Profile Management</p>
                        <p class="dot-before">General Configuration Features</p>
                        <p class="dot-before">Revenue Models</p>
                        <p class="dot-before">Featured products</p>
                        <p class="dot-before">Google advertisements</p>
                        <p class="dot-before">Flash sales Module</p>
                        <p class="dot-before">Loyalty Rewards Module</p>
                        <p class="dot-before">Upto 40 Stock images</p>
                        <p class="dot-before">10 Unique Banner Designs</p>
                        <p class="dot-before">JQuery Slider</p>
                        <p class="dot-before">Search Engine Submission</p>
                        <p class="dot-before">Free Google Friendly Sitemap</p>
                        <p class="dot-before">Social Media Page Designs (Facebook, Twitter, Instagram)</p>
                        <p class="dot-before">Complete W3C Certified HTML</p>
                        <p class="dot-before">Complete Deployment</p>
                        <p class="dot-before">Money Back Guarantee</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/custom-e-commerce-marketplace-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Custom CRM/ERP Portal Website Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for mid/large level enterprises, who are looking to create a one-in-all Intelligent/Automated Organizational Management System within their portal to help regulate the activities of every department through one system with an AI based Back Office management system and custom user/departmental rights that can help connect processes from manufacturing, inventory management to final order fulfillment.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£9999</span>
                        <span class="text-dec-line-thro text-red font-24">£20000</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">Unique Pages and UI Design</p>
                        <p class="dot-before">Complete Custom Development</p>
                        <p class="dot-before">Newsfeed Integration</p>
                        <p class="dot-before">CRM (Customer Relation Management System)</p>
                        <p class="dot-before">Performance and analytics</p>
                        <p class="dot-before">Customization of Personal Details</p>
                        <p class="dot-before">Process management</p>
                        <p class="dot-before">Sales Automation</p>
                        <p class="dot-before">Team Collaboration</p>
                        <p class="dot-before">Marketing Automation</p>
                        <p class="dot-before">Security</p>
                        <p class="dot-before">Integrations</p>
                        <p class="dot-before">Mobile Notifications</p>
                        <p class="dot-before">Sales Reports</p>
                        <p class="dot-before">Trend Analytics</p>
                        <p class="dot-before">Forecasting</p>
                        <p class="dot-before">Territory Management</p>
                        <p class="dot-before">Account Management</p>
                        <p class="dot-before">Event Integration</p>
                        <p class="dot-before">Advanced Data Security</p>
                        <p class="dot-before">Opportunity Management</p>
                        <p class="dot-before">Sales Forecasting</p>
                        <p class="dot-before">Call/Video Logging</p>
                        <p class="dot-before">Quotes</p>
                        <p class="dot-before">Contracts</p>
                        <p class="dot-before">Document Library</p>
                        <p class="dot-before">Case Management</p>
                        <p class="dot-before">Analytics and Dashboards</p>
                        <p class="dot-before">Lead Management</p>
                        <p class="dot-before">Resource Management</p>
                        <p class="dot-before">Analytics</p>
                        <p class="dot-before">Web Intelligence</p>
                        <p class="dot-before">Automated Emails, Invoices & Estimates</p>
                        <p class="dot-before">Automated Split invoicing</p>
                        <p class="dot-before">Automated Combine invoices</p>
                        <p class="dot-before">Invoice templates</p>
                        <p class="dot-before">Financial Reports</p>
                        <p class="dot-before">Generate extremely detailed reports for your sales and services. Filter your reports by date-range and category to see what's making you the most money.</p>
                        <p class="dot-before">Generate automated sales reports</p>
                        <p class="dot-before">Core Modules</p>
                        <p class="dot-before">Human Resources</p>
                        <p class="dot-before">Integration</p>
                        <p class="dot-before">Business Intelligence</p>
                        <p class="dot-before">Sales/Marketing</p>
                        <p class="dot-before">Finance</p>
                        <p class="dot-before">Core Features</p>
                        <p class="dot-before">Reporting</p>
                        <p class="dot-before">Accounting</p>
                        <p class="dot-before">Tracking and Visibility</p>
                        <p class="dot-before">Centralized Modules</p>
                        <p class="dot-before">ERP Database</p>
                        <p class="dot-before">Human Resources Management</p>
                        <p class="dot-before">Business Process Management</p>
                        <p class="dot-before">Enterprise Analytics</p>
                        <p class="dot-before">Business Intelligence</p>
                        <p class="dot-before">Centralized Modules</p>
                        <p class="dot-before">ERP Database</p>
                        <p class="dot-before">Integrations</p>
                        <p class="dot-before">If (Manufacturing) (Optional)</p>
                        <p class="dot-before">Accounting</p>
                        <p class="dot-before">Distribution</p>
                        <p class="dot-before">Business Intelligence</p>
                        <p class="dot-before">Insights</p>
                        <p class="dot-before">Standardization</p>
                        <p class="dot-before">Procurement</p>
                        <p class="dot-before">Reporting and Analytics</p>
                        <p class="dot-before">Forecasting</p>
                        <p class="dot-before">Projection</p>
                        <p class="dot-before">Enterprise-wide integration</p>
                        <p class="dot-before">Real-Time Operations</p>
                        <p class="dot-before">Problem definition</p>
                        <p class="dot-before">Description of the program’s objectives and scope</p>
                        <p class="dot-before">Assumptions</p>
                        <p class="dot-before">Implementation costs</p>
                        <p class="dot-before">Implementation schedule</p>
                        <p class="dot-before">Development and operational risks</p>
                        <p class="dot-before">Projected benefits</p>
                        <p class="dot-before">Team Members</p>
                        <p class="dot-before">Contracts</p>
                        <p class="dot-before">Infrastructure Upgrades</p>
                        <p class="dot-before">Create work plans and timelines</p>
                        <p class="dot-before">Analyze gaps</p>
                        <p class="dot-before">Configure parameters</p>
                        <p class="dot-before">Migrate data</p>
                        <p class="dot-before">Test system</p>
                        <p class="dot-before">Document system</p>
                        <p class="dot-before">Advanced Admin Features 2.0</p>
                        <p class="dot-before">User Signup/Login Functionalities</p>
                        <p class="dot-before">Advanced User Features</p>
                        <p class="dot-before">User Profile Management</p>
                        <p class="dot-before">General Configuration Features</p>
                        <p class="dot-before">Complete W3C Certified HTML</p>
                        <p class="dot-before">Complete Deployment</p>
                        <p class="dot-before">Money Back Guarantee</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/custom-crm-erp-portal-website/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>			  	
            </div>
            <div class="tab-pane " id="pills-brand" role="tabpanel" aria-labelledby="pills-brand-tab">
              <div class="row">
                <div class="owl-carousel owl-theme" id="home-pricing-brand">
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Startup Collateral Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£50</span>
                        <span class="text-dec-line-thro text-red font-24">£100</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">2 Stationery Design Set</p>
                        <p class="dot-before">FREE Fax Template</p>
                        <p class="dot-before">Print Ready Formats</p>
                        <p class="dot-before">UNLIMITED Revisions</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/startup-collateral-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Collateral Classic Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£130</span>
                        <span class="text-dec-line-thro text-red font-24">£260</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">2 Stationery Design Set</p>
                        <p class="dot-before">UNLIMITED Revisions</p>
                        <p class="dot-before">Flyer Design</p>
                        <p class="dot-before">Brochure Design (Bi-fold/Tri-fold)</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/collateral-classic-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Premium Collateral Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£200</span>
                        <span class="text-dec-line-thro text-red font-24">£400</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">2 Stationery Design Set</p>
                        <p class="dot-before">Packaging Design</p>
                        <p class="dot-before">UNLIMITED Revisions</p>
                        <p class="dot-before">T-Shirt Design</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/branding-premium-collateral-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Unlimited Collateral Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£250</span>
                        <span class="text-dec-line-thro text-red font-24">£500</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">2 Stationery Design Set</p>
                        <p class="dot-before">Menu Card Design</p>
                        <p class="dot-before">T-Shirt Design</p>
                        <p class="dot-before">1 Banner Design</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/unlimited-collateral-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Complete Branding Solution</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£995</span>
                        <span class="text-dec-line-thro text-red font-24">£1990</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">Unlimited Custom Logo Design Concepts</p>
                        <p class="dot-before">6 Dedicated Designers</p>
                        <p class="dot-before">UNLIMITED Pages Website</p>
                        <p class="dot-before">Mobile Responsive</p>
                        <p class="dot-before">Icon Design</p>
                        <p class="dot-before">Business Card, Letterhead, Envelope</p>
                        <p class="dot-before">MS Word Letterhead</p>
                        <p class="dot-before">5 Stock Photos + 3 Banner Designs</p>
                        <p class="dot-before">Complete W3C Certified HTML</p>
                        <p class="dot-before">Complete Deployment</p>
                        <p class="dot-before">Facebook Page Design</p>
                        <p class="dot-before">All Final File Formats</p>
                        <p class="dot-before">Dedicated Account Manager</p>
                        <p class="dot-before">100% Ownership Rights</p>
                        <p class="dot-before">100% Satisfaction Guarantee</p>
                        <p class="dot-before">100% Unique Design Guarantee</p>
                        <p class="dot-before">100% Money Back Guarantee</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/complete-branding-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>			  	
            </div>
            <div class="tab-pane " id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <div class="row">
                <div class="owl-carousel owl-theme" id="home-pricing-video">
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Teaser/Intro Video Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£150</span>
                        <span class="text-dec-line-thro text-red font-24">£300</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">15s Duration - HD 1080</p>
                        <p class="dot-before">Professional Script</p>
                        <p class="dot-before">Storyboard</p>
                        <p class="dot-before">Sample Themes</p>
                        <p class="dot-before">Custom Setting, Characters &amp; Graphics</p>
                        <p class="dot-before">Animation Effects &amp; Visualization</p>
                        <p class="dot-before">Voice - Over &amp; Sound Effects (All accents) (M/F)</p>
                        <p class="dot-before">Unlimited Revisions</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/teaser-intro-video-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Startup Video <br> Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£200</span>
                        <span class="text-dec-line-thro text-red font-24">£400</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">30s Duration - HD 1080</p>
                        <p class="dot-before">Professional Script</p>
                        <p class="dot-before">Storyboard</p>
                        <p class="dot-before">Sample Themes</p>
                        <p class="dot-before">Custom Setting, Characters &amp; Graphics</p>
                        <p class="dot-before">Animation Effects &amp; Visualization</p>
                        <p class="dot-before">Voice - Over &amp; Sound Effects (All accents) (M/F)</p>
                        <p class="dot-before">Unlimited Revisions</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/startup-video-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Classic Video <br> Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£400</span>
                        <span class="text-dec-line-thro text-red font-24">£800</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">60 Second Video - HD 1080</p>
                        <p class="dot-before">Professional Script</p>
                        <p class="dot-before">Sample Theme</p>
                        <p class="dot-before">Storyboard</p>
                        <p class="dot-before">Animation</p>
                        <p class="dot-before">Voice - Over &amp; Sound Effects</p>
                        <p class="dot-before">5 weeks Delivery</p>
                        <p class="dot-before">Unlimited Revisions</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/classic-video-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Premium Video <br>Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£700</span>
                        <span class="text-dec-line-thro text-red font-24">£1400</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">90 Second Video - HD 1080</p>
                        <p class="dot-before">Professional Script</p>
                        <p class="dot-before">Sample Theme</p>
                        <p class="dot-before">Storyboard</p>
                        <p class="dot-before">Animation</p>
                        <p class="dot-before">Voice - Over &amp; Sound Effects</p>
                        <p class="dot-before">6 Weeks Delivery</p>
                        <p class="dot-before">Unlimited Revisions</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/premium-video-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Deluxe Video <br>Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£900</span>
                        <span class="text-dec-line-thro text-red font-24">£1800</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">120 Second Video - HD 1080</p>
                        <p class="dot-before">Professional Script</p>
                        <p class="dot-before">Sample Theme</p>
                        <p class="dot-before">Storyboard</p>
                        <p class="dot-before">Animation</p>
                        <p class="dot-before">Voice - Over &amp; Sound Effects</p>
                        <p class="dot-before">Unlimited Revisions</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/deluxe-video-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>			  	
            </div>
            <div class="tab-pane " id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
              <div class="row">
                <div class="owl-carousel owl-theme" id="home-pricing-brand">
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Startup SEO <br>Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£450</span>
                        <span class="text-dec-line-thro text-red font-24">£900</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">5 Keywords</p>
                        <p class="dot-before">Guaranteed Ranking on Google</p>
                        <p class="dot-before">Off-site Optimization</p>
                        <p class="dot-before">Link Building</p>
                        <p class="dot-before">Social Bookmarking</p>
                        <p class="dot-before">Basic Analytical Report</p>
                        <p class="dot-before">In-depth Site Analysis</p>
                        <p class="dot-before">Content Duplicity Check</p>
                        <p class="dot-before">Initial Backlinks analysis</p>
                        <p class="dot-before">Google Penalty Check</p>
                        <p class="dot-before">Mobile Usability Check</p>
                        <p class="dot-before">Competition Analysis</p>
                        <p class="dot-before">Keyword Research</p>
                        <p class="dot-before">Informational Content Writing &amp; Sharing (2 - Per Month)</p>
                        <p class="dot-before">Blog Writing (1 - Per Month)</p>
                        <p class="dot-before">Press Release Social Bookmarking (5 - Per Month)</p>
                        <p class="dot-before">NAP Syndication</p>
                        <p class="dot-before">Google My Business / Bing Local Listing</p>
                        <p class="dot-before">Citation Building</p>
                        <p class="dot-before">Classified Submissions</p>
                        <p class="dot-before">Google Analytics Analysis Report</p>
                        <p class="dot-before">SEO Reports</p>
                        <p class="dot-before">Search Engine Rank Report</p>
                        <p class="dot-before">Dedicated Accounts Manager</p>
                        <p class="dot-before">Monthly Action Plan</p>
                        <p class="dot-before">Activity Report</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/startup-seo-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Identity SEO <br> Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£850</span>
                        <span class="text-dec-line-thro text-red font-24">£1700</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">10 Keywords</p>
                        <p class="dot-before">Guaranteed Ranking on Google</p>
                        <p class="dot-before">Off-site Optimization</p>
                        <p class="dot-before">On-site Optimization</p>
                        <p class="dot-before">Link Building</p>
                        <p class="dot-before">Social Bookmarking</p>
                        <p class="dot-before">In-depth Site Analysis</p>
                        <p class="dot-before">Content Duplicacy Check</p>
                        <p class="dot-before">Initial Backlinks analysis</p>
                        <p class="dot-before">Google Penalty Check</p>
                        <p class="dot-before">Mobile Usability Check</p>
                        <p class="dot-before">Competition Analysis</p>
                        <p class="dot-before">Keyword Research</p>
                        <p class="dot-before">Title &amp; Meta Tags Optimization</p>
                        <p class="dot-before">Content Optimization</p>
                        <p class="dot-before">Page Speed Analysis &amp; Optimization</p>
                        <p class="dot-before">HTML Code Cleanup &amp; Optimization</p>
                        <p class="dot-before">Internal Link Structuring &amp; Optimization</p>
                        <p class="dot-before">Pages H tags Optimization</p>
                        <p class="dot-before">Canonicalization/301 Redirect</p>
                        <p class="dot-before">Website Page Load Optimization</p>
                        <p class="dot-before">Schema Markup Implementation</p>
                        <p class="dot-before">Image &amp; Hyperlink Optimization</p>
                        <p class="dot-before">Robots.txt Creation/Analysis</p>
                        <p class="dot-before">Blog Writing (2 - Per Month)</p>
                        <p class="dot-before">Informational Content Writing &amp; Sharing (1 Per Month)</p>
                        <p class="dot-before">Press Release Writing &amp; Distribution</p>
                        <p class="dot-before">Press Release Social Bookmarking</p>
                        <p class="dot-before">Google Webmaster Tools Setup</p>
                        <p class="dot-before">Google Analytics Setup &amp; Integration</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/identity-seo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Elite SEO <br>Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£1550</span>
                        <span class="text-dec-line-thro text-red font-24">£3100</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">20 Keywords</p>
                        <p class="dot-before">Guaranteed Ranking on Google</p>
                        <p class="dot-before">Off-site Optimization</p>
                        <p class="dot-before">On-site Optimization</p>
                        <p class="dot-before">Link Building</p>
                        <p class="dot-before">Social Bookmarking</p>
                        <p class="dot-before">In-depth Site Analysis</p>
                        <p class="dot-before">Content Duplicacy Check</p>
                        <p class="dot-before">Initial Backlinks analysis</p>
                        <p class="dot-before">Google Penalty Check</p>
                        <p class="dot-before">Mobile Usability Check</p>
                        <p class="dot-before">Competition Analysis</p>
                        <p class="dot-before">Keyword Research</p>
                        <p class="dot-before">Page Speed Analysis &amp; Optimization</p>
                        <p class="dot-before">Title &amp; Meta Tags Optimization</p>
                        <p class="dot-before">Content Optimization</p>
                        <p class="dot-before">HTML Code Cleanup &amp; Optimization</p>
                        <p class="dot-before">Internal Link Structuring &amp; Optimization</p>
                        <p class="dot-before">Pages H tags Optimization</p>
                        <p class="dot-before">Canonicalization/301 Redirect</p>
                        <p class="dot-before">Website Page Load Optimization</p>
                        <p class="dot-before">Robots.txt Creation/Analysis</p>
                        <p class="dot-before">Press Release Writing &amp; Distribution</p>
                        <p class="dot-before">Press Release Social Bookmarking</p>
                        <p class="dot-before">Schema Markup Implementation</p>
                        <p class="dot-before">Image &amp; Hyperlink Optimization</p>
                        <p class="dot-before">Google Webmaster Tools Setup</p>
                        <p class="dot-before">Google Analytics Setup &amp; Integration</p>
                        <p class="dot-before">Blog Writing (2 - Per Month)</p>
                        <p class="dot-before">Informational Content Writing &amp; Sharing (1 Per Month)</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/elite-seo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Professional SEO <br>Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£2150</span>
                        <span class="text-dec-line-thro text-red font-24">£4300</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">30 Keywords</p>
                        <p class="dot-before">Guaranteed Ranking on Google</p>
                        <p class="dot-before">Off-site Optimization</p>
                        <p class="dot-before">On-site Optimization</p>
                        <p class="dot-before">Link Building</p>
                        <p class="dot-before">Social Bookmarking</p>
                        <p class="dot-before">In-depth Site Analysis</p>
                        <p class="dot-before">Content Duplicacy Check</p>
                        <p class="dot-before">Initial Backlinks analysis</p>
                        <p class="dot-before">Google Penalty Check</p>
                        <p class="dot-before">Mobile Usability Check</p>
                        <p class="dot-before">Competition Analysis</p>
                        <p class="dot-before">Keyword Research</p>
                        <p class="dot-before">Page Speed Analysis &amp; Optimization</p>
                        <p class="dot-before">Title &amp; Meta Tags Optimization</p>
                        <p class="dot-before">Content Optimization</p>
                        <p class="dot-before">HTML Code Cleanup &amp; Optimization</p>
                        <p class="dot-before">Internal Link Structuring &amp; Optimization</p>
                        <p class="dot-before">Pages H tags Optimization</p>
                        <p class="dot-before">Canonicalization/301 Redirect</p>
                        <p class="dot-before">Website Page Load Optimization</p>
                        <p class="dot-before">Robots.txt Creation/Analysis</p>
                        <p class="dot-before">Press Release Writing &amp; Distribution</p>
                        <p class="dot-before">Press Release Social Bookmarking</p>
                        <p class="dot-before">Schema Markup Implementation</p>
                        <p class="dot-before">Image &amp; Hyperlink Optimization</p>
                        <p class="dot-before">Google Webmaster Tools Setup</p>
                        <p class="dot-before">Google Analytics Setup &amp; Integration</p>
                        <p class="dot-before">Blog Writing (2 - Per Month)</p>
                        <p class="dot-before">Informational Content Writing &amp; Sharing (1 Per Month)</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/professional-seo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>			  	
            </div>
            <div class="tab-pane " id="pills-combo" role="tabpanel" aria-labelledby="pills-combo-tab">
              <div class="row">
                  <div class="owl-carousel owl-theme" id="home-pricing-brand">
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Basic Combo <br>Packages</p>
                        <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£<?= $basicCombo ?></span>
                          <span class="text-dec-line-thro text-red font-24">£<?= cutPrice($basicCombo); ?></span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">5 Custom Logo Design Concepts</p>
                          <p class="dot-before">By 2 Designers</p>
                          <p class="dot-before"> Icon Design</p>
                          <p class="dot-before">Business Card, Letterhead, Envelope, Fax Template</p>
                          <p class="dot-before">MS Word Letterhead</p>
                          <p class="dot-before">5 Page Website</p>
                          <p class="dot-before">Mobile Responsive</p>
                          <p class="dot-before">Team of Expert Designers &amp; Developers</p>
                          <p class="dot-before">8 Stock images</p>
                          <p class="dot-before">5 Banner Designs</p>
                          <p class="dot-before">jQuery Sliders</p>
                          <p class="dot-before">Free Google Friendly Sitemap</p>
                          <p class="dot-before">Complete W3C Certified HTML</p>
                          <p class="dot-before">Complete Deployment</p>
                          <p class="dot-before">Facebook Page Design</p>
                          <p class="dot-before">Twitter Page Design</p>
                          <p class="dot-before">YouTube Page Design</p>
                          <p class="dot-before">All Final File Formats</p>
                          <p class="dot-before">Dedicated Account Manager</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/basic-combo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Startup Combo <br> Package</p>
                        <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£<?= $startupCombo ?></span>
                          <span class="text-dec-line-thro text-red font-24">£<?= cutPrice($startupCombo); ?></span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">Unlimited Logo Design Concepts</p>
                          <p class="dot-before">+ Social Media Design</p>
                          <p class="dot-before">Mobile Responsive</p>
                          <p class="dot-before">3 Dedicated Designers</p>
                          <p class="dot-before">Icon Design</p>
                          <p class="dot-before">Business Card, Letterhead, Envelope</p>
                          <p class="dot-before">MS Word Letterhead</p>
                          <p class="dot-before">UNLIMITED Pages Website</p>
                          <p class="dot-before">Content Management System (CMS)</p>
                          <p class="dot-before">5 Stock Photos + 3 Banner Designs</p>
                          <p class="dot-before">Complete W3C Certified HTML</p>
                          <p class="dot-before">Complete Deployment</p>
                          <p class="dot-before">Facebook Page Design</p>
                          <p class="dot-before">Twitter Page Design</p>
                          <p class="dot-before">YouTube Page Design</p>
                          <p class="dot-before">All Final File Formats</p>
                          <p class="dot-before">Dedicated Account Manager</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/startup-combo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Professional Combo <br>Packages</p>
                        <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£<?= $professionalCombo ?></span>
                          <span class="text-dec-line-thro text-red font-24">£<?= cutPrice($professionalCombo); ?></span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">Unlimited Logo Concepts</p>
                          <p class="dot-before">8 Dedicated Designers</p>
                          <p class="dot-before">Icon Design</p>
                          <p class="dot-before">2 Free Custom Stationary Designs</p>
                          <p class="dot-before">MS Word Letterhead</p>
                          <p class="dot-before">Trifold Brochure Design</p>
                          <p class="dot-before">Presentation Folder Design</p>
                          <p class="dot-before">Conceptual and Dynamic Liquid Website</p>
                          <p class="dot-before">Team of Expert Designers &amp; Developers</p>
                          <p class="dot-before">Mobile Responsive</p>
                          <p class="dot-before">Online Reservation/Appointment Tool (Optional)</p>
                          <p class="dot-before">Custom Forms</p>
                          <p class="dot-before">Lead Capturing Forms (Optional)</p>
                          <p class="dot-before">Newsfeed Integration</p>
                          <p class="dot-before">Social Media Integration</p>
                          <p class="dot-before">Search Engine Submission</p>
                          <p class="dot-before">15 Stock images</p>
                          <p class="dot-before">8 Unique Banner Designs</p>
                          <p class="dot-before">jQuery Sliders</p>
                          <p class="dot-before">Free Google Friendly Sitemap</p>
                          <p class="dot-before">Complete W3C Certified HTML</p>
                          <p class="dot-before">Facebook Page Design</p>
                          <p class="dot-before">Twitter Page Design</p>
                          <p class="dot-before">YouTube Page Design</p>
                          <p class="dot-before">Google+ Page Design</p>
                          <p class="dot-before">All Final File Formats</p>
                          <p class="dot-before">Dedicated Account Manager</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/professional-combo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Corporate Combo <br>Packages</p>
                        <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£2000</span>
                          <span class="text-dec-line-thro text-red font-24">£4000</span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">Unlimited Logo Concepts</p>
                          <p class="dot-before">8 Dedicated Designers</p>
                          <p class="dot-before">Icon Design</p>
                          <p class="dot-before">2 Free Custom Stationary Designs</p>
                          <p class="dot-before">MS Word Letterhead</p>
                          <p class="dot-before">Invoice Design</p>
                          <p class="dot-before">Product Catalog Design</p>
                          <p class="dot-before">Unlimited Pages Website</p>
                          <p class="dot-before">Conceptual and Dynamic Website</p>
                          <p class="dot-before">Content Management System (CMS)</p>
                          <p class="dot-before">Easy Product Search</p>
                          <p class="dot-before">Product Reviews</p>
                          <p class="dot-before">Unlimited Products</p>
                          <p class="dot-before">Unlimited Categories</p>
                          <p class="dot-before">Promotional Product Showcase</p>
                          <p class="dot-before">New Product Showcase</p>
                          <p class="dot-before">Full Shopping Cart Integration</p>
                          <p class="dot-before">Payment Module Integration</p>
                          <p class="dot-before">Sales &amp; Inventory Management</p>
                          <p class="dot-before">Custom Forms</p>
                          <p class="dot-before">Lead Capturing Forms (Optional)</p>
                          <p class="dot-before">Newsfeed Integration</p>
                          <p class="dot-before">Social Media Integration</p>
                          <p class="dot-before">Search Engine Submission</p>
                          <p class="dot-before">Team of Dedicated Designers, Developers and Brand Experts</p>
                          <p class="dot-before">20 Stock images</p>
                          <p class="dot-before">6 Unique Banner Designs</p>
                          <p class="dot-before">jQuery Slider</p>
                          <p class="dot-before">Free Google Friendly Sitemap</p>
                          <p class="dot-before">Complete W3C Certified HTML</p>
                          <p class="dot-before">Facebook Page Design</p>
                          <p class="dot-before">Twitter Page Design</p>
                          <p class="dot-before">YouTube Page Design</p>
                          <p class="dot-before">Google+ Page Design</p>
                          <p class="dot-before">Pinterest Page Design</p>
                          <p class="dot-before">All Final File Formats</p>
                          <p class="dot-before">Dedicated Account Manager</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/corporate-combo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Elite Combo <br>Packages</p>
                        <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£3000</span>
                          <span class="text-dec-line-thro text-red font-24">£6000</span>
                        </div>
                        <div class="contentScroll">
                          <p class="dot-before">Complete Custom Design &amp; Development</p>
                          <p class="dot-before">Client/User Dashboard Area</p>
                          <p class="dot-before">Custom Coding</p>
                          <p class="dot-before">Custom PHP Development</p>
                          <p class="dot-before">Content Management System (CMS)</p>
                          <p class="dot-before">Online Appointment/Scheduling/Online Ordering Integration (Optional)</p>
                          <p class="dot-before">Online Payment Integration (Optional)</p>
                          <p class="dot-before">Multi Lingual (Optional)</p>
                          <p class="dot-before">Custom Dynamic Forms (Optional)</p>
                          <p class="dot-before">Signup Area (For Newsletters, Offers etc.)</p>
                          <p class="dot-before">Search Bar</p>
                          <p class="dot-before">Live Feeds of Social Networks integration (Optional)</p>
                          <p class="dot-before">Mobile Responsive Web</p>
                          <p class="dot-before">Search Engine Submission</p>
                          <p class="dot-before">Module-wise Architecture</p>
                          <p class="dot-before">Extensive Admin Panel</p>
                          <p class="dot-before">Award Winning Team of Expert Designers and Developers</p>
                          <p class="dot-before">Complete Deployment</p>
                          <p class="dot-before">Facebook Page Design</p>
                          <p class="dot-before">Twitter Page Design</p>
                          <p class="dot-before">YouTube Page Design</p>
                        </div>
                        <button class="btn btn-yellow m-0 px-5" data-toggle="modal" data-target="#modalForDiscount">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/elite-combo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>			  	
            </div>
          </div>
      </div>
  </div>
  
  <!-- <div class="slider"><div class="indicator"></div></div>
  <div class="content">
    <section>
      <h2>Features</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati atque quibusdam officiis est dolorum minima deleniti ratione molestias numquam. Voluptas voluptates quibusdam cum?</section>
        <section>
          <h2>Delivery Contents</h2>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quas adipisci a accusantium eius ut voluptatibus ad impedit nulla, ipsa qui. Quasi temporibus eos commodi aliquid impedit amet, similique nulla.</section>
        <section>
          <h2>Shipping</h2>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nemo ducimus eius, magnam error quisquam sunt voluptate labore, excepturi numquam! Alias libero optio sed harum debitis! Veniam, quia in eum.</section>
    <section>
          <h2>Returns</h2>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta vero rerum? Eaque repudiandae architecto libero reprehenderit aliquam magnam ratione quidem? Nobis doloribus molestiae enim deserunt necessitatibus eaque quidem incidunt.</section>
  </div>
</div> -->

</div>
  
    <div class="services_process_section hideweb">   <style>
.secondary-nav-wrap{ display: none; }
    header .logo a { background-position: bottom center;   }
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }

    .hero-services {
      background: url( 'none.html' );
      background-size: auto !important;
    height:auto;
    background-color:#fff !important;
    }

    #header-sroll{  }


    


header #header-sroll ul#navigation li a {color: #fff;font-size:15px; opacity: 1;  -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}

header #header-sroll .call-action span {color: #fff;   -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}

header #header-sroll .call-action span small {color: #888888;   -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}

header #header-sroll .call-action a {color: #888888;  -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}


header #header-sroll .nav-toggle span, header #header-sroll .nav-toggle span:before, header #header-sroll .nav-toggle span:after{    background: #631a79;}


.top-action .btn-line-fill{ color: #fff; }

header #header-sroll .top-action .btn-line-fill{ color: #68bef1; }

#header-sroll.small .top-action .btn-line-fill{ color: #68bef1; }
.top-action .btn-line-fill:hover{ color: #000!important; }

#header-sroll.small .nav-toggle span, #header-sroll.small .nav-toggle span:before, #header-sroll.small .nav-toggle span:after{background: #631a79;}

</style>
<section class="section-padding process wow">
	<div class="container">
		<div class="clearfix">
			<div class="row">
				<div class="col-md-12">
                    
		            <h3  class="wow fadeInDown" data-wow-delay="0.2s">We’ve Got a Proven Formula <br>for Success to Guarantee Results for Our Clients</h3>

		            <p class="wow fadeInDown text-center main" data-wow-delay="0.4s">If it isn’t a 100% then it isn’t enough for us. To ensure each corporate 3D explainer video is getting nothing but the best, we make sure we follow a set of rules that keep us on track in terms of results.</p>

		       
				</div>
			</div>

			<div class="row methodolgy-slider slider main-cust-slider wow fadeInDown" data-wow-delay="0.6s">
      


      	      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
	        <div class="process-img services-processes-icons icon-design-web-process" ></div>
		                <h4>Design</h4>
		                <p>Your web’s interface is perhaps the most essential and most important part of your website. Our web design engineers pay immense importance in creating a conceptual web interface.</p>
	      </div>
	      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
	        <div class="process-img services-processes-icons icon-development-web-process"></div>
		                <h4>Development</h4>
		                <p>A brilliant design is essential for the brand but without beautifully embedded functions, it may not impress your customer. Our development team makes sure your website is well-developed.</p>
	      </div>
	      <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
	        <div class="process-img services-processes-icons icon-quality-web-process"></div>
		                <h4>Quality Assurance</h4>
		                <p>Quality assurance is a key factor that we focus on before we launch the website. Our team of QA experts make sure each bug is removed and your website is in perfect working shape.</p>
	      </div>
          </div>




			     <div class="actions text-center margin-top-20 wow fadeInDown" data-wow-delay="0.8s">
			     <a href="tel:6465829666" class="btn-fill">Book a Call</a>
			     <a onclick="$zopim.livechat.window.toggle()" class="btn-line-fill sea-fill">Want to Discuss</a></div>
		</div>
	</div>
</section></div>
</div>
<div class="boder-space hideweb">   <section class="section section--contest_table section-padding pricing portfolio_services row_1 wow">
  <div data-scrollable="contests">
    <div data-scrollable-inner="" data-size="0">
      <div class="contest-list contest-list--scrollable">
        
        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio37" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_01.png"></a>
          </div>
        </div>


        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio39" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_02.png"></a>
          </div>
        </div>


        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio30" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_03.png"></a>
          </div>
        </div>


        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio31" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_04.png"></a>
          </div>
        </div>


        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio47" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_05.png"></a>
          </div>
        </div>


        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio32" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_06.png"></a>
          </div>
        </div>


        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio33" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_07.png"></a>
          </div>
        </div>


        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio34" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_08.png"></a>
          </div>
        </div>


        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio43" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_09.png"></a>
          </div>
        </div>


        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio35" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_10.png"></a>
          </div>
        </div>

        
      </div>
    </div>
  </div>
</section>






<section class="section section--contest_table section-padding pricing portfolio_services row_2 wow">
  <div data-scrollable="contests">
    <div data-scrollable-inner="" data-size="1500">
      <div class="contest-list contest-list--scrollable">
        
        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio40" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_11.png"></a>
          </div>
        </div>

        <div class="contest-list__item">
          <div class="contest">
             <a href="#portfolio36" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_12.png"></a>
          </div>
        </div>

        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio38" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_13.png"></a>
          </div>
        </div>

        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio41" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_14.png"></a>
          </div>
        </div>

        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio42" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_15.png"></a>
          </div>
        </div>

        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio44" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_16.png"></a>
          </div>
        </div>

        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio46" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_17.png"></a>
          </div>
        </div>

        <div class="contest-list__item">
          <div class="contest">
            <a href="#portfolio45" data-toggle="modal" ><img src="img/portfolio-services/web/web_portfolio_18.png"></a>
          </div>
        </div>

      

        
      </div>
    </div>
  </div>
</section>
  
   </div>

<section class="newprocess visibleweb">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="textwrapper">
          <h2>Most improved things can be improved, to this effect we don't just think outside the box, we just don't think there is one.</h2>
          <p>Anything is possible with a good website design that engages with your customer. Whether you're new to the industry to create a website for the first time or you're a long time pro, The Web Founders got you covered. Just call us and speak with our experienced web design specialist and find your own cost effect website solution.</p>
          <ul class="newlistwicon">
            <li>
              <div class="process-img services-processes-icons icon-design-web-process"></div>
              <div class="wrap">
                <h3>Agile Website Development/ Software Development</h3>
                <p>We believe in work efficiency. That's why we follow the methodologies based on the principles outlined in the Manifesto for Agile Development. The goal is to allow our clients the flexibility and provide rapid and continuous improvement of development solutions.</p>
              </div>
            </li>
            <li>
              <div class="process-img services-processes-icons icon-development-web-process"></div>
              <div class="wrap">
                <h3>Long-Term Partnership</h3>
                <p>Our dedicated teams operate as your partners. Our R&D team works tirelessly towards your vision, understands your product or services and primarily focus on reaching your business’s ultimate goals.</p>
              </div>
            </li>
            <li>
              <div class="process-img services-processes-icons icon-quality-web-process"></div>
              <div class="wrap">
                <h3>Exquisite Craftsmanship</h3>
                <p>P2P - Peer to peer code review and automatic testing is part of our development culture. We know how to find best web design & development solutions and how to handle technical debt wisely.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <figure>
          <img src="img/process-tab-01.png">
        </figure>
      </div>
    </div>
  </div>
</section>
<section class="section-padding text-center subscribe_fold">
    <h3>ENVISION, IMPROVISE, IMPLEMENT</h3>
    <p class="margin-bottom-20" >Over the years, out of everything that we’ve created, the crowning jewels of our creative innovation are the successes that we have created and that is what derives us to keep on making the impossible, possible.</p>
    <a href="javascript:;" onclick="$zopim.livechat.window.toggle()" class="ctasimple">Build a professional website</a>
    
    </div>
</section>


<section class="newprocess visibleweb">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <figure>
          <img class="topziada" src="img/process-B.png">
        </figure>
      </div>
      <div class="col-lg-6">
        <div class="textwrapper">
          <h2>For Visionaries, By Visionaries</h2>
          <p>The Web Founders have a combination of professional design and development expertise that gives us the capabilities of building complex and custom web solutions for your Business to drive maximum revenue.</p>
          <ul class="newlistwicon">
            <li>
              <div class="process-img h50">
                <img src="img/Web-process-02.png">
              </div>
              <div class="wrap">
                <h3>Wireframe Designs</h3>
                <p>Instead of trying to combine the functionality/layout and creative/branding aspects of the website in one-step, we ensure that these elements are addressed one at a time by creating wire-frames before moving to the actual design. This allows our clients to provide feedback at the skeletal level of the website.</p>
              </div>
            </li>
            <li>
            <div class="process-img services-processes-icons icon-development-web-process" style="
                  color: #b8285a;
              "></div>
              <div class="wrap">
                <h3>UX/UI</h3>
                <p>Our creative team works on deriving the complete UX/UI to help provide meaningful and relevant experience to users. Which also involves the design of the entire process of acquiring and integrating the product/service, including aspects of branding, design, usability and function that is defining the complete user journey.</p>
              </div>
            </li>
            <li>
              <div class="process-img h50">
                <img src="img/Web-process-03.png">
              </div>
              <div class="wrap">
                <h3>Website Development</h3>
                <p>After our design team is finished with the visuals, the development team comes into action and makes sure that each and every functionality blended in perfectly and goes with the design.</p>
              </div>
            </li>
            <li>
              <div class="process-img h50">
                <img src="img/Web-process-04.png">
              </div>
              <div class="wrap">
                <h3>Launch</h3>
                <p>After your website finally looks and feels just the way you wanted it, Its Launch Time and we will make it visible to all of your targeted viewers online.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>
</section>

<div class="boder-space hideweb"> <section class="section-padding qualities wow">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
	            <h3  class="wow fadeInDown" data-wow-delay="0.2s">Solutions That Make The World Revolve</h3>
	              <p class="text-center wow fadeInDown" data-wow-delay="0.4s">Our team of experts focus on client and customer satisfaction as the ultimate goal for our projects. <br>This is one of the many reasons why our work is globally acclaimed and recognized.</p>
			</div>
		</div>
        <div class="row margin-bottom-20 margin-top-20 quick-contact-slider wow fadeInDown" data-wow-delay="0.6s">
            
            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">

                <div class="quality">
                    
                       <div class="quality-img-edit"><img src="img/Constant-Client-Coordination.png" alt="100% icon" ></div>
                <h4>01. 24/7 Client <br>Coordination</h4>
                  <p>We’re always in contact with our clients keeping them in loop with everything that our team is working on.</p>
                </div>

             
            </div>
            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                <div class="quality">
                    
                       <div class="quality-img-edit"><img src="img/Customer-Satisfaction.png" alt="100% icon"></div>
                <h4>02. Goal-Oriented <br>Projects</h4>
                 <p>Our team focuses mostly on achieving targets and creating results that directly affect the ROI of the project.</p>
                </div>
            </div>
            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
               <div class="quality">
                    
                       <div class="quality-img-edit"><img src="img/Ownership-Rights.png" alt="100% icon"></div>
                <h4>03. 100% Ownership <br>Rights</h4>
                  <p>We work side by side with clients at all times and provide them 100% ownership rights after the project is complete.</p>
                </div>
            </div>
            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
               <div class="quality">
                    
                       <div class="quality-img-edit"><img src="img/Secure-Money-Back-Guarantee.png" alt="100% icon" ></div>
                <h4>04. Secure Money Back Guarantee</h4>
                <p>Even though we have a 97% satisfaction rate, we provide our customers with a secure money back guarantee.</p>
                </div>
            </div>
            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                <div class="quality">
                    
                       <div class="quality-img-edit"><img src="img/Industry-Proven-Professionals.png" alt="100% icon" ></div>
                <h4>05. Renowned and Recognized Experts</h4>
                 <p>Our team of experts has made its mark all over the industry and has worked with some of the biggest corporations worldwide.</p>
                </div>
            </div>
            
        </div>



<div class="actions wow fadeInDown text-center" data-wow-delay="0.6s"><a href="Get-a-Free-Quote.html" class="btn-fill ">Get a free quote</a> <a onclick="$zopim.livechat.window.toggle()" style="cursor: pointer;" class="btn-line-fill ali-fill ">Want to Discuss </a></div>


       
	</div>
</section></div>

<section class="section-padding qualities logodesign hideweb"> <div class="container"> <div class="row"> <div class="col-md-12"> <h3 class="wow fadeInDown" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;"> Helping Brand Outperform For The Better With Custom Logo Design </h3> <p class="text-center wow fadeInDown" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;"> Our team of expert logo designers are the secret to our success. Each creative logo designer in our team of logo design experts is fully capable of creating amazing logo design solutions to help your brand grow exponentially. We are determined to get you the best custom logo design services for your business and we work hard to maintain that. </p> </div> </div> 


  <div class="row margin-bottom-20 margin-top-20 quick-contact-slider sensation-initialized sensation-slider"> <div aria-live="polite" class="sensation-list draggable"><div class="sensation-track" role="listbox" style="opacity: 1; width: 1170px; transform: translate3d(0px, 0px, 0px);"><div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border wow fadeInLeft sensation-slide sensation-current sensation-active" data-wow-delay="0.2s" data-sensation-index="0" aria-hidden="false" tabindex="-1" role="option" style="width: 234px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;"> <div class="quality"> <div class="quality-img"><span class="icon-Constant-Client-Coordination mad"></span></div> <h4 class="mad textcentre">In depth Competitive Research and Analysis</h4> </div> </div><div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border wow fadeInLeft sensation-slide sensation-active" data-wow-delay="0.2s" data-sensation-index="1" aria-hidden="false" tabindex="-1" role="option" style="width: 234px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;"> <div class="quality"> <div class="quality-img"><span class="icon-Customer-Satisfaction mad"></span></div> <h4 class="mad textcentre">Complete Conceptualization</h4> </div> </div><div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border wow fadeInLeft sensation-slide sensation-active" data-wow-delay="0.3s" data-sensation-index="2" aria-hidden="false" tabindex="-1" role="option" style="width: 234px; visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;"> <div class="quality"> <div class="quality-img"><span class="icon-Ownership-Rights mad"></span></div> <h4 class="mad textcentre">Streamlined Project Processes</h4> </div> </div><div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border wow fadeInLeft sensation-slide sensation-active" data-wow-delay="0.4s" data-sensation-index="3" aria-hidden="false" tabindex="-1" role="option" style="width: 234px; visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;"> <div class="quality"> <div class="quality-img"><span class="icon-Secure-Money-Back-Guarantee mad"> <span class="path1 mad"></span><span class="path2 mad"></span><span class="path3 mad"></span><span class="path4 mad"></span><span class="path5 mad"></span><span class="path6 mad"></span><span class="path7 mad"></span><span class="path8 mad"></span><span class="path9 mad"></span><span class="path10 mad"></span><span class="path11 mad"></span><span class="path12 mad"></span> </span></div> <h4 class="mad textcentre">Industry Specific Resource</h4> </div> </div><div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 wow fadeInLeft sensation-slide sensation-active" data-wow-delay="0.5s" data-sensation-index="4" aria-hidden="false" tabindex="-1" role="option" style="width: 233px; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;"> <div class="quality"> <div class="quality-img"><span class="icon-Industry-Proven-Professionals mad"></span></div> <h4 class="mad textcentre">Ingenious Marketing Specialists</h4> </div> </div></div></div> </div> </div></section>
  
  
  
  
  
  <section class="section-padding qualities logodesign visibleweb"> <div class="container"> <div class="row"> <div class="col-md-12">
  <h3 class="wow fadeInDown" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">Create with the heart, build with the mind</h3>
  <p class="text-center wow fadeInDown" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;">A bunch of outside the box thinkers forming a full service branding and ideas agency. Our team is experienced and passionate about creating something spectacular and impact-full. We see each project as a partnership, we strive to understand your vision and help you overcome the challenges you face. No matter what we create together, we take a three-step approach which is THINK - CREATE - OPTIMIZE.</p> </div> </div> 


  <div class="row margin-bottom-20 margin-top-20 quick-contact-slider sensation-initialized sensation-slider"> <div aria-live="polite" class="sensation-list draggable"><div class="sensation-track d-flex justify-content-center" role="listbox" style="word-break: break-word;"><div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border wow fadeInLeft sensation-slide sensation-current sensation-active" data-wow-delay="0.2s" data-sensation-index="0" aria-hidden="false" tabindex="-1" role="option" style="width: 234px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;"> <div class="quality"> <div class="quality-img"><span class="icon-Constant-Client-Coordination mad"></span></div> <h4 class="mad textcentre">In depth Competitive Research and Analysis</h4> </div> </div><div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border wow fadeInLeft sensation-slide sensation-active" data-wow-delay="0.2s" data-sensation-index="1" aria-hidden="false" tabindex="-1" role="option" style="width: 234px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;"> <div class="quality"> <div class="quality-img"><span class="icon-Customer-Satisfaction mad"></span></div> <h4 class="mad textcentre">Complete Conceptualization</h4> </div> </div><div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border wow fadeInLeft sensation-slide sensation-active" data-wow-delay="0.3s" data-sensation-index="2" aria-hidden="false" tabindex="-1" role="option" style="width: 234px; visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;"> <div class="quality"> <div class="quality-img"><span class="icon-Ownership-Rights mad"></span></div> <h4 class="mad textcentre">Streamlined Project Processes</h4> </div> </div><div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 has-border wow fadeInLeft sensation-slide sensation-active" data-wow-delay="0.4s" data-sensation-index="3" aria-hidden="false" tabindex="-1" role="option" style="width: 234px; visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;"> <div class="quality"> <div class="quality-img"><span class="icon-Secure-Money-Back-Guarantee mad"> <span class="path1 mad"></span><span class="path2 mad"></span><span class="path3 mad"></span><span class="path4 mad"></span><span class="path5 mad"></span><span class="path6 mad"></span><span class="path7 mad"></span><span class="path8 mad"></span><span class="path9 mad"></span><span class="path10 mad"></span><span class="path11 mad"></span><span class="path12 mad"></span> </span></div> <h4 class="mad textcentre">Industry Specific Resource</h4> </div> </div><div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 wow fadeInLeft sensation-slide sensation-active" data-wow-delay="0.5s" data-sensation-index="4" aria-hidden="false" tabindex="-1" role="option" style="width: 233px; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;"> <div class="quality"> <div class="quality-img"><span class="icon-Industry-Proven-Professionals mad"></span></div> <h4 class="mad textcentre">Ingenious Marketing Specialists</h4> </div> </div></div></div> </div> </div></section>


<div class="hideweb">
<section class="section-padding count wow">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
		        <h3 class="text-center wow fadeInDown" data-wow-delay="0.2s">Numbers We Feel Proud Of!</h3>
		        <p class="text-center wow fadeInDown" data-wow-delay="0.4s">When we say we aim for the best, we set it as our goal to make a change and move mountains with the projects we do. Reach us today with your project goals and join hands to achieve excellence.
</p>
			</div>
		</div>
		<div class="book-area">
		</div>
		<div class="count-area statistics">
			<div class="row text-center statistics-inner">
				<div class="col-xs-3 col-sm-3 col-md-3 stat clearfix" data-count="5678">
                    <span class="number">3410</span>
					<h6 class="count-title">Satisfied Customer</h6>
			
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 stat clearfix" data-count="9892">
					<span class="number">7281</span>
					<h6 class="count-title">Projects Completed</h6>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 stat clearfix" data-count="15890">
					<span class="number">1791</span>
					<h6 class="count-title">Launched Products</h6>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 stat clearfix" data-count="1015">
					<span class="number">995</span>
					<h6 class="count-title">Daily Visits</h6>
				</div>
			</div>	
		</div>
		


	</div>

	
</section></div>



<section class="section-padding testimonials wow fadeInDown" data-wow-delay="0.2s">
  <div class="container">

<div class="testimonial-slider">
  
<div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
        <div class="testimonial_inner">
          <div class="testimonial_bg">
            <div class="testimonial_bg-inner">
             <img class="img-responsive" src="img/testimonial-bg-01.png"> 
            <div class="testimonial_radius">
             SR
              
            </div>
            </div>
            
          </div>
          
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">

      <div class="testimonial-details">

      <div class="testimonial-sec-tab">
       <div class="testimonial-sec-inner clearfix">
         <div class="testimonial-co"></div><h3>Extremely Satisfied with the services!</h3>

         <p>Received my project on time and provided me proper assistance along the way. Loved working with them! </p>

<p class="testimonial-second-name">— Sarah Ramirez, Brand Owner</p>
<div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>
       </div>


        
       </div>
        


      </div>

      
       
       </div>
       
                   </div>
      </div>



      <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
        <div class="testimonial_inner">
          <div class="testimonial_bg">
            <div class="testimonial_bg-inner">
             <img class="img-responsive" src="img/testimonial-bg-02.png"> 
            <div class="testimonial_radius">
             CB
              
            </div>
            </div>
            
          </div>
          
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">

      <div class="testimonial-details">

      <div class="testimonial-sec-tab">
       <div class="testimonial-sec-inner clearfix">
         <div class="testimonial-co"></div><h3>Remarkable work on my website</h3>

         <p>Thanks to The Web Founders, my website is now performing excellently. I’ve worked with them on 5 projects all of them were amazing.</p>

<p class="testimonial-second-name">— Claire Bennet, Owner</p>
<div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>
       </div>


        
       </div>
        


      </div>

      
       
       </div>
       
                   </div>
      </div>










       <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
        <div class="testimonial_inner">
          <div class="testimonial_bg">
            <div class="testimonial_bg-inner">
             <img class="img-responsive" src="img/testimonial-bg-03.png"> 
            <div class="testimonial_radius">
             JW
              
            </div>
            </div>
            
          </div>
          
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">

      <div class="testimonial-details">

      <div class="testimonial-sec-tab">
       <div class="testimonial-sec-inner clearfix">
         <div class="testimonial-co"></div><h3>Loved The Work The Team Put In!</h3>

         <p>The team provided me proper identity and branding solutions. I'll be working with them over new projects very soon</p>

<p class="testimonial-second-name">Jessica Williams, Owner</p>
<div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>
       </div>


        
       </div>
        


      </div>

      
       
       </div>
       
                   </div>
      </div>


</div>

    
      
      
    </div>
  </div>
  </div>
  
</section>

<section class="frequentlywrp visibleweb">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="txtwrp">
               <h3 >Frequently Asked Questions</h3>
            </div>
            <div class="accordion">

               <div class="quest-section"><a href="#">What is Web design and development?</a></div>
               <div class="quest-inner"><p>Web design and development is the process of building websites which is related to the front end design. It incorporates several different features, including webpage layout, content generation, and graphic design - UI using the different technologies and Content Management System. Web designers build webpages by using HTML code tags that outline the content and metadata of each page on the website.</p>
               </div>

               <div class="quest-section"><a href="#">What is difference between web design and development?</a></div>
               <div class="quest-inner">
                  <p >In Web Design principles, web design refers to both the artistic portion of the web and its usage. Web Developers take a website design and actually make a functional features of the website from it. Web developers use languages such as HTML, CSS, JavaScript, PHP and other programming languages to bring to life.</p>

               </div>

               <div class="quest-section "><a href="#">What does a web designer and developer do?</a></div>
               <div class="quest-inner"><p>A web designer is a visual artist who create and develops objects styling for the Internet. Website designers are capable to tap into their creative areas and design the overall layout for a website. A web developer is one that develops applications and functionality for the Internet.</p></div>

               
               <div class="quest-section "><a href="#">How can I learn Professional web development?</a></div>
               <div class="quest-inner"><p>To start, here are the fundamentals steps to becoming a web developer:</p>
               <ul>
                   <li>Learn programing languages HTML, CSS, and JavaScript.</li>
                   <li>Go Through CMS Tutorials. – Example WordPress </li>
                   <li>Learn the design and development - UI and UX.</li>
                   <li>Learn SQL and PHP.</li>
                   <li>Learn SEO – Search Engine Optimization</li>
                   <li>Learn to make website Responsive.</li>
                   
               </ul>
        
               </div>


               <div class="quest-section "><a href="#">What are the types of Web development?</a></div>
               <div class="quest-inner"><p>There are three types of web developer specialism: back-end developer, front-end developer and full-stack developer. Back-end developers deal with the servers and data management. While Front-end developers are accountable for behavior and visuals that run in the user’s web browser. </p></div>


               <div class="quest-section "><a href="#">Which is the best professional web development services in USA?</a></div>
               <div class="quest-inner"><p>The Web Founders is one of the top leading Professional web development services in USA, so if you’re looking for best web developer near me then The Web Founders is the right choice.</p>
                 
               </div>

               <div class="quest-section "><a href="#">How much does a website cost?</a></div>
               <div class="quest-inner">
                   <p>The Web Founders offer different web design and development packages in USA depending upon the nature of requirements. We also offer custom web design and development packages in USA and other region of the world.</p>
                   
               </div>

               <div class="quest-section "><a href="#">What does web development mean?</a></div>
               <div class="quest-inner"><p>Web development mainly referred to the tasks linked with developing websites for hosting through internet. Here at The Web Founders we are providing professional web development services.</p></div>


               <div class="quest-section "><a href="#">What does web design refers to?</a></div>
               <div class="quest-inner"><p>Web design refers how your client recognize your brand. Here at The Web Founders our professional web designer providing you best services just to ensure that your audience is staying on your page and getting knowledge about your business. A higher web design helps you remain your leads on your page.</p></div>

               <div class="quest-section "><a href="#">What are the elements of a good website design?</a></div>
               <div class="quest-inner">
                   <ul>
                       <li>Navigation</li>
                       <li>Web Friendly- fully skilled in Search Engine Optimization </li>
                       <li>Visual Design</li>
                       <li>Optimized mobile website.</li>
                       <li>Designs and colors.</li>
                       
                       
                   </ul>
               </div>

               <div class="quest-section "><a href="#">Who is superior web designer or web developer?</a></div>
               <div class="quest-inner"><p>A web designer is a graphic producer who evolve and styles objects for the website. Website designer cerates the overall layout and look for websites. A web developer is one that develops applications and functionality of the website. We have expert team of web designer and developers and they all are pro in their skills and work.</p></div>

               <div class="quest-section "><a href="#">Can I be a web developer and designer at a time?</a></div>
               <div class="quest-inner">
                  <p>Yes, you could be both a designer and developer but remember you will certainly can be better at one skill. It will take a lot of time and skills to learn both. So, what we will suggest you to connect to us and our teams of expert designers and developers will do the task for you at best rates!</p>
               </div>


               <div class="quest-section "><a href="#">How do I choose best web development and designing company?</a></div>
               <div class="quest-inner"><p>Following are 5 main factors to consider before choosing any custom web development or custom web designing company.</p>
               <ul>
                       <li>Determine your own requirements and compatibility & level of support you need.</li>
                       <li>Search online for the best solution</li>
                       <li>Get in touch with the support staff and share your requirements. </li>
                       <li>Read their online reviews like “The Web Founders reviews”.</li>
                       <li>Repeat the process with other platforms, compare prices and place the order.</li>
                      
                   </ul>
               
               </div>

               <div class="quest-section "><a href="#">What is custom website development?</a></div>
               <div class="quest-inner">
                   <p>Custom website design or development is the simple process to get your digital business requirement fulfilled by an online platform that offer such solution.</p>
                   
               </div>


               <div class="quest-section "><a href="#">Is there any hidden fees included in the package or after order completion?</a></div>
               <div class="quest-inner"><p>NOPE. Not at all. We will only charge the mentioned prices in packages and provide you with the best solution by fulfilling all the features as mentioned in your selected deal or package. You don’t have to pay a single penny.</p></div>


               <div class="quest-section "><a href="#">How To Place An Order?</a></div>
               <div class="quest-inner"><p>Simply contact our support staff or visit the contact us page. You can get in touch with our representative at any time to get your requirements fulfilled.</p></div>


               


            </div>
         </div>
      </div>
   </div>
</section>
<section class="section-padding gray_bg get_quote">
  <div class="container">
    <div class="row">
      <div class="col-md-push-2 col-md-8 col-xs-12">
     
        <h3 class="text-center">Get Free Consultancy</h3>

        

        <p class="text-center grey">If you are interested in speaking with The Web Founders about an upcoming project, there are a number of ways we can make that happen.

        Filling out the form would help us get the right person in touch with you, or you could give us a call.</p>
        <form method="POST" action="/leads/" id="quoteFormBottom" autocomplete="off">
          <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">   
          <input type="hidden" name="brand" value="thewebfoundersuk">   
          <input type="hidden" name="tag" value="modal-auto">
          <input type="hidden" name="price" value="null">
          <input type="hidden" name="news" value="1">
          <div class="row">
                                      <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"  required="required"/>
              </div>
              <input type="hidden" name="_token" value="Y4M3O5ExAzJNiAwHGILiTbGx68DBsuoa49enunvp">
              <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"  required="required"/>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 margin-bottom-20 field-mergedright">
                <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Phone Number" name="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="required" />
              </div>
                      
            <div class="col-xs-12 col-sm-12 col-md-12 margin-bottom-20">
              <textarea class="form-control" name="brief" placeholder="Talk about your project" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Description'" required="required"></textarea>
            </div>
       
            <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedleft mid-body">
              <div class="clearfix">
                
                <!--<div class="col-lg-12">
                  



                <div class="company_profile pull-right">
                  <label class="control control--checkbox">
                  include Company Profile
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                  </label>
                </div>



                <div class="company_profile fill-help pull-left">
                  <label class="control control--checkbox">
                  Please Fill all the field
                 
                  
                  </label>
                </div>

                </div>-->

              </div>
              <div class="text-center">
                <input class="btn-fill btn-quote" type="submit" id="quoteSubmit" name="quote" value="CONTACT OUR TEAM" />
              </div>
            </div>
          </div>
          <input type="hidden" name="page" value="web.html" />
        </form>
      </div>
      <!-- end col-md-6 --> 
      
    </div>
    <!-- end row --> 
    
  </div>
  <!-- end container --> 
  
</section>
<section class="section-padding mult-contact-form">
  <div class="container">
      <div class="col-xs-12 col-sm-4 col-md-4 mult-contact-form-inner">
       <h3>Email</h3>
       <div class="row">
       
        <div class="col-xs-12 col-sm-12 col-md-12 clearfix">
       
        <p class="clearfix">
           <span class="icon-mail"></span>

            <span>
         
          <small class="phone-number"><a href="mailto:query@thewebfounders.co.uk" target="_top">query@thewebfounders.co.uk </a></small>
        <small class="phone-number"><a href="mailto:info@thewebfounders.co.uk" target="_top">info@thewebfounders.co.uk </a></small>

       </span>
        


        </p>

        </div>
       </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 mult-contact-form-inner">
       <h3>Contact</h3>
       <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 clearfix">
        
        <p class="clearfix">

<span class="icon-placeholder"></span>

        <span class="para">447 Broadway 2nd Floor New York,<br> NY 10013, USA</span></p>

        </div>
       </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 mult-contact-form-inner">
       <h3>Phone</h3>
       <div class="row">
        
        <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
        
       
       <p class="clearfix"> 

       <span class="icon-phone-call"></span> 

       <span>
         
          <small class="phone-number">+442038834810 - US</small>
     

       </span>

      </p>

        </div>
       </div>
      </div>
      
   </div>
  <!-- end container --> 
  
</section>
<!--end get_quote Section--> 

<div class="commented-container">


<!-- 
<div class="modal fade" id="portfolio01" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/Raw-01-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Advertising</h4>
                  <h3>Rustic Art Woodworks</h3>
                  <div class="modal-product">
                    
                    <p class="">Rustic Art Woodworks have been working at classy wood based solutions from the early 90s. However, the company needed a new look for a newer audience and that’s exactly what our brand identity experts provided them.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







<div class="modal fade" id="portfolio02" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/ms-e901-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Education and Human Resource</h4>
                  <h3>ERI</h3>
                  <div class="modal-product">
                    
                    <p class="">ERI is a privileged educational institution working internationally in several different countries. We sat down with the folks at ERI personally and understood their needs in terms of brand identity. We gave them the best brand identity solutions that they can possibly find.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







<div class="modal fade" id="portfolio03" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/13-01.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Automotive and Transport</h4>
                  <h3>High End Movers</h3>
                  <div class="modal-product">
                    
                    <p class="">Since its inception, High End Movers have been one of the best movers in the country and even cross country. The company owners finally put thought into changing their existing brand identity. This is where we came in and provided them with a brand identity that moved mountains.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="portfolio04" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/10-01.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Movie Poster</h4>
                  <h3>How To Change The World</h3>
                  <div class="modal-product">
                    
                    <p class="">It was our privilege at Logo Sensation to work with a legendary film making professional like Jerry Rothwell on an in-depth project like How To Change The World. This documentary film was released back in 2015 and our design professionals worked hard to create an excellent movie poster for it that compliments the movie.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio05" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/the-vet-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Healthcare and Life science</h4>
                  <h3>The Vet</h3>
                  <div class="modal-product">
                    
                    <p class="">Ever thought it’s time for your pet to see the doctor? Well, the vet is just the place to go. The vet reached us early 2016 looking for a brand identity that is rather adorable. Our identity architects jumped right into the project and created a cute brand identity like no other.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="portfolio06" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/17-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Software and Hi-Tech</h4>
                  <h3>Tech Works</h3>
                  <div class="modal-product">
                    
                    <p class="">Ever thought of throwing out your crappy old PC or gadget? Well, we’ve been there too. This is what companies like Tech Work aim to change. The company reached us back in 2015 and talked to us about a brand identity revamp which we happily delivered.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio09" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/ls-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Software and Hi-tech</h4>
                  <h3>Liberty Communications</h3>
                  <div class="modal-product">
                    
                    <p class="">Liberty Communication aimed to make communications easier and that needed to be portrayed from their brand identity. We assisted the folks at Liberty Communications with apt brand identity solutions.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/ak-portfolio-2-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Automotive and Transport</h4>
                  <h3>Cape Liberty Transfers</h3>
                  <div class="modal-product">
                    
                    <p class="">Cape Liberty Transfers is easily one of the best transport assistance for your goods that you can possibly get. Our creative designers are proud to have assisted the company just perfectly with its brand identity, setting it miles apart from its direct competition.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/07-01.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Travel and Hospitality</h4>
                  <h3>La’more Hookah</h3>
                  <div class="modal-product">
                    
                    <p class="">Serving the best hookah since the 90’s, La’amore Hookah was search for a complete brand identity revamp. Their officials reached us back in 2013 and we took great pride in making a conceptual brand identity that suits their existence.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="portfolio07" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/ls-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Software and Hi-tech</h4>
                  <h3>Liberty Communications</h3>
                  <div class="modal-product">
                    
                    <p class="">Liberty Communication aimed to make communications easier and that needed to be portrayed from their brand identity. We assisted the folks at Liberty Communications with apt brand identity solutions.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/07-01.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>La’more Hookah</h4>
                  <h3>Travel and Hospitality</h3>
                  <div class="modal-product">
                    
                    <p class="">Serving the best hookah since the 90’s, La’amore Hookah was search for a complete brand identity revamp. Their officials reached us back in 2013 and we took great pride in making a conceptual brand identity that suits their existence.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/ol-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Travel and Hospitality</h4>
                  <h3>Masterpiece Premium Wines</h3>
                  <div class="modal-product">
                    
                    <p class="">Masterpiece Premium Wines, much like their name provide some of the best wine in the world. For a masterpiece, the brand identity too needs to be a masterpiece as well. That’s exactly what we provided! A classy brand identity for a classy brand.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/msb-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Education and Human Resource</h4>
                  <h3>The Building Service Centre</h3>
                  <div class="modal-product">
                    
                    <p class="">We were contacted by the building service centre back in 2016 inquiring for a smashing brand identity that takes the users breath away. The corporate look defined by our design gurus made the difference in the brand identity of the building service centre.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/10-01-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Travel and Hospitality</h4>
                  <h3>DealerLog 360</h3>
                  <div class="modal-product">
                    
                    <p class="">Our expert designers and developers loved working with DealerLog 360. The certified auto dealers are one of the best in the market and required a unique logo design for their brand. We are still assisting DealerLog 360 with our design and branding services.Our expert designers and developers loved working with DealerLog 360. The certified auto dealers are one of the best in the market and required a unique logo design for their brand. We are still assisting DealerLog 360 with our design and branding services.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/un-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Education and Human Resource</h4>
                  <h3>United Education Community</h3>
                  <div class="modal-product">
                    
                    <p class="">The United Education Community is one of the best resources we have for education in the world. Our brand analysts first did a complete brand analysis and created a relative brand identity to create excellent results for them.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio08" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/3-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Real State and Property</h4>
                  <h3>Acquired Property</h3>
                  <div class="modal-product">
                    
                    <p class="">Acquired Property came to our brand identity development specialists and discussed their prospects. We provided the real estate company with some of the best solutions and a brand identity that turned out to be a remarkable success for the brand.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/ak-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Automotive and Transport</h4>
                  <h3>LBoogie Trucking</h3>
                  <div class="modal-product">
                    
                    <p class="">LBoogie Trucking has helped move from families to government supplies making it one of the best automotive and transportation clients that we have till date. Our creative thinkers helped them create the best marketing solutions along with the best brand identity solutions till date.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/jh-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Travel and Hospitality</h4>
                  <h3>The Travel Wagon</h3>
                  <div class="modal-product">
                    
                    <p class="">The Travel Wagon is the Los Angeles, California’s favorite restaurant on wheels. For a funky concept like this, we created a unique brand identity for The Travel Wagon. The company is still working strong with us at The Web Founders and continues to prosper in its business terms.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="portfolio13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/sports-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Healthcare and Life Science </h4>
                  <h3>Fitness Legion</h3>
                  <div class="modal-product">
                    
                    <p class="">Fitness Legion is an international chain of fitness training gyms with direct competition that was excelling in terms of brand identity. Fitness Legion discussed the logo brief in depth with our design consultants and received a satisfying brand identity for both their customers and themselves as well.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/ms-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Software and Hi-Tech</h4></h4>
                  <h3>S Networks</h3>
                  <div class="modal-product">
                    
                    <p class="">S Networks is currently one of the best network service providers in North America and they reached our experts for design consultation. We helped S Networks create one of the best brand identities till date and outclass their competition as well as satisfy their audience.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/vs-portfolio-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Real Estate and Property</h4>
                  <h3>Vista Events Greece</h3>
                  <div class="modal-product">
                    
                    <p class="">Vista Events is easily one of the best event planners and organizers in Greece. Vista Events reached our thinkers at The Web Founders discussing what the prospects are for a new brand identity. The company is since satisfied with the services provided to them.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio09" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-demo-02"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Website UI</h4>
                  <h3>Long Island Maids</h3>
                  <div class="modal-product">
                    
                    <p class="">Long Islands Maids is a maid registration website that helps you with hospitality properly by connecting you with some of the best maids in New York, New Jersey and Long Island. The company required proper website UI/UX design to woo the customers.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> 
                  </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







<div class="modal fade" id="portfolio10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/10-01.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Automotive and Transport</h4>
                  <div class="modal-product">
                    
                    <p class="">Connecting you with the best car deals in town, Dealer log 360 looked for fresh and funky modification to their logo. Our brand analysts not only provided the company with consultation, we provided them with a logo design like no other.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/12-portfolio-book-cover.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Book Cover</h4>
                  <h3>One Religion</h3>
                  <div class="modal-product">
                    
                    <p class="">Steven L Williams reached our website in 2014 asking for a book design cover that compliments the book One Religion very strongly. Our visual artists made sure that nothing but the best book cover that complimented the project made it to Steven which he later printed over the book.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <img src="https://www.thewebfounders.co.uk/img/12-01.png"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-demo-01">
                     



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                   
                  <div class="d_c">
                    
                      <h4>Healthcare and Life science</h4>
                  <div class="modal-product">
                    
                    <p class="">Platinum Plus Hair is a unique hair product essential for those who like to take good care of their long locks. The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>








<div class="modal fade" id="portfolio13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/13-01.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Automotive and Transport</h4>
                  <div class="modal-product">
                    
                    <p class="">Since its inception, High End Movers have been one of the best movers in the country and even cross country. The company owners finally put thought into changing their existing brand identity. This is where we came in and provided them with a brand identity that moved mountains.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="portfolio14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/11-portfolio-identity.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Brand Identity</h4>
                  <h3>Bedazzled Bijou</h3>
                  <div class="modal-product">
                    
                    <p class="">Bedazzled Bijou reached our design professionals and required proper consultation in terms of design. After resolved, the folks at bijou understood how important a design change can be and provided us the opportunity to create results like no other.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="portfolio15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-brand">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/portfolio/14-portfolio-identity.png"> 
               </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Brand Identity</h4>
                  <h3>Capital Avenue</h3>
                  <div class="modal-product">
                    
                    <p class="">Capital Avenue reached us only a few months ago requiring nothing but the best identity solutions that we can provide. Additionally, we provided them with design and digital marketing consultation that suits their needs. Furthermore, digital marketing campaigns for the company are also being handled smoothly by our professionals.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="portfolio16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/219647968" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Succeed</h3>
                  <div class="modal-product">
                    
                    <p class="">Motion design is one of the services that we push our customers to move forward with. Collectibles reached us in early 2015 to get a 2D animation created. Mainly, It was an animation project. Collectibles were more than just satisfied with the end-results.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="portfolio17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
               <img src="https://www.thewebfounders.co.uk/img/17.png"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/219647968" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Software and Hi-Tech</h4>
                  <div class="modal-product">
                    
                    <p class="">Ever thought of throwing out your crappy old PC or gadget? Well, we’ve been there too. This is what companies like Tech Work aim to change. The company reached us back in 2015 and talked to us about a brand identity revamp which we happily delivered.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="portfolio19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <img src="https://www.thewebfounders.co.uk/img/19-01.png"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/219647968" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Media and Entertainment </h4>
                  <div class="modal-product">
                    
                    <p class="">Have you ever felt bored looking at the same style of emojis? Well, this is where My Emojis can help. The company’s identity took birth right here at The Web Founders and they are now busy creating new emojis for different platforms.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="ios-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 80%;">
            <div class="d_c">
              <div class="row if-phone">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> <div class="a-iphone-placeholder">
                      <div class="a-iphone-placeholder-demo01 ios-demo01"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Software and Hi-Tech</h4>
                  <h3>Main Title</h3>
                  <div class="modal-product">
                    
                    <p class="">through the design development process – always sharing and discussing multiple creative directions. through the design development process – always sharing and discussing multiple creative directions.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="web-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                 <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Sub Title</h4>
                  <h3>Main Title</h3>
                  <div class="modal-product">
                    
                    <p class="">through the design development process – always sharing and discussing multiple creative directions. through the design development process – always sharing and discussing multiple creative directions.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a> </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="portfolio30" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/Home-(SA)-(8)-Financial.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Guardian</h3>
                  <div class="modal-product">
                    
                    <p class="">Guardian provides unique investment facilities and is an essential for those who are looking to invest. The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio31" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/N_Battle-League-gaming.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WWEB UI/UX</h4>
                  <h3>Battle Games</h3>
                  <div class="modal-product">
                    
                    <p class="">Battle games provides unique Gaming experience and is a must visit for those who are looking for some amazing games. The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio32" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/N_EGI-Applications-Inc-Advertising.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>EGI Installer</h3>
                  <div class="modal-product">
                    
                    <p class="">EGI Installer provides unique car solutions. The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio33" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/N_gresilva-USA-health.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Gresilva Grills</h3>
                  <div class="modal-product">
                    
                    <p class="">Gresilva Grills is one of the finest food chain who serves delicious food in the town. The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio34" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/N_Perceptive-MG-travel.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Perspective Management</h3>
                  <div class="modal-product">
                    
                    <p class="">The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio35" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/N_VW-Breakers-UK-AUTOMATIVE.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Breakers UK</h3>
                  <div class="modal-product">
                    
                    <p class="">The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio36" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/NK_Afro-Signatures_R1-media.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Afrosignatures</h3>
                  <div class="modal-product">
                    
                    <p class="">The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio37" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/NK_Beast-Strong-sports.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Beast Strong Power House</h3>
                  <div class="modal-product">
                    
                    <p class="">Beast stong power house provides unique gym facilities and is an essential for those who like to take good care of their body. The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     
                  
                  </div>
                  
                  

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio38" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/NK_Get-Real-Stone-real-state.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Get Real Stone</h3>
                  <div class="modal-product">
                    
                    <p class="">
The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio39" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/NK_Lean-Guitar-Online-education.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Learn Guitar</h3>
                  <div class="modal-product">
                    
                    <p class="">Learn guitar.com provides unique guitar facilities and is an essential for those who are big music freaks. The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolio40" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/NK_R-CISC_R6-softwear.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>R-CISC</h3>
                  <div class="modal-product">
                    
                    <p class="">The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity..</p>

                  </div>
                  
                  <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio41" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/bitgen-softwear.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>BitGen Technologies LLC</h3>
                  <div class="modal-product">
                    
                    <p class="">
The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20 slide-btn"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 

                     </div>
                     
                  <div class="actions margin-top-20 slide-btn"> <a href="http://bitgen.tech" target="_blank" class="btn-green">TAKE ME TO THE WEBSITE</a> 

                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio42" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/logosanctuary-advertising.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Logosanctuary</h3>
                  <div class="modal-product">
                    
                    <p class="">The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20 slide-btn"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>
                     
                  <div class="actions margin-top-20 slide-btn"> <a href="http://www.logosanctuary.com/" target="_blank" class="btn-green">TAKE ME TO THE WEBSITE</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio43" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/mnlakestransportation-automative.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>MN LAKES Transportation LLC</h3>
                  <div class="modal-product">
                    
                    <p class="">The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20 slide-btn"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>
                  
                  <div class="actions margin-top-20 slide-btn"> <a href="http://mnlakestransportation.com/" target="_blank" class="btn-green">TAKE ME TO THE WEBSITE</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio44" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio">
                      <img src="https://www.thewebfounders.co.uk/img/portfolio/olfitness-sports.png"></a></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Olfitness</h3>
                  <div class="modal-product">
                    
                    <p class="">The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20 slide-btn"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>
                  <div class="actions margin-top-20 slide-btn"> <a href="http://olfitness.co.uk/" target="_blank" class="btn-green">TAKE ME TO THE WEBSITE</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio45" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/revolutionary-education.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Revolutionary</h3>
                  <div class="modal-product">
                    
                    <p class="">
The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20 slide-btn"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>
                  <div class="actions margin-top-20 slide-btn"> <a href="http://revolutionary.cc" target="_blank" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio46" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/sensationnelbridal-media.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Sensationnelbridal</h3>
                  <div class="modal-product">
                    
                    <p class="">The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20 slide-btn"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div> 
                 <div class="actions margin-top-20 slide-btn"> <a href="http://www.sensationnelbridal.com" target="_blank" class="btn-green">TAKE ME TO THE WEBSITE</a> 
                     </div> 
                     
                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="portfolio47" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 web-placeholder-demo02 web-portfolio"><img src="https://www.thewebfounders.co.uk/img/portfolio/takecareofyourbills-financial.png"></div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>WEB UI/UX</h4>
                  <h3>Take Care Of Your Bills</h3>
                  <div class="modal-product">
                    
                    <p class="">For over 10 years we have diligently worked at saving our community members the most money possilbe. See how much you may save today quickly and with no obligation. The product creators reached us for a brand identity which didn’t exist. Our brand identity development experts gave life to a new and beautiful identity.</p>

                  </div>
                  
                  <div class="actions margin-top-20 slide-btn"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-green">GET FREE CONSULTANCY</a> 
                     </div>
                     
                  <div class="actions margin-top-20 slide-btn"> <a href="http://takecareofyourbills.com" target="_blank" class="btn-green">TAKE ME TO THE WEBSITE</a> 
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





















<div class="modal fade" id="portfolio48" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224640243" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>CloudMoose</h3>
                  <div class="modal-product">
                    
                    <p class="">CloudMoose reached us to get brand identity solution. CloudMoose were more than just satisfied with the end-results</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="portfolio49" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224639663" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>TenEighty Group</h3>
                  <div class="modal-product">
                    
                    <p class="">TenEighty Group reached us to get brand identity solution. TenEighty Group were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio50" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224633186" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>GeniusSearch</h3>
                  <div class="modal-product">
                    
                    <p class="">GeniusSearch reached us to get brand identity solution. GeniusSearch were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio51" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224632059" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Ripple Banks </h3>
                  <div class="modal-product">
                    
                    <p class="">Ripple Banks reached us to get brand identity solution. Ripple Banks were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="portfolio90" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/242220226" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Credo College Intro </h3>
                  <div class="modal-product">
                    
                    <p class="">Credo College Intro reached us to get brand identity solution. Credo College Intro were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio52" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224625844" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Succeed</h3>
                  <div class="modal-product">
                    
                    <p class="">Motion design is one of the services that we push our customers to move forward with. Collectibles reached us in early 2015 to get a 2D animation created. Mainly, It was an animation project. Collectibles were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio53" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224625737" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Try Before Hire</h3>
                  <div class="modal-product">
                    
                    <p class="">Try Before Hire reached us to get brand identity solution. Try Before Hire were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>

                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio54" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224625548" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>The Enterprise Solution</h3>
                  <div class="modal-product">
                    
                    <p class="">The Enterprise Solution Platform reached us to get brand identity solution. The Enterprise Solution Platform were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio55" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224625425" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Samuel Evans </h3>
                  <div class="modal-product">
                    
                    <p class="">Samuel Evans reached us to get brand identity solution. Samuel Evans were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio56" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224625281" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Car Directly</h3>
                  <div class="modal-product">
                    
                    <p class="">Car Directly reached us to get brand identity solution.Car Directly were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio57" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224624903" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>




                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Budget Blinds</h3>
                  <div class="modal-product">
                    
                    <p class="">Budget Blinds Reached us to get brand identity solution. Budget Blinds were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio58" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224624903" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>2D Animated Title</h4>
                  <h3>Collectibles</h3>
                  <div class="modal-product">
                    
                    <p class="">Motion design is one of the services that we push our customers to move forward with. Collectibles reached us in early 2015 to get a 2D animation created. Mainly, It was an animation project. Collectibles were more than just satisfied with the end-results.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio59" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/224640243" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Artist Life Studio</h3>
                  <div class="modal-product">
                    
                    <p class="">Artist Life Studio reached our motion design engineers to discuss their explainer video project. We provided Artist Life Studio with the services that they needed enabling maximum satisfaction. The company additionally discussed their future projects with us as well.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="portfolio60" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/228965051" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Kanga Coders Startup</h3>
                  <div class="modal-product">
                    
                    <p class="">Kanga Coders Startup reached us a few years ago to discuss their motion graphics project. We provided the customers with the best motion graphics service that they required. The folks at Kanga Coders Startup were completely satisfied with the services.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio61" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/228964748" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Execast</h3>
                  <div class="modal-product">
                    
                    <p class="">Execast reached us back in 2011 to discuss their prospects in motion graphics development. They additionally discussed what they wanted from their explainer video and it is exactly what they got. The crew at Execast was extremely satisfied.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio62" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/228965003" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>I Must Have It</h3>
                  <div class="modal-product">
                    
                    <p class="">I Must Have It is an App Startup targeting new and unique entrepreneurs with application development ideas. The company was seeking motion design solutions and that’s exactly what the company got with an excellently designed explainer video by The Web Founders.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio63" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/228964949" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>X Time</h3>
                  <div class="modal-product">
                    
                    <p class="">X Time reached us a few years ago to discuss their motion graphics project. We provided the customers with the best motion graphics service that they required. The folks at X Time was completely satisfied with the services.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="portfolio64" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/228965106" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Welcome Pickups</h3>
                  <div class="modal-product">
                    
                    <p class="">Welcome Pickups reached our motion design engineers to discuss their explainer video project. We provided Welcome Pickups with the services that they needed enabling maximum satisfaction. The company additionally discussed their future projects with us as well.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="portfolio65" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/228965081" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Buy Hold Sell</h3>
                  <div class="modal-product">
                    
                    <p class="">Buy Hold Sell reached us back in 2014 to discuss their prospects in motion graphics development. They additionally discussed what they wanted from their explainer video and it is exactly what they got. The crew at Buy Hold Sell was extremely satisfied</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio66" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/229085226" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>iKontrol</h3>
                  <div class="modal-product">
                    
                    <p class="">iKontrol is one of our favorite clients who reached us back in 2010 to discuss their prospects in motion graphics development. They additionally discussed what they wanted from their explainer video and it is exactly what they got. The satisfaction level was top notch for them.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="portfolio67" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-web">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                <div class="web-placeholder">
                      <div class="web-placeholder-demo01 ios-demo01">
                        
                        <iframe src="https://player.vimeo.com/video/229085983" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>



                      </div>
                    </div> </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Motion Graphics</h4>
                  <h3>Web Top</h3>
                  <div class="modal-product">
                    
                    <p class="">Web Top reached our motion design engineers to discuss their explainer video project. We provided Web Top with the services that they needed enabling maximum satisfaction. The company additionally discussed their future projects with us as well.</p>

                  </div>
                  
                <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="app_portfolio01" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-wearable">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> 
                  
                  <div class="a-phone-placeholder">
                      <div class="a-phone-placeholder-demo01 android-demo01"></div>
                    </div>

                 </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">


                 <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Android Application</h4>
                    <h3>Real Estate App (Bricks)</h3>
                    <p>Bricks is a real estate app for Android based devices allowing its users to find their ideal homes at the ideal price. The app additionally allows you to interact with landlords and home owners to bid and communicate regarding your potential future estate.</p>

                     <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>
                  
               

                  </div>


                </div>


                   
               
                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<div class="modal fade" id="app_portfolio02" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-wearable">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> 
                  
                   <div class="a-watch-placeholder">
                      <div class="a-watch-placeholder-wrapper">
                        <div class="a-watch-placeholder-demo01 ios-demo12"></div>
                      </div>
                    </div>

                 </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">
                   
                <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>IOS/WEARABLE APPLICATION</h4>
                  <h3>Fitness App (Trainyou)</h3>
                  <div class="modal-product">
                    
                    <p class="">TrainYou is a fitness management and training app that extends to wearables for iOS platform. The application allows you to keep track of your health while allowing you to get in shape. There are plenty of fitness modes to switch to in the application for users.</p>


                     

                  </div>
                  
               <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    
                     
                     
                     </div>

                  </div>


                </div>

                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="app_portfolio03" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-wearable">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> 
                  
                  <div class="a-iphone-placeholder">
                      <div class="a-iphone-placeholder-demo01 ios-demo21"></div>
                    </div>


                 </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">


                 <div class="d_t">
                  
                  <div class="d_c">
                    
                     <h4>iOS Application</h4>
                    <h3>Flight Booking App (Fly High)</h3>
                    <p>Fly High is a Flight booking application made for iOS devices assisting users in buying air tickets faster and better. From booking your favorite applications to keeping track of flight details, Fly high helps you fly easily, safely and in an overall better manner.</p>

                     <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>
                  
               

                  </div>


                </div>


                   
               
                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="modal fade" id="app_portfolio04" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-wearable">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> 
                  
                  <div class="a-phone-placeholder">
                      <div class="a-phone-placeholder-demo01 android-demo09"></div>
                    </div>

                 </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">


                 <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Android Application</h4>
                    <h3>HealthCare app (DocPlus)</h3>
                    <p>Doc+ is an Android application that allows you to keep track of your health in real-time as well as stay connected with you doctor. From keeping track of your prescription and dosage to staying connected to your doctor for the newest appointments.</p>

                     <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>
                  
               

                  </div>


                </div>


                   
               
                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>










<div class="modal fade" id="app_portfolio05" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-wearable">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> 
                 <div class="a-phone-placeholder">
                      <div class="a-phone-placeholder-demo01 ios-demo22"></div>
                    </div>

                 </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">


                 <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>Android Application</h4>
                    <h3>YUMM.</h3>
                    <p>Yumm is an android based application that keeps you connected with the latest trends and recipes from the world of delicious food. Browse through the latest recipes with complete details and even cooking videos that you need.</p>

                     <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>
                  
               

                  </div>


                </div>


                   
               
                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






<div class="modal fade" id="app_portfolio06" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-wearable">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> 
                 <div class="a-watch-placeholder">
                      <div class="a-watch-placeholder-wrapper">
                        <div class="a-watch-placeholder-demo01 ios-demo10"></div>
                      </div>
                    </div>

                 </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">


                 <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>IOS APPLICATION</h4>
                    <h3>Find Location App (Simon)</h3>
                    <p>Simon is a smart GPS enabled iOS application that extends to iOS wearables as well. For travelers with wanderlust, Simon is the ultimate personal assistant that talks to users and dictates navigation along the way. Want to find your location? Just talk to Simon!</p>

                     <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>
                  
               

                  </div>


                </div>


                   
               
                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









<div class="modal fade" id="app_portfolio07" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-wearable">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> 
                 <div class="a-iphone-placeholder">
                      <div class="a-iphone-placeholder-demo01 ios-demo07"></div>
                    </div>

                 </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">


                 <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>IOS APPLICATION</h4>
                    <h3>Music Player App (REC.)</h3>
                    <p>REC. is an iOS based entertainment application that allows its users to not only record any audio track of their choice, but is also a built-in music player that allows you to play your favorite songs from your favorite artists.</p>

                     <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>
                  
               

                  </div>


                </div>


                   
               
                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






<div class="modal fade" id="app_portfolio08" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-wearable">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> 
                 <div class="a-iphone-placeholder">
                      <div class="a-iphone-placeholder-demo01 ios-demo01"></div>
                    </div>

                 </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">


                 <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>IOS APPLICATION</h4>
                    <h3>Shopping App (iCART)</h3>
                    <p>iCart is an iOS based marketplace app that gives you the ability to shop from your favorite stores in just a few taps. With payment integration already a part of the application, iCart is your one stop shop for everything fashion.</p>

                     <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>
                  
               

                  </div>


                </div>


                   
               
                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







<div class="modal fade" id="app_portfolio09" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-wearable">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> 
                 <div class="a-iphone-placeholder">
                      <div class="a-iphone-placeholder-demo01 ios-demo14"></div>
                    </div>

                 </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">


                 <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>IOS APPLICATION</h4>
                    <h3>Payment Transaction App (InstaPay)</h3>
                    <p>Instapay is a finance app for iOS based devices that allows you manage and pay smartly with just a few taps. With two pin and finger print verification, Instapay is a safe, secure and easy way to handle your money.</p>

                     <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>
                  
               

                  </div>


                </div>


                   
               
                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






<div class="modal fade" id="app_portfolio10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content greenbg">
      <button type="button" class="btn btn-close" data-dismiss="modal">
        <svg viewPort="0 0 50 50" version="1.1"
     xmlns="http://www.w3.org/2000/svg">
    <line x1="1" y1="20" 
          x2="20" y2="1" 
          stroke="white" 
          stroke-width="2"/>
    <line x1="1" y1="1" 
          x2="20" y2="20" 
          stroke="white" 
          stroke-width="2"/>
</svg>
      </button>
      <div class="modal-body">
        <div class="container">
          <div class="d_t" style="width: 100%;">
            <div class="d_c">
              <div class="row if-wearable">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2"> 
                 <div class="a-iphone-placeholder">
                      <div class="a-iphone-placeholder-demo01 ios-demo17"></div>
                    </div>

                 </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="content-height">


                 <div class="d_t">
                  
                  <div class="d_c">
                    
                      <h4>IOS APPLICATION</h4>
                    <h3>Movie Rating App (StubHut)</h3>
                    <p>StubHut is an entertainment based iOS application for movie buffs and TV fanatics that likes to stay updated. From movie ratings to show timings, to even staying on the loop for the favorite entertainment shows around you; Stubhut is the app to use!</p>

                     <div class="actions margin-top-20"> <a href="https://www.thewebfounders.co.uk/GetFreeConsultancy" class="btn-fill">GET FREE CONSULTANCY</a>    </div>

                  </div>
                  
               

                  </div>


                </div>


                   
               
                 </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>








<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container to-close">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
    <g fill="none" stroke="#fff" stroke-width="2" stroke-miterlimit="10">
      <path d="m18.947 17.15l26.1 25.903"></path>
      <path d="m19.05 43.15l25.902-26.1"></path>
    </g>
    </svg> </span></button>
  </div>
  <div class="d_t">
    <div class="d_c">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container">
              <div class="clearfix popup-demo">
                <div class="col-lg-8 col-md-8 demo-inside ">
                  <div class="d_c">
                    <h4>iOS Application</h4>
                    <h3>Shopping App (iCART)</h3>
                    <p>iCart is an iOS based marketplace app that gives you the ability to shop from your favorite stores in just a few taps. With payment integration already a part of the application, iCart is your one stop shop for everything fashion.</p>
                    <div class="actions"> <a href="https://www.thewebfounders.co.uk/showcase" class="btn-line btn-orange margin-right-5">Discover More</a> <a href="https://www.thewebfounders.co.uk/Get-a-Free-Quote" class="btn-line btn-gray margin-left-5">Start Molding Your Idea</a> </div>
                  </div>
                </div>
                <div class="col-md-4 pull-right  demo-image-for no-xs">
                  <div class="d_c">
                    <div class="a-iphone-placeholder">
                      <div class="a-iphone-placeholder-demo01 ios-demo01"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container to-close">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
    <g fill="none" stroke="#fff" stroke-width="2" stroke-miterlimit="10">
      <path d="m18.947 17.15l26.1 25.903"></path>
      <path d="m19.05 43.15l25.902-26.1"></path>
    </g>
    </svg> </span></button>
  </div>
  <div class="d_t">
    <div class="d_c">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container">
              <div class="clearfix popup-demo">
                <div class="col-lg-8 col-md-8 demo-inside ">
                  <div class="d_c">
                    <h4>iOS Application</h4>
                    <h3>Payment Transaction App (InstaPay)</h3>
                    <p>Instapay is a finance app for iOS based devices that allows you manage and pay smartly with just a few taps. With two pin and finger print verification, Instapay is a safe, secure and easy way to handle your money.</p>
                    <div class="actions"> <a href="https://www.thewebfounders.co.uk/showcase" class="btn-line btn-orange margin-right-5">Discover More</a> <a href="https://www.thewebfounders.co.uk/Get-a-Free-Quote" class="btn-line btn-gray margin-left-5">Start Molding Your Idea</a> </div>
                  </div>
                </div>
                <div class="col-md-4 pull-right  demo-image-for no-xs">
                  <div class="d_c">
                    <div class="a-iphone-placeholder">
                      <div class="a-iphone-placeholder-demo01 ios-demo14"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container to-close">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
    <g fill="none" stroke="#fff" stroke-width="2" stroke-miterlimit="10">
      <path d="m18.947 17.15l26.1 25.903"></path>
      <path d="m19.05 43.15l25.902-26.1"></path>
    </g>
    </svg> </span></button>
  </div>
  <div class="d_t">
    <div class="d_c">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container">
              <div class="clearfix popup-demo">
                <div class="col-lg-8 col-md-8 demo-inside ">
                  <div class="d_c">
                    <h4>iOS Application</h4>
                    <h3>Movie Rating App (StubHut)</h3>
                    <p>StubHut is an entertainment based iOS application for movie buffs and TV fanatics that likes to stay updated. From movie ratings to show timings, to even staying on the loop for the favorite entertainment shows around you; Stubhut is the app to use!</p>
                    <div class="actions"> <a href="https://www.thewebfounders.co.uk/showcase" class="btn-line btn-orange margin-right-5">Discover More</a> <a href="https://www.thewebfounders.co.uk/Get-a-Free-Quote" class="btn-line btn-gray margin-left-5">Start Molding Your Idea</a> </div>
                  </div>
                </div>
                <div class="col-md-4 pull-right  demo-image-for no-xs">
                  <div class="d_c">
                    <div class="a-iphone-placeholder">
                      <div class="a-iphone-placeholder-demo01 ios-demo17"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container to-close">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
    <g fill="none" stroke="#fff" stroke-width="2" stroke-miterlimit="10">
      <path d="m18.947 17.15l26.1 25.903"></path>
      <path d="m19.05 43.15l25.902-26.1"></path>
    </g>
    </svg> </span></button>
  </div>
  <div class="d_t">
    <div class="d_c">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container">
              <div class="clearfix popup-demo">
                <div class="col-lg-8 col-md-8 demo-inside ">
                  <div class="d_c">
                    <h4>iOS Application</h4>
                    <h3>Music Player App (REC.)</h3>
                    <p>REC. is an iOS based entertainment application that allows its users to not only record any audio track of their choice, but is also a built-in music player that allows you to play your favorite songs from your favorite artists.</p>
                    
                  </div>
                  <div class="actions"> <a href="https://www.thewebfounders.co.uk/showcase" class="btn-line btn-orange margin-right-5">Discover More</a> <a href="https://www.thewebfounders.co.uk/Get-a-Free-Quote" class="btn-line btn-gray margin-left-5">Start Molding Your Idea</a> </div>
                </div>
                <div class="col-md-4 pull-right  demo-image-for no-xs">
                  <div class="d_c">
                    <div class="a-iphone-placeholder">
                      <div class="a-iphone-placeholder-demo01 ios-demo07"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 -->


</div>





<script type="text/javascript">
//window.onload = function(e){  $('.main-menu').hide(); $('.nav-toggle').hide(); $('footer').children('div').eq(0).hide();$('footer').css({'visibility':'visible'});  } 
</script>

  <footer class="wow">
  <div class="container sub-footer section-padding">
  
  </div>
 </div>
  <section class="copright">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-12">
          <p>© 2019 The Web Founders  | All rights reserved.</p>
        </div>
        <div class="col-md-8"> <span class="privacy pull-right">
        <a href="https://www.thewebfounders.co.uk/privacy-policy/">Privacy Policy</a>
        <a href="https://www.thewebfounders.co.uk/terms-conditions/">Terms of Service</a></span> </div>
      </div>
    </div>
  </section>
</footer>
 


<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="
sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script>
  $('#home-pricing-web,#home-pricing-ecom,#home-pricing-brand,#home-pricing-video').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        mouseDrag:false,
            navText:[`<div class="goal-daba">
          <i class="fa fa-arrow-left"></i>
        </div>`,`<div class="goal-daba">
          <i class="fa fa-arrow-right"></i>
        </div>`],
            responsive:{
                0:{
                    items:1
                },
                767:{
                    items:2
                },
                991:{
                    items:3
                }
            }
          });
</script>
<script src="js/pricing-slide.js"></script>

  

<script src="js/selectFx.js" ></script>

 
<script src="js/classie.js" ></script>

<script src="js/app.js"></script>

<script type="text/javascript" src="js/revolution.min.js" ></script>

<script src="js/scripts.js"></script>

<script src="js/jquery-ui.js" ></script>

<script src="js/jquery.dataTables.min.js" ></script>

<script src="js/dataTables.material.min.js" ></script>

<script src="js/jquery.datetimepicker.full.min.js" ></script>

<!-- <script src="js/mlib.js"></script> -->

<script src="js/tscripts.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>





<script src="../cdn.jsdelivr.net/npm/vanilla-lazyload%4012.0.0/dist/lazyload.min.js"></script>
<script>



$('body').delegate('.country','click',function(){
$('input[name="pc"]').val($(this).find('.dial-code').text());

var oldString2=$('.selected-flag').attr('title').toUpperCase();
  var newString12 = oldString2.split(':',1)[0];
               $('input[name="ctry"]').val(newString12);
 });


    // $("#modalForDiscount").modal("show");
    $('head').append('<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=b24c63b6-64a3-4e62-b7ee-492f535de0cd"><\/script>');
    $(document).on('click','.liveChat',function(){
        $zopim.livechat.window.show();

    });
    $zopim(function() {
       $zopim.livechat.hideAll();
    });




  $(function() {
        var myLazyLoad = new LazyLoad({
   elements_selector: ".lazy"
   // load_delay: 300 //adjust according to use case
});
    });
    
  $(document).ready(function(){
    
});
</script>
<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
    initialCountry: "auto",
     geoIpLookup: getIp,
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });

   function getIp(callback) {
 fetch('https://ipinfo.io/json?token=e76fd2b326b24f', { headers: { 'Accept': 'application/json' }})
   .then((resp) => resp.json())
   .catch(() => {
     return {
       country: 'us',
     };
   })
   .then((resp) => callback(resp.country));
}

 </script>





</body>


</html>