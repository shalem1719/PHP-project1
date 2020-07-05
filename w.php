<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location:product.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>LifeStyle Store | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="style2.css">
    </head>
    <body style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
        
        <?php
        include 'includes/header.php';
        ?>

        <!--BODY SECTION-->
        <section class="showcase">
            <div class="w3-container w3-center">
                <h1 class="w3-text-shadow w3-animate-opacity">Shop for Style</h1>
                <hr>
                <a href="product.php" class="w3-button w3-red w3-large">Shop Now</a>
            </div>
        </section>

        <!--FOOTER-->
        <footer class="foot w3-bottom w3-border-top">
            <div class="w3-center footerr">
                <p>"Copyright © Lifestyle Store. All Rights
                    Reserved” and “Contact Us: +91 8367535342"</p>
            </div>
        </footer>

    </body>
</html>