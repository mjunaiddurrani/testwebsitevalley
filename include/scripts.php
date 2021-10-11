<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js"></script>
<!-- <script src="assets/js/mlib.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script> -->

<script>

$(document).ready(function(){
    
    $('.floating_strip .rotatekaro a').on('click', function(e) {
      $('.floating_form').toggleClass("open"); //you can list several class names 
      $('body').toggleClass("notscroll");
      e.preventDefault();
});


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

// sticky social
$(document).scroll(function () {
    "use strict";
    var y = $(this).scrollTop();
    if (y > 800) {
        $('.floating_wrap').fadeIn();
    } else {
        $('.floating_wrap').fadeOut();
    }


}); 



setTimeout(function(){  
    // $("#modalForDiscount").modal("show");
    // $('head').append('<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=b24c63b6-64a3-4e62-b7ee-492f535de0cd"><\/script>');
    $(document).on('click','.liveChat',function(){
        $zopim.livechat.window.show();

    });

}, 15000);





    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});

    


$('#slider').owlCarousel({
		loop:true,
    nav:true,
		dots:false,
        navText:[`<div class="goal-daba">
			<i class="fa fa-arrow-left"></i>
		</div>`,`<div class="goal-daba">
			<i class="fa fa-arrow-right"></i>
		</div>`],
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2.5
            }
        }
		
	});	


      $('#owl-testimonials').owlCarousel({
        loop:true,
        autoHeight: true,
        nav:true,
        dots:false,
            navText:[`<div class="goal-daba">
          <i class="fa fa-arrow-left"></i>
        </div>`,`<div class="goal-daba">
          <i class="fa fa-arrow-right"></i>
        </div>`],
            margin:100,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
          });
          $('#owl-services').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
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

<?php

if(isset($_SESSION['successMsg'])){
    ?>
<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '<?= $_SESSION['successMsg']; ?>',
        showConfirmButton: false,
        timer: 1500
    });
// swal(
//   'Thank you!',
//   '<?= $_SESSION['successMsg']; ?>',
//   'success'
// )

// $(document).ready(function(){
//     $(".dropdown").hover(function(){
//         var dropdownMenu = $(this).children(".dropdown-menu");
//         if(dropdownMenu.is(":visible")){
//             dropdownMenu.parent().toggleClass("open");
//         }
//     });
// });    






</script>




    <?php
    unset($_SESSION['successMsg']);
}





?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <script>
$(document).ready(function(){
  $('.fancyboxVideo').click(function(){
    var dataSrc = $(this).attr('data-href');
   
    $('.myVideo').attr('src',dataSrc);
    $('#modalForVideo').modal('show');
    $('.myVideo').trigger('play');
  });

  $('#modalForVideo').on('hidden.bs.modal', function (e) {
    // do something...
    $('.myVideo').trigger('pause');
  });

});

$('.fancybox').fancybox();
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


<!-- structured data work -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "TheWebFounders",
        "url": "https://www.thewebfounders.co.uk/",
        "logo": "https://www.thewebfounders.co.uk/images/home/logo.png",
        "contactPoint": { "@type": "ContactPoint", "telephone": "001-646-582-9666", "contactType": "customer service" },
        "sameAs": ["https://www.facebook.com/The-Web-Founders-185828282945217", "https://www.instagram.com/thewebfounders/"]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SiteNavigationElement",
        "hasPart": [
            { "@context": "https://schema.org", "@type": "WebPage", "url": "/contact-us/" },
            { "@context": "https://schema.org", "@type": "WebPage", "url": "/about-us/" }
        ]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 0, "name": "Home", "item": "https://www.thewebfounders.co.uk/" },
            { "@type": "ListItem", "position": 1, "name": "TheWebFounders" }
        ]
    }
</script>

<!-- reviews lagany hain serives k pages p -->

<!-- 
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "product",
	"@id": "https://www.ghostwritingfounder.com/",
	"name": "Ghostwritingfounder",
	"image": "https://www.ghostwritingfounder.com/img/landing/logo.png",
	"sameAs": "https://www.ghostwritingfounder.com/",
    "aggregateRating": {
	"@type": "AggregateRating",
	"ratingValue": "4.9",
	"bestRating": "5",
	"worstRating": "4",
	"ratingCount": "1656"
	},
	"review": {
	"@type": "Review",
	"url": "https://www.ghostwritingfounder.com/",
	"author": {
		"@type": "Person",
		"name": "Carter Haylee",
		"description":"I didn't have to tell them a single thing besides the brief I sent them. They were extremely professional and wrote my story in the best way possible. I am glad I found them.",
		"sameAs": "https://www.ghostwritingfounder.com/"
	},
	"publisher": {
		"@type": "Organization",
		"name": "Ghostwriting Founder",
		"sameAs": "https://www.ghostwritingfounder.com/"
	},
	
	"reviewRating": {
		"@type": "Rating",
		"worstRating": 4,
		"bestRating": 5,
		"ratingValue": 4.8 
	}
	
	}
}
</script>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "product",
	"@id": "https://www.ghostwritingfounder.com/",
	"name": "Ghostwritingfounder",
	"image": "https://www.ghostwritingfounder.com/img/landing/logo.png",
	"sameAs": "https://www.ghostwritingfounder.com/",
    
	"review": {
	"@type": "Review",
	"url": "https://www.ghostwritingfounder.com/",
	"author": {
		"@type": "Person",
		"name": "Matilda Oliver",
		"description":"My brother and I always used to talk about writing a story about something that our grandmother used to tell us. These guys helped me write a story that was so close to our hearts the way that we had always wanted to. Kudos guys.",
		"sameAs": "https://www.ghostwritingfounder.com/"
	},
	"publisher": {
		"@type": "Organization",
		"name": "Ghostwriting Founder",
		"sameAs": "https://www.ghostwritingfounder.com/"
	},
	
	"reviewRating": {
		"@type": "Rating",
		"worstRating": 4,
		"bestRating": 5,
		"ratingValue": 4.9 
	}
	
	}
}
</script> -->
