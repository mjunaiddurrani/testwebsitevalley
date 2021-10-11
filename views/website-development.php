<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    



    

    
            <?php include_once("includes/head.php"); ?>
<title>Custom Website Design & Development | Proficient Web Designs</title>
<style>
@media only screen and (max-width: 980px) and (min-width: 320px) {
.our-banner {
        padding: 0;
        height: 1000px !important;
        /* margin-top: -140px; */
    }
}

</style>
        
</head>

<body>



    <?php include_once('includes/header.php');?>
<section class="our-banner inner-banner text-center">
    
    <div class="container">
        <div class="caption"  data-aos="fade-up"data-aos-duration="800">
            <div class="row ">
                <div class="col-lg-6 align-self-center">
                <h3 data-aos="fade-down" data-aos-duration="800" class="aos-init aos-animate">Transcending A Higher Dimension of</h3>
            <h1 data-aos="fade-down" data-aos-duration="800" class="aos-init aos-animate">Website Solutions</h1>
            <p data-aos="fade-up" data-aos-duration="800" class="aos-init aos-animate">We help brands construct the perfect customer journey to attract, convert, and satisfy users, escalating business growth.</p>
            <a href="javascript:" class="btn-gradient chat aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">Let’s
                Talk</a>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="card-form mx-auto">
                        <h4>Get An Instant Quote</h4>
                        <p>or Call Now (628) 270-9920 </p>
                        <form action="/leads/" method="POST" class="leads-form">
                        <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI']; ?>">   
                        <input type="hidden" name="brand" value="ProficentWebdesigns">   
                        <input type="hidden" name="tag" value="order page">
                        <input type="hidden" name="price" value="null">
                        <input type="hidden" name="news" value="1">
                        <div class="form-fields">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Enter Your Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Enter Your Phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" name="brief" placeholder="Enter Your Message Here"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="form-control btn-gradient">
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
            <h5>Website</h5>
        </div>
    </div>
    <div class="move-vectors">
        <div class="bundle-img">
            <div id="scene">
                <div class="layer" data-depth="0.1"><img src="../assets/images/our-banner-left-vector.png" alt=""></div>
                <div class="layer" data-depth="0.1"><img src="../assets/images/our-banner-right-vector.png" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section class="our-portfolio web-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading image-txt">
                    <h3>HERE IS What We’ve Been</h3>
                    <h2>Working on Recently</h2>
                </div>
                <p>Proficient Webdesigns is the one-stop solution to your creative digital needs. Our design, development, and marketing strategies are tailored to the needs of each specific client and fully informed by the market characteristics endemic to each industry. Going beyond the conventional and devising working solutions to your business problems is what we do best.</p>
            </div>
            <div class="col-sm-5">
                <img class="port-txt" src="../assets/images/portfolio-txt.png" alt="">
            </div>
        </div>
    </div>
    <div class="new-pf">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-sm-2">
                    <div id="filters" class="button-group filters-button-group'">
                        <button class="button is-checked" data-filter=".all">All</button>
                        <button class="button" data-filter=".aviations">Aviations</button>
                        <button class="button" data-filter=".catering">Catering websites</button>
                        <button class="button" data-filter=".cbd">CBD – Hemps</button>
                        <button class="button" data-filter=".chiropractic">Chiropractic clinic</button>
                        <button class="button" data-filter=".church">Church and non profit</button>
                        <button class="button" data-filter=".cleaning">Cleaning Websites</button>
                        <button class="button" data-filter=".construction">Construction</button>
                        <button class="button" data-filter=".consultancy">Consultancy</button>
                        <button class="button" data-filter=".digital">Digital media</button>
                        <button class="button" data-filter=".drone">Drone</button>
                        <button class="button" data-filter=".ecommerce">E commerce</button>
                        <button class="button" data-filter=".finance">Finance</button>
                        <button class="button" data-filter=".fitness">Fitness and Gym</button>
                        <button class="button" data-filter=".health">Health and Nurtition</button>
                        <button class="button" data-filter=".insurance">Insurance &amp; Brokerage</button>
                        <button class="button" data-filter=".it-solution">IT solutions</button>
                        <button class="button" data-filter=".landscaping">Landscaping</button>
                        <button class="button" data-filter=".law">Law firm</button>
                        <button class="button" data-filter=".parallax">Parallax websites</button>
                        <button class="button" data-filter=".photography">Photography</button>
                        <button class="button" data-filter=".plumbing">Plumbing</button>
                        <button class="button" data-filter=".real">Real Estate</button>
                        <button class="button" data-filter=".remodelling">Remodelling</button>
                        <button class="button" data-filter=".residential">Residential builders</button>
                        <button class="button" data-filter=".restaurants">Restaurants</button>
                        <button class="button" data-filter=".security">Security</button>
                        <button class="button" data-filter=".software">Software consultancy</button>
                        <button class="button" data-filter=".surveillance">Surveillance</button>
                        <button class="button" data-filter=".tax">Tax Consultants</button>
                    </div>
                </div> -->
                <div class="col-sm-12">
                    <div class="grid web-portfolio portfolio-lightbox">

                                            <a href="../assets/images/web-development/web%e2%80%931.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–1.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%932.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–2.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%933.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–3.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%934.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–4.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%935.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–5.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%936.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–6.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%937.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–7.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%938.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–8.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%939.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–9.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9310.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–10.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9311.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–11.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9312.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–12.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9313.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–13.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9314.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–14.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9315.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–15.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9316.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–16.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9317.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–17.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9318.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–18.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9319.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–19.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                                            <a href="../assets/images/web-development/web%e2%80%9320.png" class="element-item col-md-6 aviations all" data-category="aviations">
                            <!-- <a href="http://www.experienceaviation.org/" target="_blank"> -->
                            <img data-src="assets/images/web-development/web–20.png"  class="lazyz">
                            <!-- <span>View Website</span> -->
                            <!-- </a> -->
                        </a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-pricing">
    <div class="move-vectors">
        <div class="bundle-img">
            <div id="scene3">
                <div class="layer" data-depth="0.1"><img src="../assets/images/our-pricing-container-after.png" alt=""></div>
                <div class="layer" data-depth="0.1"><img src="../assets/images/our-pricing-container-before.png" alt=""></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="heading">
            <h3>Pricing Plans</h3>
            <h2>that Work for You!</h2>
        </div>
        <div class="row" data-aos="fade-up"data-aos-duration="800">
    <div class="col-md-4">
        <div class="pack">
            <div class="head">
                <h3>Basic Website<br>
                    Package</h3>
                <img src="../assets/images/pack-logo.png" alt="">
            </div>
            <h2><sup>$</sup>244<span><strike>$488</strike> Only</span></h2>
            <div class="content mCustomScrollbar">
                <ul>
                    <li>1 Page Website Design</li>
                    <li>HTML Based</li>
                    <li>1 Banner Design</li>
                    <li>Contact/Query Form</li>
                    <li>3 Revisions</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>Complete Deployment</li>
                    <li class="heading">– Value Added Services</li>
                    <li>Complete Source Files</li>
                    <li>Dedicated Project Manager</li>
                    <li>100% Ownership Rights</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee</li>
                    <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                </ul>
            </div>
            <div class="add-on">
                <p>Add on: <span>$50</span> for expedited services</p>
                <a href="../package/basic-website-package/" class="pkg-view-detail">View Detail</a>
            </div>
            <a data-fancybox=""  data-src="#popupform_website" href="javascript:;" class="various grad-btn mobilebtn">Start Project</a>
