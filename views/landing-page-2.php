<!doctype html>
<html lang="en-US" style="overflow-x: hidden;">

<head>
  <?php include_once('include/styles.php') ?>
    <link rel="stylesheet" href="css/home.css">
    <title>The Web Founders Providing Top-Notch Digital Services</title>
    <meta name="description" content="Get all your designing needs fulfilled by the best in the business! We provide affordable designing solutions for your business needs.">
    <style>
        
    
.navbar {
    padding: 45px 15px;
}


.inerservice-banner .isb-textwrapper {
    padding: 0 0 0 0 !important;
    /* display: table-cell; */
    width: 100%;
    vertical-align: middle;
}

#home-pricing-brands .item, #home-pricing-ecoms .item, #home-pricing-videos .item, #home-pricing-webs .item {
    margin: 7px;
    width: 31%;
    float: left;
    margin-bottom:25px;
}
#home-pricing-webs > div:nth-child(7){

width:100%;

}
        .bg-video-wrap {
  position: relative;
  overflow: hidden;
  width: 100%;
  /* height: 100vh; */
  background: url('img/video.jpg') no-repeat center center/cover;
}
.headerVideo {
  width: 100%;
  /* min-height: 100vh; */
  z-index: 1;
}
.overlay {
  width: 100%;
  background: url('img/video.jpg') no-repeat center center/cover;
  height: 100vh;
  position: absolute;
  top: 0;
  left: 0;
  /* background:#00000075; */
  /* background-image: linear-gradient(45deg, rgba(0,0,0,.3) 50%, rgba(0,0,0,.7) 50%); */
  background-size: 3px 3px;
  z-index: 2;
}
.screen {
    width: 100%;
    height: 450px;
    position: relative;
    overflow: hidden;
    cursor: pointer;
  }
  .screen img {
    position: absolute;
    left: 0;
    right:0;
    top: 0;
    max-width: 290px;
    transition: transform 1s ease-in-out 0.5s;
    margin:0 auto;
}
.screen:hover img {
    transform: translateY(-50%);
}
.home-form{z-index:9;}
.bnr-slider.slick-slider{z-index:1}

@media(max-width:1000px){
.bg-video-wrap{
  height:65vh;
  /* display:none; */
}

.bg-video-wrap{
  background:url('img/mblVideoBanner.jpg');
  background-size:cover;
  background-repeat:no-repeat;
}

.headerVideo{
  display:none;
}
.overlay {
  height:100vh;
}

}
.position-relative{
  position:relative;
}

.bottom-button{
  /* position:absolute;
  bottom: -241px;
  left:25%; */

}
.bottom-button button{
  margin-left:10px
}
@media (max-width:519px){
  .bottom-button{
    /* left:8%; */
  }
  .lgos-sctn ul li {
    display: inline-block;
    padding: 20px !important;
}
}
.visibility-hidden{
  visibility:hidden;
}

button.play.rounded-box.state-paused {
    display: none;
}
button.play.rounded-box.state-playing {
    display: none;
}
.vp-controls-wrapper ,.vp-controls{
  display: none !important;
}
.mt-min-2{
  margin-top:-22px;
}




