<?php 
include_once("include/token.php");
if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
}else{
	$requesMet = "http";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Website Design And Development | The Website Founders</title>


    <style>
.mblForm{
  background-color:#000;
  padding:100px 0;
  
}    
.mblForm .fldset{
  margin-top:20px;
}    
.beforemblform{
  background:#fff;
  padding:20px;
  border-radius:20px;
  max-width:80%;
  margin:0 auto;
}
    body > main > div.slider-wrapper > section > div > div > div > div > div > div > div > div:nth-child(2) > form{
    
    background-color: #ffffffc2;
    width: 70%;
    margin: 0 auto;
    border-radius: 30px;
    padding: 30px;
    }


    body > main > div.slider-wrapper > section > div > div > div > div > div > div > div > div:nth-child(2) > form input{
    width: 100%;
    padding: 10px;
    background-color: #fff;
    border: none;
    margin-bottom: 10px;
    border-radius: 10px;

    }


    body > main > div.slider-wrapper > section > div > div > div > div > div > div > div > div:nth-child(2) > form textarea{
    width: 100%;
    padding: 10px;
    background-color: #fff;
    border: none;
    margin-bottom: 10px;
    border-radius: 10px;

    }



    body > main > div.slider-wrapper > section > div > div > div > div > div > div > div > div:nth-child(2) > form > div > div:nth-child(5) > div > input[type=submit]{

background-color:#D93954 ;
color: #fff;
font-size: 20px;
font-weight: 600;

    }



    @media screen and (min-width: 600px) {

    .home-banner-content{

margin-top: 50px;

    }

    }

.float {
    position: fixed;
    width: 55px;
    height: 55px;
    bottom: 29px;
    left: 19px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
    animation: .7s hilado infinite alternate;
}

@keyframes hilado{
  0%{
    bottom:10px;
  }
  100%{
    bottom: 29px;
  }
}

.my-float{
	margin-top:9px;
    color: #fff;
    font-size:37px !important;

}
.my-float:focus,.my-float:hover{
    color: #fff;
    box-shadow: none;
}

button[type="submit"] {
    display: none;
}

input[type="submit"] {
    display: none;
}

.jun {
    visibility: hidden !important;
    position: absolute;
}
    </style>
    <?php 

if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
}else{
	$requesMet = "http";
}

?>
<base href="<?php echo $requesMet.'://'.$_SERVER['HTTP_HOST'].'/' ?>">
<?php include_once('include/packages.php');?>
<link rel="canonical" href="<?php echo $requesMet.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
    <meta name="keywords" content="">
    <meta name="description" content="">
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link href="css/css-m-style.css" rel="stylesheet" type="text/css" />
<link href="css/css-style.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
<link rel='stylesheet' id='main-style-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' type="text/css" />
<meta HTTP-EQUIV="Pragma" CONTENT="Cache">

  </head>
  <body class="hompg innerpage">
    

<!-- Modal -->




<div class="ys-layer "></div>
<div class="ys-container mycustompop " id="ys-container">
  <div class="ys-box">
    <a class="ys-popup-close ys-exit closePopup" href="javascript:void;">x</a>
    <div class="ys-popup-content">
      <div class="left">
        <h3>Discover The World's top Designer & Developers</h3>
      </div>
      <div class="right">
        <div class="popupform tabform clearfix  text-left">
         
          <h3 class="main-heading text-center">Get Special Discount</h3>
          
          <P>Don't miss out on special discount offer</P>
          <form class="cmxform" id="bannerform"  method="POST" action="/leads/">
          <input type="text" name="name" class="jun name" value="">   
              <input type="text" name="firstname" class="jun firstname" value="legit">  
              <input name="email" type="email" class="form-control txt-sub text-left emailBootom jun email" placeholder="your email address">
              <input type="hidden" name="token" value="<?= $token;?>">
            <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">   
            <input type="hidden" name="brand" value="thewebfoundersuk">   
            <input type="hidden" name="tag" value="footer-form in landingpage">
            <input type="hidden" name="price" value="null">
            <input type="hidden" name="news" value="1">
            <div class="row">
              <div class="col-lg-12">
                <div class="fldset">
                  <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name *" required />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="fldset">
                  <input id="cemail" type="email" name="email" placeholder="Enter email here *" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="fldset">
                  <input id="phone-coun" name="phone" type="number" placeholder="Phone Number *" maxlength="10" onkeypress="return isNumberKey(event);" required />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="fldset">
                  <textarea name="brief" id="" rows="7" placeholder="Talk About Your Project"></textarea>
                </div>
              </div>
              
              <div class="col-lg-12">
                <div class="fldset">
                  <input name="submit" type="submit" placeholder="Connect With Us" required />
                   <script type="text/javascript">
                document.getElementById('location').value = window.location.href;
                </script>
        
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="mobile-nav"> <a href="/" class="logo-main"> <img src="images/home/logo.png" alt="*" /></a>
  <nav>

  <ul class="unstyled mainnav pbpx-15">
      <li><a href="/">Home</a></li>
      
      <li><a href="javascript:;">Services <i class="xicon icon-angle-down"></i></a>
        <ul class="firstlevel unstyled">
          <li><a href="/logo-services/">Logo Design</a></li>
          <li><a href="/website-design-development/">Website Design &amp; Development</a></li>
          <li><a href="/wordpress-website/">Wordpress Development</a></li>
          <li><a href="/ecommerce-website/">Ecommerce Solutions</a></li>
          <li><a href="/web-app-development/">Web Application Development</a></li>
          <li><a href="/mobile-app-development/">Mobile App Development</a></li>
          <li><a href="/branding/">Branding</a></li>
          <li><a href="/video-animation/">Video Animation</a></li>
          <li><a href="/seo-services/">Search Engine Optimization</a></li>
        </ul>
      </li>
      <li><a href="/portfolio/">Portfolio</a></li>
      <li><a href="/packages/">Packages</a></li>
      <li><a href="/about-us/">About</a></li>
      <li><a href="/contact-us/">Contact</a></li>
    </ul>

  </nav>