<a href="tel:6282709920" class="various grad-btn desktopbtn">Start Project</a>  
        </div>
    </div>
    <div class="col-md-4">
        <div class="pack">
            <div class="head">
                <h3>Startup Website <br>
                    Package</h3>
                <img src="../assets/images/pack-basic.png" alt="">
            </div>
            <h2><sup>$</sup>394<span><strike>$788</strike> Only</span></h2>
            <div class="content mCustomScrollbar">
                <ul>
                    <li>3 Page Website Design</li>
                    <li>HTML Based</li>
                    <li>Hover Effects</li>
                    <li>2 Banner Designs</li>
                    <li>Sliding Banner</li>
                    <li>2 Stock Photos (You can provide us more)</li>
                    <li>Contact/Query Form</li>
                    <li>3 Professional Email ID’s</li>
                    <li>6 Revisions</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>Complete Deployment</li>
                    <li class="heading">– Value Added Services</li>
                    <li>Complete Source Files</li>
                    <li>Dedicated Project Manager</li>
                    <li>100% Ownership Rights</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee</li>
                    <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                </ul>
            </div>
            <div class="add-on">
                <p>Add on: <span>$50</span> for expedited services</p>
                <a href="../package/startup-website-package/" class="pkg-view-detail">View Detail</a>
            </div>
            <a data-fancybox=""  data-src="#popupform_website" href="javascript:;" class="various grad-btn mobilebtn">Start Project</a>
