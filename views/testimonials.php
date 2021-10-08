<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8"><!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="twitter:card" content="summary_large_image" />
    <title>Your Wish On</title>
    <meta name="title" content="Rideo">
    <meta name="description"
        content="Rideo is a revolution in the world of digital socializing, where it offers users a platform to express themselves with complete anonymity.">
        <meta name="keywords" content=""><?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/styles.php');?>
        <link rel="stylesheet" href="combine/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <style>
:root{
    --main-color:#6ee9f5;
    --secound-color:#68bef1;
}
body{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

/* start testimonails */
.testim{
  position: relative;
  padding:180px 60px;
}
.testim h2{
  color: var(--secound-color);
  font-size: 2rem;
  font-weight: bold;
}
/* .testim::before{
  position: absolute;
  content: "";
  width: 50%;
  top: 0;
  left: 0;
  background-color: var(--main-color);
  height: 100%;
  z-index: -1;
    }

.testim::after{
  position: absolute;
  content: "";
  width: 50%;
  top: 0;
  right:  0;
  background-color: #0d141f;
  height: 100%;
    } */
    
.testim-content{
position: relative;
/* display: flex; */
/* justify-content: space-around; */
/* gap: 30px; */

}

.testim-box{
z-index: 2;
background-color: var(--secound-color);
padding: 20px 30px;
margin-top:20px;
color:#fff;
/* height:350px; */
min-height:340px;
}

.testim-box-content{
    margin-top:25px;
}

.testim-box-content img{
  top: -10px;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  float: left;
  margin-right: 30px;
  position: relative;

}

.testim-content h3{
  color: #fff;
  font-size: 1.3rem;
  }
  .testim-box > p{
    color: #fff;
    font-style: italic;
    padding-bottom: 20px;
    height: 200px;
    overflow-y: scroll;
  }
  .testim-box > p::-webkit-scrollbar{
    width:2px;
    background:#68bef1;
  }
  /* .testim-box > p::-webkit-scrollbar {
  display: none;
} */

/* Demonstrate a "mostly customized" scrollbar
 * (won't be visible otherwise if width/height is specified) */
.testim-box > p::-webkit-scrollbar {
  width: 5px;
  height: 8px;
  background-color: #aaa; /* or add it to the track */
}

/* Add a thumb */
.testim-box > p::-webkit-scrollbar-thumb {
    background: #000;
}
.testim-box-content p{
color: var(--main-color);
}
/* endtestimonails */



    </style>
</head>

<body class="page-portfolio-post scheme-dark ">
    <!-- Header --><?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/header.php');?>
    <section class="section1 " style="background-image:url('assets/banners/banner.jpg');min-height:80vh;display:flex;">
        <div class="container align-self-center text-white text-center" >
            <h1>What Our Clients Says About US</h1>
        </div>
    </section>
    <!-- start testimonials -->
<div class="testim">
  <div class="container">
    <h2>Testimonials</h2>
      <div class="testim-content row">
        
      <div class="col-lg-4">
        <div class="testim-box">
            <p>It was hard for us to meet someone who could match our pace, our ideas and someone who could think out of the box like us...Keeping it short. I finally collaborated with a team of brilliant minds. I've never come across a talent pool with so much energy and free flow of ideas. The AF is honestly good AF***. Grab on the train and enjoy the ride with them.</p>
            <div class="testim-box-content">
            
            <h3>Love AirHme Team</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>I had been trying to find an agency to help me with an application like Uber. Jim from App Founders not only helped me with creating the application for my business but also guided me with a visionary idea that is helping me get the boost my business needs in this competitive industry. 100% recommended. Great consultation. Visionary ideas</p>
            <div class="testim-box-content">
            
            <h3>Rideo</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>
                "Six months ago it was hard for us to imagine Stacker Cracker outcome being anything but another disaster in a string of near high impact corporate fatalities. We had just come off of not one but two awful experiences with app development companies. Our first experience left us with a half finished product and a programmer who was trying to strong arm us into more money for a product that his company could not complete for any amount of money. Our second experience left our product in a worse state than the first experience.
                Then enter App Founders....With this group, we have had an incredible experience; timelines actually being met, creative collaborations, and a very willing staff to work through our issues all along the way. A quote from our President, 'We finally have the product we have been trying to finish for over a year. I'm proud to show it to my friends, family and colleagues where in the past I was embarrassed. App Founders has exceeded our expectations and showed us what working with professionals was like.'"

            </p>
            <div class="testim-box-content">
            
            <h3>Jack Wayne</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>Our collaboration with The App Founders was our first step towards providing online mobility of our services. Their resources were highly experienced and were willing to go out of the way to help our project get off the background. Glad to hear they are a one-stop solution that provides anything you can think of digitally.</p>
            <div class="testim-box-content">
            
            <h3>Your Wish On</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>We love our app. The App Founder did an excellent job. We were looking for create a game which will also represent some of our community aspects and the App founders made our dreams come into reality. The App works perfect and we are getting a huge influx of audience. Initially we have had some bad experience from different companies but we wanted to make an app and took our last chance but it turned into gold when App Founder's team stepped in and did got the job done.Thank you so much for all the efforts that you guys have done. Looking forward to do many projects in the future.</p>
            <div class="testim-box-content">
            
            <h3>Team FAARIS</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>Printful was founded in 2013, and we can certainly give a major credit to The App Founders in our success. From designing to maintaining, The App Founders have been hand-in-hand with us throughout. If you're looking to grow your business, The App Founders is definitely your FIRST CHOICE. We are even more motivated to work with them and continue to grow our business relationship with them.</p>
            <div class="testim-box-content">
            
            <h3>Lauris</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>We came to theses guys only saying we need a basic APP and we only gave these guys our working information, logo and some pictures of our products which they asked. They talked with us, gave us ideas on how to make things better and in the end gave us a beautiful APP which we were not even able to imagine. our business Our Clients are Very Very Happy with Mike and his team. Our APP works in both English and Arabic and we are very happy with it. Visit our APP Tamkeen Care and look for yourself.</p>
            <div class="testim-box-content">
            
            <h3>Tamkeen Care</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>We wanted a simple, user friendly and addicting game, timeframe was limited and miraculously App Founders came to our rescue, developed the game in the given time frame and it was even better than what we had expected. We are currently working on 2 more games with them and definitely looking to do more business with App Founders, they will never let you down.
Excellent communication, Experienced Developers and timely update, this is what pushes me to keep coming back to App Founders.</p>
            <div class="testim-box-content">
            
            <h3>BALLY</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>We are a business based in the low country that uses simple machines and technological devices to reinforce the STEM curriculum for interactive fun and discoveries. We wanted to step our game up and get a game created that would help develop young minds. We reached out to a few development teams however the prices were way out of our reach and this is exactly when we found out about the offer that AppFounders had for us. The pricing is incredibly reasonable compared to their competitors with zero compromise over the quality and efficiency of their work!! To be honest, we were not expecting such a level of flexibility that could fit the way we worked. Kudos to the team for timely execution and strongly recommended for companies that are tired of overpriced services on the web!!</p>
            <div class="testim-box-content">
            
            <h3>Game developed for my company: Color Jumper</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>Woah, what an exciting ride this has been. From just imagining having a game of my own to making it a reality. App Founders are truly the best at making your visions come into reality. The time I reached out to them I was just expecting something basic but these guys hands down were the best. From multiple brainstorming sessions to improvising every idea that was thrown at them. These guys are ahead of time. Just share your idea and let these magicians work. Pleasure working with the App Founders was a really exceptional experience from start to finish. I would definitely work with them again. Very soon.</p>
            <div class="testim-box-content">
            
            <h3>Dragon Force</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>We just wanted to come up with a simple application that could help with car tuning. We did not think that it was at all possible to make this app look like what it is right now. They call it something like photorealistic virtual car tuning feature. It was THEIR Idea. Their efforts are extremely commendable. I have no words to put out there for The App Founders. The way they've set this up is very exciting. I have customers upgrading to full subscriptions after using it for once or twice.
It's amazing what they did for us and we're glad to partner with them.</p>
            <div class="testim-box-content">
            
            <h3>IK - Managing Partner</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>This kind of platform is not easy to develop and finding the right team for such large project where we have to fetch data of thousands of cryptos from centralized source of blockchain and still maintaining the speed and security was our main concern. Use of the AI was another factor we were searching for. With the App Founders, experience got better as their R&D division is well qualified to recommend ideas based on industry research such as idea of Earn Crypto integrated on our platform right now. Today Coingecko is known around the world and we would say it was combined effort with the App Founders, without them it would have been difficult to execute high quality platform with alot of great ideas for market capturing. Great Job.</p>
            <div class="testim-box-content">
            
            <h3>Coin Gecko</h3>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testim-box">
            <p>More than 2 decades ago we had a mission to create a platform which can allow people to order food from any restaurant under a single roof. We had a plan, we had investment, we even had a mission but we lacked vision. That is when we found The App Founders, they had a vision for us which now makes us one of the most prestigious food delivery service provider in the Middle East. They did not only help us with creating an application, they helped us set a complete business strategy and construct our business model. Our overall experience with The App Founders has been 'Delicious', and we would recommend them to most businesses out there. Their vision lifted our mission which gave us a turning point to the road to success.</p>
            <div class="testim-box-content">
            
            <h3>Khaled Alotaibi and Abdulaziz Al Loughani</h3>
            </div>
        </div>
      </div>

        </div>
  </div>
</div>
<!-- end testimonils -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/footer.php');?>
    <?php include_once($_SERVER['DOCUMENT_ROOT'].'/include/scripts.php');?>
    <script>
        $(document).ready(function(){
        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            if (scroll>80) {
                $('#navbar').addClass('sticky');
                $('.logoImg').attr('src','img/logo.png')
            }else{
                $('#navbar').removeClass('sticky');
                $('.logoImg').attr('src','img/logo.gif')
            }
        });

        
    });
    </script>
</body>

</html>