</div>
<main class="app-container">
<!-- Mobile Navigation Button Start-->
<div class="mobile-nav-btn"> <span class="lines"></span> </div>
<!-- Mobile Navigation Button End-->




<header class="mheader">
  <!-- <div class="topbarr flex flex-align-items-center" style="background-image:url(images/banner-bg.png)">
    <div class="container">
      <div class="row"> 
        <div class="col-lg-12">
          <div class="offerbar">
            <h4>Avail <span>50%</span> Discount On all services</h4>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="mainbarr">
    <div class="container-custom">
      <div class="row">
        <div class="col-lg-12">
          <div class="boxednav">
            <div class="logo">
              <a href="/">
                <!-- <h3>Logo</h3> -->
                <img class="wlogo" src="images/logob.png">
                <img class="blogo" src="images/logo.png">
              </a>
            </div>
            <div class="navigation">
              <ul class="linkingchannel">
                <li class=""><a href="/">Home</a></li>
                
                <li class="ddlistmenu active"><a href="javascript:;">Services <span class="icon-angle-down"></span></a>
                  <div class="dropdown">
                    <ul>
                    <li><a href="/logo-services/">Logo Design</a></li>
                    <li><a href="/website-design-development/">Website Design &amp; Development</a></li>
                    <li><a href="/wordpress-website/">Wordpress Development</a></li>
                    <li><a href="/ecommerce-website/">Ecommerce Solutions</a></li>
                    <li><a href="/web-app-development/">Web Application Development</a></li>
                    <li><a href="/mobile-app-development/">Mobile App Development</a></li>
                    <li><a href="/video-animation/">Video Animation</a></li>
                    <li><a href="/seo-services/">Search Engine Optimization</a></li>
                      
                    </ul>
                  </div>
                </li>
                <li><a href="/branding/">Branding</a></li>

                <li><a href="/portfolio/">Portfolio</a></li>
                <li><a href="/packages/">Packages</a></li>
                <li><a href="/about-us/">About</a></li>
                <li><a href="/contact-us/">Contact</a></li>
              </ul>
              <ul class="infochannel">
                <li><a class="numbercta" href="tel:+442038834810"><span class="icon-phone2"></span>+44 2038 834810</a></li>
                <li><a href="javascript:void(0)" class="btn-primary" onclick="setButtonURL();">Live Chat</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="nav-area-full stickyhead">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 logo-area">
          <div class="logo">
            <a href="https://thewebfounders.co.uk/">
              <img class="img-fluid" src="images/home/logo.png" alt="*">
            </a>
          </div>
        </div>
   
      </div>
    </div>
  </div>
</header>

    <div class="slider-wrapper">
      <section class="">
        <div class="banslider">
          <div class="item">
            <div class="home-banner d-flex" style="background-image:url(images/website-banner.jpg)">
              <div class="container align-self-center">
                <div class="row">
                  <div class=" col-lg-6">
                    <div class="home-banner-content">
                      <h1>Website that drives the best return for your investment</h1>
                      <p class="subtitle">Our web designing and development experts ensure that your website is search engine friendly, aesthetically appealing and user friendly.</p>
                     
                      <div class="btn-wrap">
                        <a href="javascript:;" onclick="setButtonURL();" class="btn-primary " >Get Started</a>
                     
                        <a href="tel:+442038834810" class="btn-secondary-outline">+44 2038 834810</a>
                      </div>
                    </div>
                  </div>

        <div class=" col-lg-6 d-none d-lg-block" style="z-index: 1000000;">

        <form method="POST" action="/leads/">
        <input type="text" name="name" class="jun name" value="">   
              <input type="text" name="firstname" class="jun firstname" value="legit">  
              <input name="email" type="email" class="form-control txt-sub text-left emailBootom jun email" placeholder="your email address">
              <input type="hidden" name="token" value="<?= $token;?>">
        <h4 style="text-align:center;color:#D93954;font-weight:600;">Get an Experts Consultation</h4>
        <p style="text-align:center;color:#333;">or Call Now <b>+44 2038 834810</b></p>
           <input type="hidden" name="route" value="/premium-website-design-development/">   
           <input type="hidden" name="brand" value="thewebfoundersuk">   
           <input type="hidden" name="tag" value="footer-form in landingpage">
           <input type="hidden" name="price" value="null">
           <input type="hidden" name="news" value="1">
           <div class="row">
             <div class="col-lg-12">
               <div class="fldset">
                 <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name *" required="">
               </div>
             </div>
             <div class="col-lg-12">
               <div class="fldset">
                 <input id="cemail" type="email" name="email" placeholder="Enter email here *" required="">
               </div>
             </div>
             <div class="col-lg-12">
               <div class="fldset">
   <input id="cphone" type="tel" name="phone" placeholder="Phone Number *" required="">
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
       
               </div>
             </div>
           </div>
         </form>

                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
  </div>
