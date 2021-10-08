<!doctype html>
<html lang="en-US">
<head>
  <?php include_once('include/styles.php') ?>
    <link rel="stylesheet" href="css/contact-us.css">
    <title>GET IN TOUCH WITH US FOR THE BEST SERVICES.</title>
    <meta name="description" content="Interested in our services? Contact us know to get the best of the services from some of the most professionals of the industry.    ">

    <style>


h6 {
    font-size: 16px;
}


    </style>
</head>
  <body>
    <?php include_once('include/header.php') ?>
    <section class="section1" style="background: url('/images/banner/contact-us.jpg')no-repeat center center/cover;">
        <div class="overlay"></div>
      <div class="container z-index-9 position-relative">
        <div class="row text-center">
          <div class="col-12">
            <h1 class="text-white font-60 font-w800">Let Us Know What You Have in Mind, And We’ll Get Back to You in an Instant!</h1>
          </div>
        </div>
      </div>
    </section>
    <section>
        <div class="container text-black">
            <div class="row">
                <div class="col-md-7 p-5 text-center text-md-left">
                    <h4 class="text-blue font-Bold">Contact Us</h4>
                    <hr class="hrBlue">
                    <h6 class="text-blue">Please let us know if you have a question. Leave a comment or query to get further information about our services and solutions.</h6>
                    <hr class="hrBlack">
                    <h5 class="text-blue font-Semibold">Our address in London</h5>
                    <div class="row mt-4" style="font-size: 12px;">
                        <div class="col-md-12">

                        <div class="text-blue d-block d-md-flex contactIcons">
                                <i class="fa fa-2x fa-map-marker mr-2 mt-0"></i><h6 class="align-self-center">86-90 Paul Street, London
EC2A 4NE, UK
</h6>
                                
                            </div>

                        <div class="text-blue d-block d-md-flex contactIcons">
                        <i class="fa fa-2x fa-map-marker mr-2 mt-0"></i><h6 class="align-self-center">104 Meads Lane, Ilford IG3
8PE, UK
</h6>
                                
                            </div>
                            <!-- <div class="text-blue d-block d-md-flex contactIcons">
                                <i class="fa fa-2x fa-map-marker mr-2"></i><h6>447 Broadway 2nd Floor New York, NY 10013</h6>
                            </div> -->

                        </div>
                        <div class="col-md-6">
                            <div class="text-blue d-block d-md-flex contactIcons">
                                <i class="fa  fa-envelope mr-2"></i><h6>info@thewebfounders.co.uk</h6>
                            </div>
                        </div>
                                             <div class="col-md-6">
                            <div class="d-block d-md-flex contactIcons">
                                <i class="fa fa-phone mr-2"></i><h6 class="text-blue"><a href="tel:+442038834810" class="text-blue">+44 2038 834810</a></h6>
                            </div>
                        </div>
                    </div>
                   
   
                  
    



                    <hr class="hrBlack">
                </div>
                <div class="col-md-5 contactForm p-5">
                    <h4 class="text-blue font-Bold">Feedback Form</h4>
                    <hr class="hrBlue">
                    <form class="contact-page-form" action="/leads/" method="post">
                        <input type="hidden" name="news" value="1">
                        <input type="hidden" name="route" value="/contact-us/">
                        <input type="hidden" name="brand" value="thewebfoundersuk">
                        <input type="hidden" name="tag" value="contact-us-form">
                        <input type="hidden" name="price" value="null">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="First Name*">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address*">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Reason for contact*">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="brief" cols="30" rows="5" placeholder="Your Message*"></textarea>
                        </div>
                        <input type="submit" class="btn-blue btn-block font-20 font-Bold" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid p-0 m-0">
            <iframe  style="border:0;width:100%;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.323521584475!2d-0.08581398402766878!3d51.52562571719114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ca55fcfa5e5%3A0x18b5f6c296424be2!2sOFFICE%2086%2C%2090%20Paul%20St%2C%20London%20EC2A%204NE%2C%20UK!5e0!3m2!1sen!2s!4v1623860963184!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    
    
    <?php include_once('include/footer.php');?>
    
    <?php include_once('include/scripts.php');?>
  </body>
</html>