<a href="tel:6282709920" class="various grad-btn desktopbtn">Start Project</a>          </div>
    </div>
    <div class="col-md-4">
        <div class="pack">
            <div class="head">
	            <span class="best-seller-tag">BEST SELLER</span>
                <h3>Professional Website <br>
                    Package</h3>
                <img src="../assets/images/pack-professional.png" alt="">
            </div>
            <h2><sup>$</sup>819<span><strike>$1639</strike> Only</span></h2>
            <div class="content mCustomScrollbar">
                <ul>
                    <li>Up to 5 Pages Website Design</li>
                    <li>3 Stock Photos (You can provide us more)</li>
                    <li>3 Banner Designs</li>
                    <li>Sliding Banner</li>
                    <li>Hover Effects</li>
                    <li>Content Management System (WordPress)</li>
                    <li>5 Professional Email ID’s</li>
                    <li>Search Engine Submission</li>
                    <li>Unlimited Revisions</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>Industry specified Team of Expert Designers and Developers</li>
                    <li>Complete Deployment</li>
                    <li class="heading">– Value Added Services</li>
                    <li>Complete Source Files</li>
                    <li>Dedicated Project Manager</li>
                    <li>100% Ownership Rights</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee</li>
                    <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                </ul>
            </div>
            <div class="add-on">
                <p>Add on: <span>$50</span> for expedited services</p>
                <a href="../package/professional-website-package/" class="pkg-view-detail">View Detail</a>
            </div>
            <a data-fancybox=""  data-src="#popupform_website" href="javascript:;" class="various grad-btn mobilebtn">Start Project</a>
<a href="tel:6282709920" class="various grad-btn desktopbtn">Start Project</a>          </div>
    </div>

    <div class="col-md-4">
        <div class="pack">
            <div class="head">
                <h3>Elite Website <br>
                    Package</h3>
                <img src="../assets/images/pack-log-4.png" alt="">
            </div>
            <h2><sup>$</sup>1399<span><strike>$2799 </strike>Only</span></h2>
            <div class="content mCustomScrollbar">
                <ul>
                    <li>Unique 5 Pages Website Design</li>
                    <li>Custom, Interactive, Dynamic &amp; High End Web Design</li>
                    <li>Custom WordPress Development</li>
                    <li>5 Stock Images</li>
                    <li>5 Banner Designs</li>
                    <li>Sliding Banners</li>
                    <li>Unlimited Revisions</li>
                    <li>Special Hoover Effects</li>
                    <li>Content Management System (WordPress)</li>
                    <li>Mobile Responsive</li>
                    <li>Online Appointment/Booking/Scheduling/Online Ordering Integration (If Required)</li>
                    <li>5 Professional Email ID’s</li>
                    <li>Google Friendly Sitemap</li>
                    <li>Search Engine Submission</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>Industry specified Team of Expert Designers and Developers</li>
                    <li>Complete Deployment</li>
                    <li class="heading">– Value Added Services</li>
                    <li>Complete Source Files</li>
                    <li>Dedicated Project Manager</li>
                    <li>100% Ownership Rights</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee</li>
                    <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                </ul>
            </div>
            <div class="add-on">
                <p>Add on: <span>$50</span> for expedited services</p>
                <a href="../package/elite-website-package/" class="pkg-view-detail">View Detail</a>
            </div>
            <a data-fancybox=""  data-src="#popupform_website" href="javascript:;" class="various grad-btn mobilebtn">Start Project</a>
