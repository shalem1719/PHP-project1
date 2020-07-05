<nav class="w3-bar w3-black w3-top w3-border-bottom">
            <a class="branding w3-bar-item w3-mobile  w3-hover-red" href="w.html" style="text-decoration: none;">LifeStyle Store</a>
            <div class="w3-right w3-mobile">
            <?php
            if(isset($_SESSION['email'])){?>
                <a style="text-decoration: none;" href="cart.php" class="w3-bar-item w3-button w3-mobile   w3-hover-red"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
                <a style="text-decoration: none;" href="settings.php" class="w3-bar-item w3-button w3-mobile   w3-hover-red"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
                <a style="text-decoration: none;" href="logout.php" class="w3-bar-item w3-button w3-mobile   w3-hover-red"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
           <?php }
           else{
            ?>
                <a href="signup.php" class="w3-bar-item w3-button w3-mobile   w3-hover-red"><span class="glyphicon glyphicon-user"></span> SignUp</a>
                <a href="login.php" class="w3-bar-item w3-button w3-mobile   w3-hover-red">Login</a>
           <?php } 
           ?>
            </div>
        </nav>