<div class=" ">
<div class="mblForm d-block d-lg-none">
  <div class="row">
    <div class="col-lg-6 offset-lg-3 ">
    <div class="beforemblform">
    <form method="POST" action="/leads/">
    <input type="text" name="name" class="jun name" value="">   
              <input type="text" name="firstname" class="jun firstname" value="legit">  
              <input name="email" type="email" class="form-control txt-sub text-left emailBootom jun email" placeholder="your email address">
              <input type="hidden" name="token" value="<?= $token;?>">
        <h4 style="text-align:center;color:#D93954;font-weight:600;">Get an Experts Consultation</h4>
        <p style="text-align:center;color:#333;">or Call Now <b>+44 2038 834810</b></p>
           <input type="hidden" name="route" value="/premium-website-design-development/">   
           <input type="hidden" name="brand" value="thewebfoundersuk">   
           <input type="hidden" name="tag" value="footer-form in landingpage">
           <input type="hidden" name="price" value="null">
           <input type="hidden" name="news" value="1">
           <div class="row">
             <div class="col-lg-12">
               <div class="fldset">
                 <input class="form-control" id="username" name="name" minlength="2" type="text" placeholder="Enter your name *" required="">
               </div>
             </div>
             <div class="col-lg-12">
               <div class="fldset">
                 <input class="form-control" id="cemail" type="email" name="email" placeholder="Enter email here *" required="">
               </div>
             </div>
             <div class="col-lg-12">
               <div class="fldset">
   <input class="form-control" id="cphone" type="tel" name="phone" placeholder="Phone Number *" required="">
               </div>
             </div>
             <div class="col-lg-12">
               <div class="fldset">
                 <textarea class="form-control" name="brief" id="" rows="7" placeholder="Talk About Your Project"></textarea>
               </div>
             </div>
             
             <div class="col-lg-12">
               <div class="fldset text-center mt-3">
                 <input class="btn btn-success " name="submit" type="submit" placeholder="Connect With Us" required="">
                
       
               </div>
             </div>
           </div>
         </form>
         </div>
    </div>
  </div>
</div>
</div>
   <div class="bottomSec">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul class="mlogos">
                <li>
                  <img src="images/clients-01.png" alt="">
                </li>
                <li>
                  <img src="images/clients-02.png" alt="">
                </li>
                <li>
                  <img src="images/clients-03.png" alt="">
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="top-slider">
                <li>
                  <img src="images/clients-04.png" alt="">
                </li>
                <li>
                  <img src="images/clients-05.png" alt="">
                </li>
                <li>
                  <img src="images/clients-06.png" alt="">
                </li>
                <li>
                  <img src="images/clients-07.png" alt="">
                </li>
                <li>
                  <img src="images/clients-08.png" alt="">
                </li>
                <li>
                  <img src="images/clients-09.png" alt="">
                </li>
                <li>
                  <img src="images/clients-01.png" alt="">
                </li>
                <li>
                  <img src="images/clients-02.png" alt="">
                </li>
                <li>
                  <img src="images/clients-03.png" alt="">
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>  
  <section class="innserservice-commonfolds cwebdesign">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h4 class="subheading">DESIGN IS POWERFUL</h4>
          <h2>Your website doesn't have to be complicated. </h2>
          <p>We are fearless about taking on challenges! With collaboration at our core, we are ready to work with you to craft winning solutions. We excel at listening, and then acting on your needs, to deliver a successful project outcome. Our team of experts are equipped with the knowledge and experience needed to get the job done, and are poised to deliver a responsive website for your business.</p>
          
          <div class="btnwrap">
            <a href="javascript:;" onclick="setButtonURL();" class="btn-primary">Chat With Us</a>
            <a href="tel:+442038834810" class="btn-secondary-outline" tabindex="0">+44 2038 834810</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="portfolioboxes">
    <div class="container-custom">
      <div class="row">
        <div class="col-lg-12">
          <div class="portwrappp">
            <h4 class="subheading">OUR PORTFOLIO</h4>
            <h2>Focused, bold solutions, for an evolving world </h2>
            <p>Our success lies in changing the game for our clients' brands. By focusing on customer outcomes, we build beautiful, engaging experiences that drive real business results.</p>
            <div class="tab-custom">
              <ul class="tabs tabs-webport current mportt">
                
  <li class="to-win-box">
    <a data-fancybox="port" href="images/web-1.jpg">
      <figure>
        <img src="images/web-1.jpg" alt="">
      </figure>
    </a>
  </li>
  <li class="to-win-box">
    <a data-fancybox="port" href="images/web-2.jpg">
      <figure>
        <img src="images/web-2.jpg" alt="">
      </figure>
    </a>
  </li>
  <li class="to-win-box">
    <a data-fancybox="port" href="images/web-3.jpg">
      <figure>
        <img src="images/web-3.jpg" alt="">
      </figure>
    </a>
  </li>
  <li class="to-win-box">
    <a data-fancybox="port" href="images/web-4.jpg">
      <figure>
        <img src="images/web-4.jpg" alt="">
      </figure>
    </a>
  </li>
  <li class="to-win-box">
    <a data-fancybox="port" href="images/web-5.jpg">
      <figure>
        <img src="images/web-5.jpg" alt="">
      </figure>
    </a>
  </li>
  <li class="to-win-box">
    <a data-fancybox="port" href="images/web-6.jpg">
      <figure>
        <img src="images/web-6.jpg" alt="">
      </figure>
    </a>
  </li>
  <li class="to-win-box">
    <a data-fancybox="port" href="images/web-7.jpg">
      <figure>
        <img src="images/web-7.jpg" alt="">
      </figure>
    </a>
  </li>
  <li class="to-win-box">
    <a data-fancybox="port" href="images/web-8.jpg">
      <figure>
        <img src="images/web-8.jpg" alt="">
      </figure>
    </a>
  </li>
  <li class="to-win-box">
    <a data-fancybox="port" href="images/web-9.jpg">
      <figure>
        <img src="images/web-9.jpg" alt="">
      </figure>
    </a>
  </li>
              </ul>
              
            </div>
            <div class="btn-wrap">
              <a href="tel:+442038834810" class="btn-primary">+44 2038 834810</a>
              <!-- <a href="" class="btn-secondary-outline">View more</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mcta">
    <div class="container-custom">
      <div class="row">
        <div class="col-lg-8">
          <div class="textwrap">
            <h4 class="subheading">GOT A PROJECT IN MIND, LET’S GRAB A COFFEE</h4>
            <h2>We’re just as excited about your idea as you are</h2>
            <p>We are a full service digital consultancy with experience and capacity to meet the needs of even the largest most complex of organizations in the world. Our services portfolio enables us to offer clients the best of experiences.</p>
            <div class="btn-wrap">
              <a href="javascript:void(0)" onclick="setButtonURL()" class="btn-secondary">Let's Chat</a>
              <a href="tel:+442038834810" class="btn-secondary-outline">+44 2038 834810</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>  