<a href="tel:6282709920" class="various grad-btn desktopbtn">Start Project</a>  
        </div>
    </div>
    <div class="col-md-4">
        <div class="pack">
            <div class="head">
                <h3>Identity Website <br>
                    Package</h3>
                <img src="../assets/images/pack-log-5.png" alt="">
            </div>
            <h2><sup>$</sup>1,799<span><strike>$3599 </strike>Only</span></h2>
            <div class="content mCustomScrollbar">
                <ul>
                    <li>10 Unique Pages Website Design</li>
                    <li>Custom, Interactive, Dynamic &amp; High End Design</li>
                    <li>Customize WordPress (or) PHP Development</li>
                    <li>Interactive Sliding Banners</li>
                    <li>10 Stock Images</li>
                    <li>10 Banner Designs</li>
                    <li>Special Hoover Effects</li>
                    <li>Unlimited Revisions</li>
                    <li>Content Management System (WordPress or Custom)</li>
                    <li>Mobile Responsive</li>
                    <li>Online Appointment/Booking/Scheduling/Online Ordering Integration (Optional)</li>
                    <li>Online Payment Integration (Optional)</li>
                    <li>10 Professional Email ID’s</li>
                    <li>Google Friendly Sitemap</li>
                    <li>Search Engine Submission</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>Industry specified Team of Award Winning Designers and Developers</li>
                    <li>Complete Deployment</li>
                    <li class="heading">– Value Added Services</li>
                    <li>Complete Source Files</li>
                    <li>Dedicated Project Manager</li>
                    <li>100% Ownership Rights</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee</li>
                    <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                </ul>
            </div>
            <div class="add-on">
                <p>Add on: <span>$50</span> for expedited services</p>
                <a href="../package/identity-website-package/" class="pkg-view-detail">View Detail</a>
            </div>
            <a data-fancybox=""  data-src="#popupform_website" href="javascript:;" class="various grad-btn mobilebtn">Start Project</a>
<a href="tel:6282709920" class="various grad-btn desktopbtn">Start Project</a>          </div>
    </div>
    <div class="col-md-4">
        <div class="pack">
            <div class="head">
                <h3>Corporate Website <br>
                    Package</h3>
                <img src="../assets/images/pack-log-6.png" alt="">
            </div>
            <h2><sup>$</sup>3,399<span><strike>$6,799 </strike>Only</span></h2>
            <div class="content mCustomScrollbar">
                <ul class="scrollbar style-14">
                    <li>Unlimited Unique Website Page Designs</li>
                    <li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
                    <li>Customized WordPress &amp; PHP Development</li>
                    <li>Interactive Sliding Banners</li>
                    <li>Up to 15 Custom Made Banner Designs</li>
                    <li>15 Stock Images</li>
                    <li>Unlimited Revisions</li>
                    <li>Special Hoover Effects</li>
                    <li>Content Management System</li>
                    <li>Online Appointment/Booking/Scheduling/Online Ordering Integration (Optional)</li>
                    <li>Online Payment Integration (Optional)</li>
                    <li>Multi Lingual (Optional)</li>
                    <li>Custom Dynamic Forms (Optional)</li>
                    <li>Signup Area (For Newsletters, Offers etc.)</li>
                    <li>Search Bar</li>
                    <li>Live Feeds of Social Networks integration (Optional)</li>
                    <li>Mobile Responsive</li>
                    <li>Up to 15 Professional Email ID’s</li>
                    <li>Google Friendly Sitemap</li>
                    <li>Search Engine Submission</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>Industry specified Team of Award Winning Designers and Developers</li>
                    <li>Complete Deployment</li>
                    <li class="heading">– Value Added Services</li>
                    <li>Complete Source Files</li>
                    <li>Dedicated Project Manager</li>
                    <li>100% Ownership Rights</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee</li>
                    <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                </ul>
            </div>
            <div class="add-on">
                <p>Add on: <span>$50</span> for expedited services</p>
                <a href="../package/corporate-website-package/" class="pkg-view-detail">View Detail</a>
            </div>
            <a data-fancybox=""  data-src="#popupform_website" href="javascript:;" class="various grad-btn mobilebtn">Start Project</a>
<a href="tel:6282709920" class="various grad-btn desktopbtn">Start Project</a>  
            </div>
    </div>
