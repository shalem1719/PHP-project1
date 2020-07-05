<?php 
include 'includes/common.php';
if(!isset($_SESSION['mail'])){
    header('Location:w.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>LifeStyle Store | Settings</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="style2.css">
    </head>
    <body style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
        
        <?php
        include 'includes/header2.php';
        ?>
        <div class="w3-container w3-center success-msg">
            <h1>
            <?php
            $user_id=$_GET['itemsid'];
            
            ?>
                Your order is confirmed. Thank you for shopping
                with us. <a style="text-decoration: none;color:tomato;" href="product.php">Click here</a> to purchase any other item
            </h1>

        </div>

        <!--FOOTER-->
        <footer class="foot w3-mobile w3-border-top w3-bottom">
            <div class="w3-center">
                <p>"Copyright © Lifestyle Store. All Rights
                    Reserved” and “Contact Us: +91 8367535342"</p>
            </div>
        </footer>

    </body>
</html>