<section class="packagesmain">
    <div class="container-custom">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <h4 class="subheading">Our Packages</h4>
          <h2> How will your business reach ahead?</h2>
          <p>Our local teams are working today to create the business of tomorrow. Get in touch and let's find out how we transform your industry, together.</p>
        </div>
      </div>
      <div class="row">
        <div class="packk">
          <div class="tab-custom">
            
            <ul class="tabs tabs-websitepack current packlliist slidepack">
              
    <li class="mypack">
      <div class="pkhead">
        <h3>STARTUP WEBSITE <br> PACKAGE </h3>
        <h2>£199</h2>
        <p>Suitable for potential startups and brand revamps for companies.</p>
      </div>
      <div class="bdy">
        <ul class="listscroll">
        <li>5 Stock Photos</li>
          <li>5 Page Website</li>
          <li>3 Banner Design</li>
          <li>1 jQuery Slider Banner</li>
          <li>FREE Google Friendly Sitemap</li>
          <li>Complete W3C Certified HTML</li>
          <li>48 to 72 hours TAT</li>
          <li>100% Satisfaction Guarantee</li>
          <li>100% Unique Design Guarantee</li>
          <li>100% Money Back Guarantee *</li>
          <li>Mobile Responsive will be Additional £200*</li>
          <li>CMS will be Additional £250*</li>
        </ul>
      </div>
      <div class="ftter">
      <a href="javascript:void" class="formBtn btn-primary">Get Started</a>
      <!-- <a href="https://thewebfounders.co.uk/pricing/basic-website-package" class="viewdetails"><span class="icon-magnifying-glass2"></span> See Details</a> -->
      </div>
    </li>
    <li class="mypack popular">
      <div class="pkhead">
        <h3>PROFESSIONAL WEBSITE<br> PACKAGE </h3>
        <h2>£449</h2>
        <p>Suitable for potential startups and brand revamps for companies.</p>
      </div>
      <div class="bdy">
        <ul class="listscroll">

        <li>10 Page Website</li>
          <li>CMS / Admin Panel Support</li>
          <li>8 Stock images</li>
          <li>5 Banner Designs</li>
          <li>1 jQuery Slider Banner</li>
          <li>FREE Google Friendly Sitemap</li>
          <li>Complete W3C Certified HTML</li>
          <li>48 to 72 hours TAT</li>
          <li>Facebook Page Design</li>
          <li>Twitter Page Design</li>
          <li>YouTube Page Design</li>
          <li>Dedicated Project Manager</li>
          <li>Complete Deployment</li>

       
        </ul>
      </div>
      <div class="ftter">
      <a href="javascript:void" class="formBtn btn-primary">Get Started</a>
      <!-- <a href="https://thewebfounders.co.uk/pricing/startup-website-package" class="viewdetails"><span class="icon-magnifying-glass2"></span> See Details</a> -->
      </div>
    </li>
    <li class="mypack ">
      <div class="pkhead">
        <h3>ELITE WEBSITE <br> PACKAGE  </h3>
        <h2>£749</h2>
        <p>Suitable for potential startups and brand revamps for companies.</p>
      </div>
      <div class="bdy">
        <ul class="listscroll">
          <li>Upto 15 Unique Pages Website</li>
          <li>Conceptual and Dynamic Website</li>
          <li>Mobile Responsive</li>
          <li>Online Reservation/Appointment Tool (Optional)</li>
          <li>Online Payment Integration (Optional)</li>
          <li>Custom Forms</li>
          <li>Lead Capturing Forms (Optional)</li>
          <li>Striking Hover Effects</li>
          <li>Newsletter Subscription (Optional)</li>
          <li>Newsfeed Integration</li>
          <li>Social Media Integration</li>
          <li>Search Engine Submission</li>
          <li>5 Stock Photos</li>
          <li>3 Unique Banner Design</li>
          <li>1 jQuery Slider Banner</li>
          <li> Complete W3C Certified HTML</li>
          <li>48 to 72 hours TAT</li>
          <li>Facebook Page Design</li>
          <li>Twitter Page Design</li>
          <li>YouTube Page Design</li>
          <li>Dedicated Project Manager</li>
          <li>Complete Deployment</li>
        </ul>
      </div>
      <div class="ftter">
      <a href="javascript:void" class="formBtn btn-primary">Get Started</a>
      <!-- <a href="https://thewebfounders.co.uk/pricing/professional-website-package" class="viewdetails"><span class="icon-magnifying-glass2"></span> See Details</a> -->
      </div>
    </li>
    <li class="mypack popular">
      <div class="pkhead">
        <h3>SILVER WEBSITE<br> PACKAGE  </h3>
        <h2>£<?= $silverWebsite?></h2>
        <p>Suitable for potential startups and brand revamps for companies.</p>
      </div>
      <div class="bdy">
        <ul class="listscroll">
          <li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
          <li>Custom WP (or) Custom PHP Development</li>
          <li>1 jQuery Slider Banner</li>
          <li>Up to 10 Custom Made Banner Designs</li>
          <li>10 Stock Images</li>
          <li>Unlimited Revisions</li>
          <li>Special Hover Effects</li>
          <li>Content Management System (CMS)</li>
          <li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
          <li>Online Payment Integration (Optional)</li>
          <li>Multi Lingual (Optional)</li>
          <li>Custom Dynamic Forms (Optional)</li>
          <li>Signup Area (For Newsletters, Offers etc.)</li>
          <li>Search Bar</li>
          <li>Live Feeds of Social Networks integration (Optional)</li>
          <li>Mobile Responsive</li>
          <li>FREE 5 Years Domain Name</li>
          <li>Free Google Friendly Sitemap</li>
          <li>Search Engine Submission</li>
          <li>Complete W3C Certified HTML</li>
          <li>Industry Specified Team of Expert Designers and Developers</li>
          <li>Complete Deployment</li>
          <li>Dedicated Project Manager</li>
          <li>Dedicated Accounts Manager</li>
          <li>Facebook Page Design</li>
          <li>Twitter Page Design</li>
          <li>YouTube Page Design</li>
        </ul>
      </div>
      <div class="ftter">
      <a href="javascript:void" class="formBtn btn-primary">Get Started</a>
      <!-- <a href="https://thewebfounders.co.uk/pricing/elite-website-package" class="viewdetails"><span class="icon-magnifying-glass2"></span> See Details</a> -->
      </div>
    </li>
    <li class="mypack ">
      <div class="pkhead">
        <h3>BUSINESS WEBSITE<br> PACKAGE   </h3>
        <h2>£<?= $businessWebsite?></h2>
        <p>Suitable for potential startups and brand revamps for companies.</p>
      </div>
      <div class="bdy">
        <ul class="listscroll">
          <li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
          <li>Custom WP (or) Custom PHP Development</li>
          <li>1 jQuery Slider Banner</li>
          <li>Up to 10 Custom Made Banner Designs</li>
          <li>10 Stock Images</li>
          <li>Unlimited Revisions</li>
          <li>Special Hover Effects</li>
          <li>Content Management System (CMS)</li>
          <li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
          <li>Online Payment Integration (Optional)</li>
          <li>Multi Lingual (Optional)</li>
          <li>Custom Dynamic Forms (Optional)</li>
          <li>Signup Area (For Newsletters, Offers etc.)</li>
          <li>Search Bar</li>
          <li>Live Feeds of Social Networks integration (Optional)</li>
          <li>Mobile Responsive</li>
          <li>15 Seconds 2D Explainer Video</li>
          <li>Voice - Over &amp; Sound Effects</li>
          <li>Professional Script Writing</li>
          <li>Storyboard</li>
          <li>SEO Meta Tags</li>
          <li>FREE 5 Years Domain Name</li>
          <li>Free Google Friendly Sitemap</li>
          <li>Search Engine Submission</li>
          <li>Complete W3C Certified HTML</li>
          <li>Industry Specified Team of Expert Designers and Developers</li>
          <li>Dedicated Accounts Manager</li>
          <li>Complete Deployment</li>
        </ul>
      </div>
      <div class="ftter">
      <a href="javascript:void" class="formBtn btn-primary">Get Started</a>
      <!-- <a href="https://thewebfounders.co.uk/pricing/business-website-package" class="viewdetails"><span class="icon-magnifying-glass2"></span> See Details</a> -->
      </div>
    </li>
             </ul>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="comboopack">
    <div class="container-custom">
      <div class="row">
        <div class="col-lg-12">
          <div class="combopackwrap">
            <div class="headdd">
              <figure>
                <img src="images/images-discount50.png">
              </figure>
              <h3>Customized web portal <span>Professional Combo</span></h3>
            </div>
            <div class="bodyyy">
              
              <div class="coll">
                <ul>
                  <li class="heading">WEBSITE</li>
                  <li>Complete Custom Design & Development</li>
                  <li>Dating Portal, Job Portal, Professional Network Portal, Social Network Portal, Restaurant Portal, Medical Portal, Enterprise Portal (Any One)</li>
                  <li>Unique, User Friendly, Interactive, Dynamic, High End UI Design</li>
                  <li>Unlimited Banner Designs</li>
                  <li>Interactive Sliding Banners</li>
                  <li>Special Hover Effects</li>
                  <li>Unlimited Stock Images</li>
                  <li>User Signup Area</li>
                  <li>Client/User Dashboard Area</li>
                  <li>Custom Coding and Development</li>
                  <li>Content Management System (Custom)</li>
                  
                </ul>
              </div>
              <div class="coll">
                <ul>
                  
                  <li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
                  <li>Online Payment Integration (Optional)</li>
                  <li>Multi Lingual (Optional)</li>
                  <li>Custom Dynamic Forms (Optional)</li>
                  <li>Shopping Cart Integration (Optional)</li>
                  <li>Complete Database Creation</li>
                  <li>Signup Automated Email Authentication</li>
                  <li>Web Traffic Analytics Integration</li>
                  <li>3rd Party API Integrations</li>
                  <li>Signup Area (For Newsletters, Offers etc.)</li>
                  <li>Search Bar for Easy Search</li>
                  <li>Live Feeds of Social Networks integration (Optional)</li>
                  
                </ul>
              </div>
              <div class="coll">
                <ul>

                  <li>Search Engine Submission</li>
                  <li>Module-wise Architecture</li>
                  <li>Extensive Admin Panel</li>
                  <li>Award Winning Team of Expert Designers and Developers</li>
                  <li>Complete Deployment</li>
                </ul>
                <ul>
                  <li class="heading">VALUE ADDED SERVICES</li>
                  <li>Complete Source Files</li>
                  <li>Dedicated Project Manager</li>
                  <li>100% Ownership Rights</li>
                  <li>100% Satisfaction Guarantee</li>
                  <li>100% Money Back Guarantee</li>
                </ul>
                
              </div>
            </div>
            
            <div class="footterr">
              <div class="left">
                <div class="txtt">
                  <h4>For more information speak with us</h4>    
                </div>
                <div class="btnwrap">
                  <a class="numbercta" href="tel:+442038834810">+44 2038 834810</a>
                  <a class="chatcta" href="javascript:;" onclick="setButtonURL()">Live Chat</a>
                </div>

              </div>
              <div class="right">
                <figure class="loudfig">
                  <img src="images/images-loud.png">
                </figure>
                <div class="price">
                  <h2>£2999<span>£5,999</span></h2>
                  <h6>50% Discounted Price</h6>
                </div>
                <div class="orderbtn">
                  <a href="javascript:void(0)" class="btn-primary formBtn" data-toggle="modal" data-target="#modalForDiscount">Get A Quote</a>
                  <!-- <a href="" class="viewdetails"><span class="icon-magnifying-glass2"></span> See Details</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>  
  <section class="solutionssec" style="">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="textwrap mwrapp">
            <h4 class="subheading">TECHNOLOGIES</h4>
            <h2>The craft of blending superlative design with flawless execution</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7">
          <figure class="mainfigure">
            <img src="images/services-custom-web.png" style="width: 800px;margin-right: 0;">
          </figure>
        </div>
        <div class="col-lg-5">
          <div class="textwrap">
            <h4 class="subheading">WEBSITE DESIGN & DEVELOPMENT</h4>
            <h2>Designing and building user interfaces</h2>
            <p>The Website Founders specializes in website design and development services. Our web experiences are high-performing, designed to be user-friendly, fully functional, very secure and able to scale as your enterprise grows. </p>
            <ul class="solutionslist">
              <li>HTML5 </li>
              <li>CSS3</li>
              <li>JavaScript</li>
              <li>jQuery</li>
              <li>PhP</li>
              <li>Laravel</li>
              <li>CodeIgniter</li>
              <li>Java</li>
              <li>.Net</li>
              <li>Python</li>
              <li>Wordpress</li>
            </ul>
            <div class="btn-wrap">
              <a href="javascript:;" onclick="setButtonURL();" class="btn-primary">Chat Now</a>
              <a href="tel:+442038834810" class="btn-secondary-outline">+44 2038 834810</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<section class="valuablewrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="txtwrp">
          <h4 class="subheading">TESTIMONIALS</h4>
          <h2>What our valuable clients say</h2>
          <p></p>
        </div>
        <div class="maindiv">
          <div class="testmslider1">
            
            <div class="col-md-4">
              <div class="mainwrp">
                <div class="starwrp">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                </div>
                <p>The website received positive feedback and drove an increase in sales. Flexible and efficient, the team produced high-quality content within a short period. The Website Founders innovative ideas and hands-on approach made for a fruitful partnership. They produced landing pages of varying lengths to be used on a website and for marketing campaigns.</p>
              </div>
              <div class="icli">
                <div class="round">
                  <h5>EJ</h5>
                </div>
                <div class="clname">
                  <h6>Emily Jordan</h6>
                  <p>Head of Marketing</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="mainwrp">
                <div class="starwrp">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                </div>
                <p>We are excited to be working with The Website Founders and building on their Chain of Custody solution. It has helped set the foundation for the Responsible Gold Supply Chain and Emergent Technology'sability to track gold from mine to vault.</p>
              </div>
              <div class="icli">
                <div class="round">
                  <h5>LM</h5>
                </div>
                <div class="clname">
                  <h6>Louis Martin</h6>
                  <p>Technology Head</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="mainwrp">
                <div class="starwrp">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                </div>
                <p>Our online ordering has increased about 4x in the past 3–4 years and Thewebfounders has made it easier and more efficient to get orders through. It fits right into the operational flow.</p>
              </div>
              <div class="icli">
                <div class="round">
                  <h5>AJ</h5>
                </div>
                <div class="clname">
                  <h6>Amber Jamal</h6>
                  <p>Marketing & PR Manager</p>
                </div>
              </div>
            </div>
            
            
            <div class="col-md-4">
              <div class="mainwrp">
                <div class="starwrp">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                </div>
                <p>We’ve been using @THEWEBFOUNDERS  here at A Better Lemonade Stand for several years now. We've seen incredible growth - achieving a 532% growth one year. If you'd like to know more about them, read our review on the blog:</p>
              </div>
              <div class="icli">
                <div class="round">
                  <h5>JH</h5>
                </div>
                <div class="clname">
                  <h6>Joscelyn Henneton</h6>
                  <p>Sales Manager</p>
                </div>
              </div>
            </div>
            
            
            <div class="col-md-4">
              <div class="mainwrp">
                <div class="starwrp">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                </div>
                <p>The Website Founders specializing in both 2D & 3D animation including production of explainer videos, product demos, mobile app demos, corporate animated videos as well as character design. We work for both Fortune 500 companies and emerging new brands. Some of our clients include: Miami Air International, CanTrack Global, Universal ID and Photobox Group.</p>
              </div>
              <div class="icli">
                <div class="round">
                  <h5>KC</h5>
                </div>
                <div class="clname">
                  <h6>Kevin Cooper</h6>
                  <p>Managing Director</p>
                </div>
              </div>
            </div>
            
            
            <div class="col-md-4">
              <div class="mainwrp">
                <div class="starwrp">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                </div>
                <p>Thewebfounders takes a modern approach to event software, thinking outside the box. Its everything you need with one platform, including marketing tools.</p>
              </div>
              <div class="icli">
                <div class="round">
                  <h5>AA</h5>
                </div>
                <div class="clname">
                  <h6>Amanda Allen</h6>
                  <p>Regional Manager Operations</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <section class="queryform innerfrom">
    <div class="container-custom">
    <div class="row">
      <div class="col-md-12">
        
        <div class="textwrap">
          <h4 class="subheading">PERSONAL</h4>
          <h2>Know Us Better</h2>
          <p>Feel free to contact us regarding any queries or questions that you may have.</p>
        </div>
      </div>
      <div class="col-lg-12" >
        <div class="bot-form">
          <form class="cmxform" id="contactForm"  method="POST" action="/leads/">
          <input type="text" name="name" class="jun name" value="">   
              <input type="text" name="firstname" class="jun firstname" value="legit">  
              <input name="email" type="email" class="form-control txt-sub text-left emailBootom jun email" placeholder="your email address">
              <input type="hidden" name="token" value="<?= $token;?>">
            <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">   
            <input type="hidden" name="brand" value="thewebfoundersuk">   
            <input type="hidden" name="tag" value="footer form">
            <input type="hidden" name="price" value="null">
            <input type="hidden" name="news" value="1">
            <div class="row">
              <div class="col-lg-6">
                <div class="fldset">
                  <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name" required />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="fldset">
                  <input id="cemail" type="email" name="email" placeholder="Enter email here" required>
                </div>
              </div>
              <div class="col-lg-6 ">
                <div class="fldset">
                  <input id="phone-coun" name="phone" type="number" placeholder="Phone Number" required />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="fldset">
                  <textarea name="brief" placeholder="Enter message here"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="fldset">
                <div class="gle-cpcha"><div id="google_recaptcha"></div></div>
                  <input class="btn-secondary btn-default" type="submit" value="Submit" />
                  <script type="text/javascript">
                  document.getElementById('location').value = window.location.href;
                  </script>
                  
                </div>
              </div>
            </div>
          </form>
        </div> 
      </div>
    </div>
    </div>