.myCustomCardPrice .myCard2 {
    margin-bottom: 20px;
    border: 1px solid #00000069;
    box-shadow: 12px 10px 30px #00000050;
}
.cstmwebdesgn .inerservice-banner {

    padding: 50px 0;
}
.inerservice-banner {
    background-position: center;
    background-size: cover !important;
    /* margin-top: 70px; */
    padding: 120px 0;
    background-attachment: fixed;
    position: relative;
    background : #042048;
}
.inerservice-banner:before {
    position: absolute;
    content: "";
    top: 0;
    width: 100%;
    height: 100%;
    background: #68bef10008c;
    /* z-index: 1; */
}
.inerservice-banner .isb-textwrapper {
    padding: 0 110px 0 0;
    /* display: table-cell; */
    width: 100%;
    vertical-align: middle;
}
.inerservice-banner .isb-textwrapper h5 {
    color: #68bef1;
    letter-spacing: 2px!important;
    font-family: AvenirRoman, sans-serif;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 600;
    padding: 0;
    margin: 0;
}
.inerservice-banner .isb-textwrapper h1 {
    line-height: 1;
    text-transform: uppercase;
    color: #fff;
    font-size: 50px;
    margin-bottom: 20px;
    font-weight: 900;
    padding: 20px 20px 0 0px;
    letter-spacing: 2px;
}
.inerservice-banner .isb-textwrapper p {
    color: #fff;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.4;
    letter-spacing: 0;
    padding: 0 0 30px;
}
.cstmwebdesgn .btn-red {
    font-weight: 600;
}
.btn-red {
    text-align: center;
    border-radius: 10px;
    padding: 14px 20px;
    background-color: #68bef1;
    color: #fff;
    display: inline-block;
    width: 250px;
    font-size: 16px;
    font-weight: 400;
    -webkit-transition: 0.4s;
    -moz-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
}
.inerservice-banner form {
    width: 85%;
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 1px -2px 17px #68bef1;
}
.inerservice-banner form h4 {
    text-align: center;
    width: 100%;
    color: #000;
    font-size: 30px;
    font-weight: 700;
    text-transform: capitalize;
    padding: 0;
}
.inerservice-banner form p {
    text-align: center;
    width: 100%;
    color: #68bef1;
    font-weight: 500;
    padding: 0 ;
}
.inerservice-banner form .from-control {
    /* padding: 0 0 20px; */
}
.inerservice-banner form .from-control label {
    width: 100%;
    font-size:14px;
    display: block;
    color: #000;
}
.inerservice-banner form .from-control input {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: transparent;
    background: #e8e8e8;
}
.inerservice-banner .submit {
    margin: 0px 0 0;
    display: inline-block;
    background: #fff;
    border: 1px solid #fff;
    color: #000;
    font-size: 14px;
    padding: 13px 31px;
    text-align: center;
    text-transform: capitalize;
    display: inline-block;
    border-radius: 5px;
    -webkit-transition: color 200ms ease-in-out, background-color 200ms ease-in-out, border-color 200ms ease-in-out;
    -moz-transition: color 200ms ease-in-out, background-color 200ms ease-in-out, border-color 200ms ease-in-out;
    -o-transition: color 200ms ease-in-out, background-color 200ms ease-in-out, border-color 200ms ease-in-out;
    transition: color 200ms ease-in-out, background-color 200ms ease-in-out, border-color 200ms ease-in-out;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    font-weight: 600;
    cursor: pointer;
}
.inerservice-banner .submit {
    background: #68bef1 !important;
    color: #fff !important;
    border: 1px solid #fff0;
}

.lgos-sctn  {
  margin-top: 30px;
}

.lgos-sctn ul {
    text-align: left;
    margin: 0;
    padding: 0;
    margin-left: -20px;
}

.lgos-sctn ul li {
    display: inline-block;
    padding: 0 10px;
}
    </style>
</head>

