

<?php 

if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
}else{
	$requesMet = "http";
}



?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-208392107-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-208392107-1');
</script>

<base href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].'/' ?>">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<link rel="stylesheet" href="../use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- <link rel="stylesheet" type="text/css" href="assets/css/simpleLightbox.min.css"> -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/style-web.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
		<style>
			
			.grid{
				width:100%;
				overflow:hidden;
			}
		</style>

<style>
    html{
  background: radial-gradient(#FFF176, #F57F17);
  min-height: 100%;
  font-family: 'Roboto', sans-serif;
}  

.title{
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
  color: #FF8F00;
  font-weight: 300;
  font-size: 24px;
  letter-spacing: 1px;
}  
.description{
  text-align: center;
  color: #666;
  margin-bottom: 30px;
}
.inputField{
  padding: 10px 20px;
  border: 1px solid #999;
  border-radius: 3px;
  display: block;
  width: 100%;
  margin-bottom: 20px;
  box-sizing: border-box;
  outline: none;
}  
.inputField:focus{
    border-color: #FF6F00;
}

input[type="radio"]{
  margin-right: 10px;
}
label{
  margin-bottom: 20px;
  display: block;
  font-size: 18px;
  color: #666;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  padding: 20px 0;
  cursor: pointer;
}  
label:first-child{
margin-bottom: 0;
border-bottom: none;
}

  
.button,
.rerun-button{
  padding: 10px 20px;
  border-radius: 3px;
  background: #FF6F00;
  color: white;
  text-transform: uppercase;
  letter-spacing: 1px;
  display: inline-block;
  cursor: pointer;
}  
.button:hover,
.rerun-button:hover{
    background: #FF6F00;
}  
.rerun-button{
     border: 1px solid rgba(255,255,255,0.6)
     margin-bottom: 50px
     box-shadow: 0px 10px 15px -6px rgba(0,0,0,0.2)
     display: none 
   }    
  
.text-center{
  text-align: center;
}
  
.modal-wrap{
  max-width: 600px;
  /* margin: 50px auto; */
  transition: transform 300ms ease-in-out;
}
.modal-header{
  height: 45px;
  background: white;
  border-bottom: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
}  
  /* span{
    display: block;
    height: 12px;
    width: 12px;
    margin: 5px;
    border-radius: 50%;
    background: rgba(0,0,0,0.2);
  }     */
    span.is-active{
      background: rgba(0,0,0,0.4);
      background: #FF8F00;
}
.modal-bodies{
  position: relative;
  perspective: 1000px;
}  
.modal-body{
  background: white;
  padding: 40px 100px;
  box-shadow: 0px 50px 30px -30px rgba(0,0,0,0.3);
  margin-bottom: 50px;
  position: absolute;
  top: 0;
  display: none;
  box-sizing: border-box;
  width: 100%;
  transform-origin: top left;
}  
  .modal-body.is-showing{
    display: block;
  }
    
    
.animate-out{
  animation: out 600ms ease-in-out forwards;
    
}

.animate-in{
  animation: in 500ms ease-in-out forwards;
  display: block;
}  
.animate-up{
  transform: translateY(-1000px) rotate(30deg);
}  
    
  
@keyframes out{
  0%{
    transform: translateY(0px) rotate(0deg)
  }
  60%{
    transform: rotate(60deg)
  }
  100%{
    transform: translateY(800px) rotate(10deg)
  }
}
  
  
@keyframes in{
  0%{
    opacity: 0;
    transform: rotateX(-90deg);
  }
  100%{
    opacity: 1;
    transform: rotateX(0deg);
  }
}
    

    
</style>