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
        
        <!--HEADER-->
        <nav class="w3-bar w3-black w3-top w3-border-bottom">
            <a class="branding w3-bar-item w3-mobile  w3-hover-red" href="w.php" style="text-decoration: none;">LifeStyle Store</a>
            <div class="w3-right w3-mobile">
                <a style="text-decoration: none;" href="cart.php" class="w3-bar-item w3-button w3-mobile   w3-hover-red"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
                <a style="text-decoration: none;" href="settings.php" class="w3-bar-item w3-button w3-mobile   w3-hover-red"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
                <a style="text-decoration: none;" href="logout.php" class="w3-bar-item w3-button w3-mobile   w3-hover-red"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
            </div>
        </nav>

        <!--LOGIN BODY-->
        <section class="loginform w3-card-4">
            <header class="w3-container w3-black">
              <h1 class="changepwd w3-animate-opacity">CHANGE PASSWORD</h1>
            </header>
            <div class="w3-container form-body chp">
                <form method="POST" action="settings_script.php">
                    <input style="width: 400px;" type="password" name="oldpwd" id="oldpwd" placeholder="Old Password"><br><br>
                    <input style="width: 400px;" type="password" name="newpwd" id="newpwd" placeholder="New Password"><br><br>
                    <input style="width: 400px;" type="password" name="rnewpwd" id="rnewpwd" placeholder="Re-type New Password"><br><br>
                    <input type="submit" value="Change" class="w3-button w3-red w3-large">
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