</div>    </div>
</section>
    <section class="advance-combo-pack web-comb">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <img src="../assets/images/web-combo-vector1.png" alt="">
                <p>Suitable for Multinational Organizations seeking
                    state of the art web solutions</p>
                <div class="">
                   <ul>
                      <li>Complete Custom Design &amp; Development</li>
                      <li>Dating Portal, Job Portal, Professional Network Portal, Social Network Portal, Restaurant Portal, Medical Portal, Enterprise Portal (Any One)</li>
                      <li>Unique, User Friendly, Interactive, Dynamic, High End UI Design</li>
                      <li>Unlimited Banner Designs</li>
                      <li>Interactive Sliding Banners</li>
                      <li>Special Hoover Effects</li>
                      <li>Unlimited Stock Images</li>
                      <li>User Signup Area</li>
                      <li>Client/User Dashboard Area</li>
                      <li>Custom Coding and Development</li>
                      <li>Content Management System (Custom)</li>
                      <li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
                      <li>Online Payment Integration (Optional)</li>
                      <li>Multi Lingual (Optional)</li>
                      <li>Custom Dynamic Forms (Optional)</li>
                      <li>Shopping Cart Integration (Optional)</li>
                      <li>Complete Database Creation</li>
                    </ul>
                   <ul>
                      
                      <li>Signup Automated Email Authentication</li>
                      <li>Web Traffic Analytics Integration</li>
                      <li>3rd Party API Integrations</li>
                      <li>Signup Area (For Newsletters, Offers etc.)</li>
                      <li>Search Bar for Easy Search</li>
                      <li>Live Feeds of Social Networks integration (Optional)</li>
                      <li>Search Engine Submission</li>
                      <li>Module-wise Architecture</li>
                      <li>Extensive Admin Panel</li>
                    </ul>
                   <ul>
                      <li>Award Winning Team of Expert Designers and Developers</li>
                      <li>Complete Deployment</li>
                      <li class="heading">– Value Added Services</li>
                      <li>Complete Source Files</li>
                      <li>Dedicated Project Manager</li>
                      <li>100% Ownership Rights</li>
                      <li>100% Satisfaction Guarantee</li>
                      <li>100% Money Back Guarantee</li>
                      <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="ad-pack">
                    <img src="../assets/images/web-combo-price.png" alt="">
                    <h2><sup>$</sup>8000 <span><strike>$10000</strike>Only</span></h2>
                    <h5>20% OFF Next Order</h5>
                    <img src="../assets/images/ad-pack.png" alt="">
                    <div class="actions">
                        <div class="row">
                            <div class="col-md-6 col-xs-6"><a class="action-no clearfix pur"> <span><small>Speak with us</small>(628) 270-9920 </span></a></div>
                            <div class="col-md-6 col-xs-6"><a class="chat"> <span><small>Want to discuss?</small> Live Chat Now</span></a></div>
                        </div>
                    </div>
                    <img src="../assets/images/ad-pack-after.png" alt="">
 <a data-fancybox=""  data-src="#popupform_website" href="javascript:;" class="various grad-btn mobilebtn">Start Project</a>
<a href="tel:6282709920" class="various grad-btn desktopbtn">Start Project</a>  

                </div>
            </div>
        </div>
    </div>
    <div class="move-vectors">
        <div class="bundle-img">
            <div id="combovector">
                <div class="layer" data-depth="0.1"><img src="../assets/images/combo-vector1.png" alt=""></div>
                <div class="layer" data-depth="0.3"><img src="../assets/images/combo-vector2.png" alt=""></div>
            </div>
        </div>
    </div>
</section>

<section class="ready-work">
    <div class="container">
        <h2>Read<span>y</span> <small> to work with us?</small></h2>
        <p>Let’s build something beautiful once again. </p>
        <div class="info">
            <div class="row">
                <div class="col-sm-6" data-aos="fade-right" data-aos-duration="800">
                    <img src="../assets/images/ready-tel.png" alt="">
                    <p>Call us Anytime <strong>(628) 270-9920 </strong></p>
                </div>
                <div class="col-sm-6" data-aos="fade-left" data-aos-duration="800">
                    <img src="../assets/images/ready-chat.png" alt="">
                    <p><strong>Chat Live</strong> to discuss your project</p>
                </div>
            </div>
        </div>
        <!-- <img src="assets/images/teamwork.jpg" alt="" data-aos="fade-up" data-aos-duration="800"> -->
    </div>
</section>
<section class="testimonial">
    <div class="container">
        <div class="heading image-txt">
            <h3>Have a look at what</h3>
            <h2>our clients say</h2>
        </div>
        <div class="row">
            <div class="col-sm-6" data-aos="fade-right" data-aos-duration="800">
                <img src="../assets/images/testimonial-img.png" alt="">
            </div>
            <div class="col-sm-6" data-aos="fade-left" data-aos-duration="800">
                <div class="owl-carousel owl-testimonial owl-theme">
                    <div class="item">
                        <h2>Extremely Satisfied with <br>the services!</h2>
                        <p>“The website I got made is even better than I had imagined. These guys aren’t kidding around and really live up to their name of being Proficient. Don’t look any further if you want your website looking beautiful”</p>
                    </div>
                    <div class="item">
                        <h2>Loved the work <br>the team put in!</h2>
                        <p>“Fantastic company that have genuinely helped the digital presence of my brand grow. I’m a hard person to please especially when I’m paying someone expressly to satisfy my requirements. Proficient Webdesigns went on to just that.”</p>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once('includes/footer.php');?>
</body>


 
</html>