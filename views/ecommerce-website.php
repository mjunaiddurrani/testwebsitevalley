<!doctype html>
<html lang="en-US">
  <head>
    <?php include_once('include/styles.php') ?>    
    <link rel="stylesheet" href="css/services.css">
    <title>CUSTOM ECOMMERCE WEBSITE DEVELOPMENT SERVICES.</title>
    <meta name="description" content="Custom and most attention catching ecommerce website creation services for you at the most affordable rates in the market.">
  </head>
  <body class="services">
    <?php include_once('include/header.php') ?>
    <section class="section1" style="background: url('/images/banner/ecommerce.jpg')no-repeat center center/cover;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row text-center text-sm-center text-md-left">
          <div class="col-12 text-center">
            <h4 class="font-w400 pb-4 font-18 let-space-2">Make your brand Unique.</h4>
            <h1 class="">Custom ecommerce <br> website development!</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- url('/images/services/we-offer.jpg')no-repeat center center/cover -->
    <section class="py-3 py-md-5" style="">
      <div class="container py-3">
        <div class="row text-dark">
          <div class="col-12 text-center p">
            <p class="font-15 let-space-2">PROFESSIONAL</p>
            <p class="font-43 font-w800">Website design for business professionals. </p>
              <h6 class="font-w500">We've been providing eCommerce website design services since 2010. Let us make your brand thrive and succeed online in the highly competitive market. 
              </h6>
          </div>
        </div>
      </div>
    </section>
    <section class="py-3 py-md-5">
      <div class="container py-3">
        <div class="row text-center text-md-left">
          <div class="col-md-6 text-grey">
            <p class="font-w500 font-20">PERFECT STARTING POINT TO</p>
            <hr class="line-bot-green-74">
            <h3 class="font-40 font-w800 text-dark">Custom E-commerce
            website design </h3>
            <p class="font-14">We create responsive, robust and user-friendly webites that help your business flourish online. The Web Founders understand the importance of emerging technologies changing the game for online customers and users. We build thoughtful web designs for your eCommerce platform to maximise the reach and profitability of your business. Our eCommerce web developers ensure your website remains market-competitive, functional, customisable and swift according to the changing needs of the eCommerce business type. </p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <img src="images/services/e-commerce-img.jpg" class="img-fluid" alt="offer">
          </div>
        </div>
      </div>
    </section>
    <section class="py-3 py-md-5">
      <div class="container-fluid p-0">
        <div class="row m-0">
          <div class="col-12 text-center p-0">
            <p class="let-space-2 text-grey">OUR RECENT WORK</p>
            <hr class="line-bot-green-74 mx-auto">
            <h3 class="font-45 text-dark font-w700 position-relative">E-commerce Website Design</h3>
            <p class="font-180 font-w900 text-portfolio mb--45">PORTFOLIO</p>
            <div class="owl-carousel owl-theme  mt-5" id="owl-services">
              <div class="item">
            
                <div class="">
                  <div class="testimonialItem ">
                    <img src="images/home/portfolio/web/web_1.jpg" alt="Website Portfolio" class="img-fluid w-100">
                    <!-- <span class="tlabels">Graphic & <br>Print Design</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                
                <div class="">
                  <div class="testimonialItem ">
                    <img src="images/home/portfolio/web/web_2.jpg" alt="Website Portfolio" class="img-fluid w-100">
                    <!-- <span class="tlabels">Graphic & <br>Print Design</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                
                <div class="">
                  <div class="testimonialItem ">
                    <img src="images/home/portfolio/web/web_3.jpg" alt="Website Portfolio" class="img-fluid w-100">
                    <!-- <span class="tlabels">Graphic & <br>Print Design</span> -->
                  </div>
                </div>
              </div>


              <div class="item">
                
                <div class="">
                  <div class="testimonialItem ">
                    <img src="images/home/portfolio/web/web_4.jpg" alt="Website Portfolio" class="img-fluid w-100">
                    <!-- <span class="tlabels">Graphic & <br>Print Design</span> -->
                  </div>
                </div>
              </div>



              <div class="item">
                
                <div class="">
                  <div class="testimonialItem ">
                    <img src="images/home/portfolio/web/web_5.jpg" alt="Website Portfolio" class="img-fluid w-100">
                    <!-- <span class="tlabels">Graphic & <br>Print Design</span> -->
                  </div>
                </div>
              </div>



              <div class="item">
                
                <div class="">
                  <div class="testimonialItem ">
                    <img src="images/home/portfolio/web/web_6.jpg" alt="Website Portfolio" class="img-fluid w-100">
                    <!-- <span class="tlabels">Graphic & <br>Print Design</span> -->
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


  


    <section id="tabs" class="pt-3 pt-md-5 project-tab text-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center p">
            <p class="font-15 let-space-2">PROFESSIONAL</p>
            <h2 class="font-50 font-w800">E-commerce Packages<br>
              For Any Budget</h2>
              <p class="font-w300 text-grey">Ready to get started? Solutions devised to best suit your needs. We promise you the
              best Ecommerce-Website Service at highly competitive prices. Experience the industry’s best design deals
              structured according to your business needs. 
              </p>
          </div>
        </div>
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
                        <span class="font-45 font-w800 border-right line-height-45 pr-2 mr-2">£<?= $automatedEcommerce?></span>
                        <span class="text-dec-line-thro text-red font-24">£<?= cutPrice($automatedEcommerce);?></span>
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
        <div class="row service-pricing-bot" style="background: url('/images/services/pricing-bottom-img.png')no-repeat center bottom/auto;">
          <div class="col-12">
          <p class="font-20 font-w300 text-grey text-center">Distinct eCommerce web design & development services to avail marketing advantage. Our customised, mobile-friendly and engaging website designs add to your brand's online presence and audience engagement. Grow your business with convenience to drive maximum profit for your business. Our web development techniques are agile and highly responsive that also highlight your unique value proposition. Our customer support team is quick to respond to your queries and concerns. Build a website that increases your performance and helps you achieve your goals with security and effectiveness.</p>
          </div>
        </div>
      </div>
    </section>



    <section class="section4 overflow-hidden text-center text-md-left" style="padding-top:70px">
  <div class="container">
    <div class="row">
        <div class="col-md-5 pb-5 pb-lg-0">
          <p class=" text-uppercase let-space-2 font-w600 text-blue-new text-black" style="letter-spacing: 2px;">OUR website PORTFOLIO</p>
          <hr class="hrRed">
          <h3  class=" font-w800 font-45 text-blue-new line-height-45 text-black pt-4" >Fresh from our websites</h3>
        </div>
      </div>



          <!-- Page Content -->
      <div class="mt-5 page-top">
      <?php include('include/portfolio/website.php');?>
    </div>



  </div>
