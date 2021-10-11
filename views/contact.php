<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>



   

    

    
            <?php include_once("includes/head.php"); ?>
<title>Get In Touch For The Best Services</title>

        
</head>

<body>



    <?php include_once('includes/header.php');?>
<section class="our-banner inner-banner text-center">
    <div class="container">
        <div class="caption" data-aos="fade-up"data-aos-duration="800">
            <h3>We’re always happy </h3>
            <h1>to hear from you!</h1>
            <p>We enjoy solving problems for our clients and help achieve your goals. <br>Reach out to us and let us drive your business to new heights.
            </p>
            <h5>Contact</h5>
        </div>
    </div>
    <div class="move-vectors">
        <div class="bundle-img">
            <div id="scene">
                <div class="layer" data-depth="0.1"><img src="assets/images/our-banner-left-vector.png" alt=""></div>
                <div class="layer" data-depth="0.1"><img src="assets/images/our-banner-right-vector.png" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section class="our-about our-contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="heading image-txt">
                    <h3>Customer</h3>
                    <h2>service support</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" data-aos="fade-right"data-aos-duration="800">
                <div class="fill-out">
                    <div class="contact-work">
                        <div>
                            <img src="assets/images/ready-tel.png" alt="">
                            <p>Call us Anytime <strong>(628) 270-9920 </strong></p>
                        </div>
                        <div>
                            <img src="assets/images/ready-chat.png" alt="">
                            <p><strong>Chat Live</strong> to discuss your project</p>
                        </div>
                    <div>
                        <Address> <b>Address:</b> 7190 W Sunset Blvd #95 Los Angeles, CA 90046 United States</Address>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" data-aos="fade-left"data-aos-duration="800">
                <img src="assets/images/contactus-image.png" alt="">
            </div>
        </div>
        <div class="bundle-img">
            <div id="scene2">
                <div class="layer" data-depth="0.5"><img src="assets/images/our-about-after.png" alt=""></div>
            </div>
        </div>
    </div>
</section>

<section class="contact-wrapper" data-aos="fade-up"data-aos-duration="800">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Fill the form below <br>for free consultation</h6>
         <p>Tell us your aims and objectives of your business and we’ll invent a solution suited to your specific goals. Get in touch with us today and we’ll get going right away!</p>
        <div class="contact-form">
            <form action="/leads/" class="contact_form" method="post" >
                        <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI']?>">   
                        <input type="hidden" name="brand" value="ProficentWebdesigns">   
                        <input type="hidden" name="tag" value="order page">
                        <input type="hidden" name="price" value="null">
                        <input type="hidden" name="news" value="1">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control required" required="" name="name" placeholder="Name" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control required" required="" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control required" required="" name="phone" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea name="brief" id="msg" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>

                <!-- <input type="hidden" name="page_url" value="proficientwebdesigns.com/contact" class="page_url"> -->
                <button type="submit" name="send" class="contact_submit_btn">Send <img src="assets/images/send-arrow.png" alt=""></button>
                
         
</form>
        </div>
            </div>
            <div class="col-md-5">
                <div class="map">
    
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.8966372817254!2d-118.34901848441596!3d34.09778828059359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bed8b01e381d%3A0x4a3c0931c780163d!2s7190%20Sunset%20Blvd%20%2395%2C%20Los%20Angeles%2C%20CA%2090046%2C%20USA!5e0!3m2!1sen!2s!4v1631215176029!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
            </div>
        </div>
        
    </div>
</section>

<?php include_once('includes/footer.php');?>
</body>


 
</html>