</section>  <footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h3>Services</h3>
          <ul class="linkinglist">
            <li><a href="/logo-services/">Logo Design</a></li>
            <li><a href="/wordpress-website/">Wordpress Development</a></li>
            <li><a href="/ecommerce-website/">Ecommerce Solutions</a></li>
            <li><a href="/web-app-development/">Web Application Development</a></li>
            

            
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h3 class="xsmtpx-30">&nbsp;</h3>
          <ul class="linkinglist">
            
            <li><a href="/mobile-app-development/">Mobile App Development</a></li>
            <li><a href="/branding/">Branding</a></li>
            <li><a href="/video-animation/">Video Animation</a></li>
            <li><a href="/seo-services/">Search Engine Optimization</a></li>
            
            
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h3 class="xshide">Company</h3>
          <ul class="linkinglist">
           <li><a href="/portfolio/">Portfolio</a></li>
      <li><a href="/packages/">Packages</a></li>
      <li><a href="/about-us/">About</a></li>
      <li><a href="/contact-us/">Contact</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h3 class="xsmtpx-30">About</h3>
          <ul class="linkinglist">
            <li><a href="mailto:query@thewebfounders.co.uk">query@thewebfounders.co.uk</a></li>
            <li><a href="tel:+442038834810">+44 2038 834810</a></li>
            <li><a class="address">Address: 86-90 Paul Street, London EC2A 4NE, UK</a></li>
            
            <div class="dmca">
            <a href="//www.dmca.com/Protection/Status.aspx?ID=e8023e7e-ce1b-46c1-bf63-1c0fcb4ff438" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=e8023e7e-ce1b-46c1-bf63-1c0fcb4ff438"  alt="DMCA.com Protection Status" /></a> 
            </div>
          </ul>
        </div>  
      </div>
      <div class="row">
        <div class="socialmid">
          <div class="left">
            <ul class="ftr-social">
              <li><a target="_blank" href=""><span class="icon-facebook"></span></a></li>
              <li><a target="_blank" href=""><span class="icon-twitter"></span></a></li>
              <li><a target="_blank" href=""><span class="icon-linkedin"></span></a></li>
              <li><a target="_blank" href=""><span class="icon-instagram"></span></a></li>
              <li><a target="_blank" href=""><span class="icon-medium"></span></a></li>
            </ul>
          </div>
           <div class="right">
            <img src="images/images-card-brands.svg">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="fologo">
            <img src="images/logo.png">
          </div>
          <p class="copyright">&copy;  thewebfounders <span id="year"></span>. All rights reserved.</p>
        </div>
        
        <div class="col-sm-6">
          <ul class="footer-nav2">
            <li><a href="/terms-conditions/" > Terms of Services</a></li>
            <li><a href="/privacy-policy/" >Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <a href="https://api.whatsapp.com/send?phone=+442030484363&text=" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>
