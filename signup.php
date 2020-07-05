<?php
include 'includes/common.php';
if((isset($_SESSION['email']))){
header('location:product.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>LifeStyle Store | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="style2.css">
    </head>
    <body style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
        
        <?php
        include 'includes/header.php';
        ?>

        <!--SIGNUP BODY-->
        <section style="margin-top: 42px;" class="w3-card-4 signup-body">
            <header class="w3-container w3-black">
              <h1 class="w3-animate-opacity">SIGN UP</h1>
            </header>
            <div class="w3-container">
                <form style="margin-bottom: 136px;" method="POST" action="Signup_script.php">
                    <input style="width: 400px;margin-top: 20px;" type="text" name="name" id="name" placeholder="Name" required><br><br>
                    <input style="width: 400px;" type="email" name="mail" id="mail" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br><br>
                    <input style="width: 400px;" type="password" name="pwd" id="pwd" placeholder="Password" required pattern=".{8,}"><br><br>
                    <input style="width: 400px;" type="text" name="contact" id="contact" placeholder="Contact" required pattern="[0-9]{10,13}$"><br><br>
                    <input style="width: 400px;" type="text" name="city" id="city" placeholder="City" required><br><br>
                    <input style="width: 400px;" type="text" name="address" id="address" placeholder="Address" required><br><br>
                    <input type="submit" class="w3-button w3-red w3-large" name="signup" value="Signup">
                </form>
            </div>      
        </section>


        <!--FOOTER-->
        <footer class="foot w3-mobile w3-border-top w3-bottom">
            <div class="w3-center">
                <p>"Copyright © Lifestyle Store. All Rights
                    Reserved” and “Contact Us: +91 8367535342"</p>
            </div>
        </footer>

    </body>
</html>
