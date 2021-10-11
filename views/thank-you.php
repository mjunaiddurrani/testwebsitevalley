
<html lang="en-US">
<head>
<?php include_once('includes/head.php');?>
<title>Get an interactive user friendly website and grow your business</title>
<meta name="description"  content="Visionary LogoDesigns is a digital design agency specializing in branding, animation, mobile and web design and development." />


</head>

<body class="home blog homepage_style homeclass hoverheader home-bd">

    <div class="app-content">
      <div class="main">

        

<?php include_once('includes/header.php');?>
<section class="our-banner inner-banner text-center">
    
    <div class="container">
        <div class="caption"  data-aos="fade-up"data-aos-duration="800">
            <h1><?php if(isset($_SESSION['thanksMsg'])){ echo $_SESSION['thanksMsg'];} ?></h1>
            <h1><?php if(isset($_REQUEST['successMsg'])){ echo $_REQUEST['successMsg'];} ?></h1>
            <h5>Thank You</h5>
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



<?php include_once('includes/footer.php');?>





         
   

    </div>
    </div>





    
</body>


</html>