</footer>




<div class="floatbutton">
  <div class="btns_wrap">
    <a href="javascript:;" class="chat_wrap" onclick="setButtonURL();">
      <span class="icoo"><i class="fa fa-comment"></i></span>
      <span>Chat With Us</span>
    </a>
    <a href="tel:+442038834810" class="call_wrap">
      <span class="icoo"><i class="fa fa-phone"></i></span>
      <span> +442038834810 </span>
    </a>
  </div>
  <div class="clickbutton"><div class="crossplus"> LET’S GET STARTED</div></div>
  <div class="banner-form">
    <h3>Sign Up Now &  <br><Strong>Let’s Get Started</Strong></h3>
    <div class="banform">
      <div class="container">
        <div class="row">
          <div class="ban-form">
            <form class="cmxform" id="bannerform"  method="POST" action="/leads/">
            <input type="text" name="name" class="jun name" value="">   
              <input type="text" name="firstname" class="jun firstname" value="legit">  
              <input name="email" type="email" class="form-control txt-sub text-left emailBootom jun email" placeholder="your email address">
              <input type="hidden" name="token" value="<?= $token;?>">
                  <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">   
                  <input type="hidden" name="brand" value="thewebfoundersuk">   
                  <input type="hidden" name="tag" value="sidepanel form in landing-page">
                  <input type="hidden" name="price" value="null">
                  <input type="hidden" name="news" value="1">
              <div class="row">
                <div class="col-lg-12">
                  <div class="fldset">
                    <input id="username" name="name" minlength="2" type="text" placeholder="Enter your name *" required />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="fldset">
                    <input id="cemail" type="email" name="email" placeholder="Enter email here *" required>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="fldset">
                    <input id="phone-coun" name="phone" type="number" placeholder="Phone Number *" maxlength="10" onkeypress="return isNumberKey(event);" required />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="fldset">
                    <textarea name="brief" id="" rows="7" placeholder="Talk About Your Project"></textarea>
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="fldset">
                    <input name="submit" type="submit" placeholder="Connect With Us" required />
                     <script type="text/javascript">
                  document.getElementById('location').value = window.location.href;
                  </script>
                  <input type="hidden" name="hiddencapcha" value="">
                  <input type="hidden" name="ctry" value="">
                  <input type="hidden" name="pc" value="">
                  <input type="hidden" name="cip" >
                  <input type="hidden" id="location" name="locationURL" value="http://thewebfounders.co.uk/website-design-development" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>








