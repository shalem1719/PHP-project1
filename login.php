<?php
include 'includes/common.php';
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
       include 'includes/header.php'
       ?>

        <!--LOGIN BODY-->
        <section class="loginform w3-card-4">
            <header class="w3-container w3-black">
              <h1 class="w3-animate-opacity">LOGIN</h1>
            </header>
            <div class="w3-container form-body">
                <p>Login to make a purchase</p>
                <form method="POST" action="login_submit.php">
                    <input style="width: 400px;" type="email" name="mail" id="mail" placeholder="Email"><br><br>
                    <input style="width: 400px;" type="password" name="pwd" id="pwd" placeholder="Password"><br><br>
                    <input type="submit" class="w3-button w3-red w3-large" value="Login">
                </form>
            </div>
            <footer class="form-footer w3-container w3-black">
                <h5>Don't have an account? <a href="signup.php" class="reg-button w3-button w3-large w3-red">Register</a></h5>
              </footer>
                  
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