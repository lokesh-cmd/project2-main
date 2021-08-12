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

    <footer>
        <div class="cr">
            <a href="#">Copyright Info</a>
        </div>
        <div class="address">
            Nicholas Street, Keysborough, Victoria 3171 <br>
            <a href="mailto:Careergroaustralia@gmail.com">Careergroaustralia@gmail.com</a> <br>
            Office No. <a href="tel:+61 4315 316 97">+61 4315 316 97</a>
        </div>
        <div class="socialid">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
        </div>
    </footer>
        
</body>
</html>