<body  style="">
  <?php include_once('include/header.php') ?>
  <body>
  <section class="section1 inerservice-banner" >
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-7 align-self-center py-5">
            <div class="isb-textwrapper">
              <h5>CUSTOM WEBSITE DEVELOPMENT</h5>
              <h1>We Design and Develop Custom-Tailored Websites</h1>
              
              <p>We create responsive web applications and sites leveraging the most robust technologies in the industry to help you boost your business.</p>
              <a href="javascript:;" class="btn-red liveChat">Let’s Build it together</a>
              <div class="lgos-sctn">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li><img src="images/tdf-logo-2.png" width="65" height="48" alt=""></li>
              <li><img src="images/top-digital.png" width="123" height="48" alt=""></li>
              <li><img src="images/clutch.png" width="123" height="48" alt=""></li>
              <li><img src="images/google-partner.png" width="123" height="48" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


            </div>
          </div>
          <div class="col-lg-5">
            <form class="cmxform" id="contactForm" method="POST" action="/leads/">
            <input type="text" name="name" class="jun name" value="">   
              <input type="text" name="firstname" class="jun firstname" value="legit">  
              <input name="email" type="email" class="form-control txt-sub text-left emailBootom jun email" placeholder="your email address">
              <input type="hidden" name="token" value="<?= $token;?>">
            <input type="hidden" name="route" value="/premium-website-design-development/">   
                    <input type="hidden" name="brand" value="webfoundersuk">   
                    <input type="hidden" name="tag" value="footer-form">
                    <input type="hidden" name="price" value="null">
                    <input type="hidden" name="news" value="1">
              <div class="row">
                <h4>Get an Experts Consultation</h4>
                <p>or Call Now <b>+44-203-883-4810</b></p>
                <div class="col-lg-12">
                  <div class="from-control">
                    <label for="Name">Full Name <span>*</span></label>
                    <input type="text" name="name" placeholder="" required="" pattern="^[A-Za-z ]+$" maxlength="45">
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="from-control">
                    <label for="Email">Email <span>*</span></label>
                    <input type="text" name="email" placeholder="" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="from-control">
                    <label for="Number">Phone Number <span>*</span></label>
                    <input type="text" name="phone" placeholder="" required="" maxlength="15" pattern="^[0-9]*$">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="from-control">
                    <label for="projectdescr">Project Description <span>*</span></label>
                    <!-- <input type="text" name="brief" placeholder=""> -->
                    <textarea name="brief" style="resize:none;min-height:90px;background-color: #e5e5e5;margin-bottom:12px;" class="form-control" maxlength="250" pattern="^[A-Za-z ]+$"></textarea>
                  </div>
                </div>
                <div class="col-lg-12 text-center">
                  <input class="submit" type="submit" value="Let's Grow Your Business">
                  <input class="" type="hidden" name="ctry" value="Pakistan Pakistan ">
                  <input type="hidden" name="pc" value="+92+92">
                  <input type="hidden" name="cip" value="103.104.193.174">
                  <input type="hidden" id="location" name="locationURL" value="custom-website-design/">
                  <input type="hidden" name="hiddencapcha" value="">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  <section class="mt-min-2">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="owl-carousel owl-home-clients owl-theme">
            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/audi-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/cisco-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/dhl-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/hersheys-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/honey-well-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/ibm-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/lenovo-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/metlife-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/nestle-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/new-york-film-academy-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/printful-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/sephora-logo.png">
              </div>
            </div>
            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/slazenger-logo.png">
              </div>
            </div>

            <!-- <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/audi-logo.png">
              </div>
            </div> -->

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/toyota-logo.png">
              </div>
            </div>

            <div class="item">
              <div class="img-wrap">
                <img src="images/home/clients/waze-logo.png">
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  
  $pageIsLanding = true;
  include('include/portfolio-home.php');?>
  <section class="py-5">
	  <div class="container text-dark">
	  	<div class="row" style="position: relative; z-index: 10;">
        <div class="col-md-6">
          <div class="textOfSection3">
            <div class="topParaOfSec3">
              <p class="text-grey text-uppercase let-space-2 font-w600">Pricing Packages</p>
            </div>
            <hr class="line-bot-green-225 bg-blue-new font-w900">
            <p class="text-white font-w800 font-45 text-blue-new line-height-45 ">
            Choose the plan that fulfils your needs best.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <p class="text-secondary font-w300 line-height-32 font-22 p-5">Our services are unrivalled by anyone in the market, and the same goes for our plans. Get the most out of what we have to offer! </p>
          </div>
        </div>
      </div>
	  	<div class="row">
        <div class="col-12">
          <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
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
            <div class="tab-pane fade active show" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                <div class="row">
                  <div class="row" id="">
                    <div class="col-lg-4 myCustomCardPrice">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Startup Website <br> Package</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for static based landing pages.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£199</span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/startup-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 myCustomCardPrice">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Professional Website <br> Package</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for basic startups looking to take it one step at a time.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£449</span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/professional-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 myCustomCardPrice">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Elite Website <br> Package</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for potential startups and basic revamps for small companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£749</span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/elite-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 myCustomCardPrice">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Silver Website <br> Package</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for strong startups that are looking to build a unique brand identity to help them stand apart from their competitors with a strong brand presence and strong brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£<?= $silverWebsite?></span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/silver-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 myCustomCardPrice">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Business Website <br> Package</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for mid sized startups who are looking to work with a strong R&D, Creative and marketing team to help develop a unique brand identity, strong digital presense, marketing strategies and help select elements to alter consumer behaviour toawrds their business. These strategies will help to compete directly with some of the top competitors in your target market.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£<?= $businessWebsite;?></span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/business-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 myCustomCardPrice">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Automated Conferencing Portal</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Allows live conferencing features and custom client/user dashboards for clients with a strong semi-automated admin panel.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£5000</span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/automatedinteractive-conferencing-portal-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 myCustomCardPrice">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Custom CRM <br>Portal</p>
                        <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for mid sized and strong Enterprises with Custom Dashboard Features, Automation/Intelligence, CRM Features, Sales Automation, Forecasting and Advanced back office intelligent managmement system.
                        (Job Portals, Real Estate Portals, I.T Management Portals, Medical Portals, HRM Portals, CRM Portals, Dating Portals, Management Portals)</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£7000</span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/custom-crm-portal-website/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ecom" role="tabpanel" aria-labelledby="pills-ecom-tab">
              <div class="row">
                <div class="row">
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Beginners E-Commerce<br> Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for small startups who are looking to sell products online.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£<?= $beginnersEcommerce?></span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/beginners-e-commerce-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Corporate E-Commerce<br> Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for strong startups looking to create a client base and develop a unique brand identity to help them stand apart from their competitors.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£<?= $corporateEcommerce?></span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/corporate-e-commerce-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Elite E-Commerce <br>Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for mid sized startups/enterprises who are looking to take it on the next level and grow their businesses at a much faster pace with a strong brand presence.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£<?= $eliteEcommerce?></span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/elite-e-commerce-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Automated E-Commerce Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for strong/mid/large sized enterprises and startups who are looking to work with a strong R&D, Creative and Marketing team to help select every element towards their branding, create strong digital marketing and brand presence strategies and to compete with mid/large level enterprises to grow at faster pace and start off directly at the start of the food chain.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£<?= $automatedEcommerce ?></span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/automatedinteractive-e-commerce-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Custom E Commerce Marketplace Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for strong marketplaces where clients can come, sell their products and customers can come and puchase where you make commision out of every sale being done through the portal with multiple revenue models. Includes a strong R&D, Creative and Marketing team to help select every element towards their branding, create strong digital marketing and brand presence strategies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£4999</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/custom-e-commerce-marketplace-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Custom CRM/ERP Portal Website Package</p>
                      <p class="font-13 text-grey contentScroll contentScroll-upper">Suitable for mid/large level enterprises, who are looking to create a one-in-all Intelligent/Automated Organizational Management System within their portal to help regulate the activities of every department through one system with an AI based Back Office management system and custom user/departmental rights that can help connect processes from manufacturing, inventory management to final order fulfillment.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£9999</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/custom-crm-erp-portal-website/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>			  	
            </div>
            <div class="tab-pane fade" id="pills-brand" role="tabpanel" aria-labelledby="pills-brand-tab">
              <div class="row">
                <div class="row">
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Startup Collateral Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£50</span>
                        <span class="text-dec-line-thro text-red font-24">£100</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">2 Stationery Design Set</p>
                        <p class="dot-before">FREE Fax Template</p>
                        <p class="dot-before">Print Ready Formats</p>
                        <p class="dot-before">UNLIMITED Revisions</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/startup-collateral-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Collateral Classic Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£130</span>
                        <span class="text-dec-line-thro text-red font-24">£260</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">2 Stationery Design Set</p>
                        <p class="dot-before">UNLIMITED Revisions</p>
                        <p class="dot-before">Flyer Design</p>
                        <p class="dot-before">Brochure Design (Bi-fold/Tri-fold)</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/collateral-classic-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Premium Collateral Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£200</span>
                        <span class="text-dec-line-thro text-red font-24">£400</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">2 Stationery Design Set</p>
                        <p class="dot-before">Packaging Design</p>
                        <p class="dot-before">UNLIMITED Revisions</p>
                        <p class="dot-before">T-Shirt Design</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/branding-premium-collateral-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Unlimited Collateral Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£250</span>
                        <span class="text-dec-line-thro text-red font-24">£500</span>
                      </div>
                      <div class="contentScroll">
                        <p class="dot-before">2 Stationery Design Set</p>
                        <p class="dot-before">Menu Card Design</p>
                        <p class="dot-before">T-Shirt Design</p>
                        <p class="dot-before">1 Banner Design</p>
                      </div>
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/unlimited-collateral-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Complete Branding Solution</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£995</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/complete-branding-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>			  	
            </div>
            <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <div class="row">
                <div class="row">
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Teaser/Intro Video Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£150</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/teaser-intro-video-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Startup Video <br> Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£200</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/startup-video-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Classic Video <br> Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£400</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/classic-video-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Premium Video <br>Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£700</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/premium-video-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Deluxe Video <br>Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£900</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/deluxe-video-packages/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>			  	
            </div>
            <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
              <div class="row">
                <div class="row">
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Startup SEO <br>Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£450</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/startup-seo-website-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Identity SEO <br> Package</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£850</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/identity-seo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Elite SEO <br>Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£1550</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/elite-seo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 myCustomCardPrice">
                    <div class="myCard2">
                      <p class="font-32 font-w800">Professional SEO <br>Packages</p>
                      <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                      <div class="d-inline-flex align-items-center">
                        <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£2150</span>
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
                      <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/professional-seo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>			  	
            </div>
            <div class="tab-pane fade" id="pills-combo" role="tabpanel" aria-labelledby="pills-combo-tab">
              <div class="row">
                  <div class="row">
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Basic Combo <br>Packages</p>
                        <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£<?= $basicCombo ?></span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/basic-combo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Startup Combo <br> Package</p>
                        <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£<?= $startupCombo ?></span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/startup-combo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Professional Combo <br>Packages</p>
                        <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£<?= $professionalCombo ?></span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/professional-combo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Corporate Combo <br>Packages</p>
                        <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£2000</span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/corporate-combo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="myCard2">
                        <p class="font-32 font-w800">Elite Combo <br>Packages</p>
                        <p class="font-13 text-grey">Suitable for potential startups and brand revamps for companies.</p>
                        <div class="d-inline-flex align-items-center">
                          <span class="font-45 font-w800 border-right text-center line-height-45 pr-2 mr-2">£3000</span>
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
                        <button class="btn btn-yellow m-0 px-5 liveChat">Start Now<i class="fa fa-arrow-right pl-3"></i></button>
                        <a href="/pricing/elite-combo-package/" class="view-detail ">VIEW DETAILS</a>
                        <div class="row bot-links">
                          <div class="col-xl-6 border-right text-center">
                            <div class="text-yellow">Share your idea?</div>
                            <a class="mob" href="tel:+442038834810">+44 2038 834810</a>
                          </div>
                          <div class="col-xl-6 pl-xl-4 text-center">
                            <div class="text-yellow">Want to Discuss?</div>
                            <a href="javascript:;" class="chat_wrap liveChat text-center">Live Chat Now</a>
                          </div>
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


  
  <section class="floating_wrap">
  <div class="btns_wrap">
    
    <a href="javascript:;" class="chat_wrap liveChat">
      <i class="fa fa-comment pur-bg"></i>
      <span class="pur">Chat With Us</span>
    </a>
    <a href="tel:+442038834810" class="call_wrap">
      <i class="fa fa-phone pur-bg"></i>
      <span class="pur">+44 2038 834810</span>
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
           <form method="POST" action="/leads/" id="quoteForm" autocomplete="off">
           <input type="text" name="name" class="jun name" value="">   
              <input type="text" name="firstname" class="jun firstname" value="legit">  
              <input name="email" type="email" class="form-control txt-sub text-left emailBootom jun email" placeholder="your email address">
              <input type="hidden" name="token" value="<?= $token;?>">
           <input type="hidden" name="route" value="/">   
                  <input type="hidden" name="brand" value="thewebfoundersuk">   
                  <input type="hidden" name="tag" value="modal-auto">
                  <input type="hidden" name="price" value="null">
                  <input type="hidden" name="news" value="1">
            <div class="row">
            <div class="col-md-12 col-xs-12 margin-bottom-10">
              <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required="required" pattern="^[A-Za-z ]+$" maxlength="45">
            </div>
            <input type="hidden" name="_token" value="N49UNLabJbUSvBDJEo7foM8hpNuXpnw4qMXgV2mo">
            <div class="col-md-12 col-xs-12 margin-bottom-10">
              <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            </div>
            <div class="col-md-12 col-xs-12 margin-bottom-10 ">
              <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Phone Number" name="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="" maxlength="15" pattern="^[0-9]*$">
            </div>
              <div class="col-md-12 col-xs-12 margin-bottom-20">
                <textarea class="form-control" col="5" name="brief" placeholder="Talk about your project" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Description'" required="" maxlength="250" pattern="^[A-Za-z ]+$"></textarea>
              </div>
              <div class="col-md-12 col-xs-12 text-center">
                <div class="text-center mid-body">
                  <input class="btn-fill btn-quote" type="submit" id="quoteSubmit" name="quote" value="Send Query">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>
    <?php include_once('include/footer.php');?>
    
    

      <?php include_once('include/scripts.php');?>
      
      <script>
      $('.owl-home-clients').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
      </script>
       <script>
    $(document).on('click','.formBtn',function(){
      if(window.innerWidth > 600){
        $("#modalForDiscount").modal('show');
      }else{
        window.open('tel:+442038834810','_self');
      }
      

    });
 



    </script>



</body>
</html>