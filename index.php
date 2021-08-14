<?php 
session_start();
include("management/config.php");
include("management/function.php");


$userData = check_login($con);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <header>
        <img src="media/image/logo.jpg" alt="Logo" class="logo">
        <div class="moto">
            <h3>CareerGro Australia</h3> <br>
            <h4> 
                Plan For Better Future <br> 
                Educational Consultants
            </h4>
        </div>

        <nav>
            <a class="active" href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="ae.php">Educational Agents</a>
            <a href="ea.php">Australian Education</a>
            <a href="contact.php">Contact</a>
            <?php 
                if($userData){
                    echo "<a href='management/housekeeping.php' style='float:right'>House Keeping </a>";
                }
                else{
                    echo "<a href='login.php' style='float:right'>Sign In </a>";
                }
            
            ?>
        </nav>


    </header>

    <div class="main">
       
        <img class="gallery" src="media/image/gallery/Melbourne.jpg" alt="">
        <div class="text">
            We do things differently! <br>
            <a href="contact.php">Get in touch today</a>
        </div>
        
    </div>
            

    <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 
  </footer>
        
</body>
</html>