</main>


<script src="js/js-mlib.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script src="js/js-functions.js"></script> 

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>


<script>

setTimeout(function(){  
    // $("#modalForDiscount").modal("show");
    $('head').append('<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=b24c63b6-64a3-4e62-b7ee-492f535de0cd"><\/script>');
    $(document).on('click','.liveChat',function(){
        $zopim.livechat.window.show();

    });

    $(document).on('click','.formBtn',function(){
      if(window.innerWidth > 600){
        $('.ys-container').show();
      }else{
        window.open('tel:+442038834810','_self');
      }
   

});
$('.closePopup').click(function(){
   $('.ys-container').hide();

})

    
    $zopim(function() {
       $zopim.livechat.hideAll();
    });
}, 3000);

</script>

<!-- Start of Zendesk Widget script -->
<!-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=b24c63b6-64a3-4e62-b7ee-492f535de0cd"></script> -->
<!-- End of Zendesk Widget script -->

 <script type="text/javascript">
  function setButtonURL(){
    //CUGICHelper.bubbleChat.toggle();
    $zopim.livechat.window.toggle();
    //LC_API.open_chat_window();
    //Tawk_API.toggle();
    //tidioChatApi.open();
    }
  </script>
  <script>
    $(document).ready(function(){
    
$('html').hover(function() {
    $('button[type="submit"]').css('display', 'block');
    $('input[type="submit"]').css('display', 'block');
  });

$('body').hover(function() {
    $('button[type="submit"]').css('display', 'block');
    $('input[type="submit"]').css('display', 'block');
  });

  $('*').hover(function() {
    $('button[type="submit"]').css('display', 'block');
    $('input[type="submit"]').css('display', 'block');
  });
    
$("form").submit(function(e) {
        if(jQuery(this).children("input.name")[0].value != "" || jQuery(this).children("input.email")[0].value != "" || jQuery(this).children("input.firstname")[0].value != "legit") {

        e.preventDefault();
        console.log('form stoped');
        }
        });

});
  </script>
  
<!-- Clickcease.com tracking-->
<script type='text/javascript'>var script = document.createElement('script');
script.async = true; script.type = 'text/javascript';
var target = 'https://www.clickcease.com/monitor/stat.js';
script.src = target;var elem = document.head;elem.appendChild(script);
</script>
<noscript>
<a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com/stats/stats.aspx' alt='ClickCease'/></a>
</noscript>
<!-- Clickcease.com tracking-->
  
 </body>
</html>