</section>


    <section class="d-none d-md-flex bg-orange-gradient">
      <div class="container pt-5 position-relative">
        <div class="row">
          <div class="col-md-12 text-center text-white">
            <h2 class="font-w800 mb-3">What We Do</h2>
            <p class="font-20 font-w300">Our eCommerce website development services are designed to fulfil your project needs and requirement. We are always a step ahead to take appropriate decisions for your eCommerce website. We provide your website with the maximum exposure for conversion rate optimisation. Meeting all the deadlines, we allow you to enjoy a perfect yet functional website within your budget.</p>
          </div>
        </div>
        <div class="row rowCards">
          <div class="col-md-4 mb-2 mb-md-0">
            <div class="text-center p-2">
              <div class="card-body">
                <img src="images/services/service-icn1.png" class="mb-4" alt="Home Icon">
                <div class="font-25 font-w700 ">WE</div>
                <span class="font-25 font-w700">Design</span>
                <p class="font-14 mt-3 line-height-20">The sole existence of our eCommerce website development services is to develop user-friendly and customer-oriented websites. Our e-commerce team follows rigorous strategies to keep your business on the top of google searches.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2 mb-md-0">
            <div class="text-center p-2">
              <div class="card-body">
                <img src="images/services/service-icn2.png" class="mb-4" alt="Home Icon">
                <div class="font-25 font-w700 ">WE</div>
                <span class="font-25 font-w700">Develop</span>
                <p class="font-14 mt-3 line-height-20">We build your websites with a design-oriented approach that includes creating a mock design, brand strategy and art directions for your site. Our eCommerce website development services are tailored according to your business nature and type.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2 mb-md-0">
            <div class="text-center p-2">
              <div class="card-body">
                <img src="images/services/service-icn3.png" class="mb-4" alt="Home Icon">
                <div class="font-25 font-w700 ">WE</div>
                <span class="font-25 font-w700">Publish</span>
                <p class="font-14 mt-3 line-height-20">We can help you create websites of your choice and likeliness. From minimalistic designs to complex and integrated with chatbots, we promise secure, functional and innovation-focused websites. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php include_once('include/footer.php');?>
    
    <?php include_once('include/scripts.php');?>
  </body>
</html>