<!doctype html>
<html lang="en-US">
  <head>
    <?php include_once('include/styles.php') ?>
  
    <title>WE RESPECT YOUR PRIVACY AND KEEP ALL YOUR DATA SAFE AND SECURE.</title>
    <meta name="description" content="We will keep all your data that you provide that us safe and secure. You don’t have to worry about anything at all!">
  </head>
  <body>
    <?php include_once('include/header.php') ?>
    <section class="section1" style="background: url('../images/contact-bg.jpg')no-repeat center center/cover;">
      <div class="container">
        <div class="row text-center text-sm-left">
          <div class="col-lg-9">
            <h1 class="font-w700 text-white mb-4">PRIVACY<br>
            POLICY</h1>
          </div>
        </div>
      </div>
    </section>
    <section>
        <div class="container p-5 text-dark">
            <div class="row">
                <div class="col-md-12">
                    <p>We understand that privacy is important for the visitors of thewebfounders.co.uk ("Site"). We make every effort to protect the visitors' privacy and of the individuals who provide their personal information to the site. We have described the efforts below, and by using our site, you agree to this Privacy Policy.</p>
                    
                    <h3 class="font-30">TheWebFounders collects the following:</h3>

                    <p>1) Voluntarily send personal information, such as name and surname, addresses, phone numbers, and email addresses. For example, TheWebFounders may collect your information from you to respond to a blog by one of our staff or perhaps allow us to respond to a question from you;<br>
                    2) We receive and store only particular types of information whenever you contact us. For example, like most sites, we use "cookies."<br> 
                    "Cookies" are bits of information a website transfers to a person's hard drive for recording purposes. TheWebFounders uses cookies for various purposes to track your online data while you are on the site. For example, we track who has visited our site. There is always an option to disable cookies in your browser if you wish;<br>
                    3) IP addresses;<br>
                    4) The information included on the pages people visit;<br>
                    5) Analytics details such as application types and versions, operating system, screen adjustment, color depth, network location, language, and time spent on the site.
                    </p>

                    <h3 class="font-30">The information we collect is utilized for various purposes:</h3>

                    <p>1) Internal review;<br>
                    2) Improve the content of our site;<br>
                    3) Informs users (who provide us with voluntary contact details and agree to be contacted by The Web Founders) of upcoming events, exciting details, and regular TheWebFounders updates.
                    </p>

                    <p>TheWebFounders currently does not sell or share personal information with third parties, nor do we have many partners. We will only email you about TheWebFounders updates when you request or subscribe to one of our services. And - if at any time you do not want to receive an email from us, all you need to do is inform us at query@thewebfounders.co.uk.</p>

                    <p>We must retain the right to use or disclose any information as required to satisfy any law, regulation, or lawful request, to protect the integrity of the site or the policies of the site or to prevent unauthorized use of the site, or to co-operate with any law enforcement investigation or public safety inquiries. We must also reserve the right to share information with the next business associated with the merger, sale of products, or other company changes in connection with the site.</p>

                    <p>We take every precaution to ensure the security of your personal information. Access is limited to those involved in the management or execution of a request or investigation. For your information, entertainment, and various other reasons, this site contains links to other sites. TheWebFounders no longer deals with the privacy practices or content of those websites. We may wish to use customer information to discover new, unexpected items not included in our privacy notice from time to time. If our information practices change from time to time in the future, we will post policy changes on our site to notify you of these changes and empower you to opt-out of these new methods. If you are concerned about how your information is being used, please review our site from time to time.</p>
                </div>
            </div>
        </div>  
    </section>
     
    <?php include_once('include/common.php');?>
    <?php include_once('include/footer.php');?>
    
    <?php include_once('include/scripts.php');?>
    <script>
	function openCity(evt, cityName) {
	// Declare all variables
	var i, tabcontent, tablinks;

	// Get all elements with class="tabcontent" and hide them
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	// Get all elements with class="tablinks" and remove the class "active"
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}

	// Show the current tab, and add an "active" class to the button that opened the tab
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
    }
    
    var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("actives");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
			panel.style.maxHeight = null;
			} else {
			panel.style.maxHeight = panel.scrollHeight + "px";
			} 
		});
		}
    </script>
  </body>
</html>