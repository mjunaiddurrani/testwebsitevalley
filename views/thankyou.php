<!doctype html>
<html lang="en-US">
<head>
  <?php include_once('include/styles.php') ?>
    <link rel="stylesheet" href="css/contact-us.css">
    <title>The WebFounders THANK YOU </title>

</head>
  <body>
    <?php include_once('include/header.php') ?>
    <section class="section1" style="background: #7202d4;">
    <?php if(isset($_SESSION['thanksMsg'])){
      ?>
      
      
      <div class="container">
        <div class="row text-center text-sm-left">
          <div class="col-lg-9">
            <h1 class="text-white mb-4 font-medium"><?php  echo $_SESSION['thanksMsg']; ?></h1>
          </div>
        </div>
      </div>
    
      <?php

    }?>
    <div class="container">
      <!-- <h1 class="text-white mb-4 font-medium"><?php  echo $_REQUEST['successMsg']; ?></h1> -->
      
    </div>
   </section>

    
    <?php include_once('include/footer.php');?>
    
    <?php include_once('include/scripts.php');?>

      <?php 
       	if(isset($_REQUEST['successMsg'])){
          if ($_REQUEST['status']==1) {
              echo "<script>Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: '$_REQUEST[successMsg]'
                })</script>";
          } else {
              echo "<script>Swal.fire({
                  position: 'top-end',
                  icon: 'warning',
                  title: '$_REQUEST[successMsg]'
                })</script>";
          }
          
         
      }
      ?>

  </body>
</html>