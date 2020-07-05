<?php
session_start();
$con=mysqli_connect("localhost","root","","store");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>LifeStyle Store | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
        <?php
        include 'includes/check_if_added.php';
        ?>
        <!--BODY SECTION-->
        <div style="margin-top: 70px; margin-bottom: 30px;" class="prod-body">
            <div class="container prod">
                <div style="background-color: lightgray;border-radius: 5px;" class="w3-container w3-center">
                    <h1 style="font-weight: 700;" class="w3-animate-opacity">Welcome to our LifeStyle Store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
                <div style="margin-top: 30px;">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/a.jpg">
                                <div class="caption">
                                    <h3>Cannon EOS</h3>
                                    <p>Price: Rs. 36000.00</p>
                                   
                                    <!--For logged out users-->
                                    <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(1)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=1">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>    
                                </div>
                            </div>
                        </div>
                        <!--Second image in first row-->
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/b.jpg">
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Price: Rs. 40000.00</p>

                                     <!--For logged out users-->
                                     <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(2)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=2">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/c.jpg">
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Price: Rs. 50000.00</p>

                                     <!--For logged out users-->
                                     <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(3)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=3">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/d.jpg">
                                <div class="caption">
                                    <h3>Olympus DSLR</h3>
                                    <p>Price: Rs. 80000.00</p>

                                    <!--For logged out users-->
                                    <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(4)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=4">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/e.jpg">
                                <div class="caption">
                                    <h3>Titan Model#301</h3>
                                    <p>Price: Rs. 13000.00</p>

                                    <!--For logged out users-->
                                    <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(5)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=5">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>   
                                </div>
                            </div>
                        </div>
                        <!--Second image in first row-->
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/f.jpg">
                                <div class="caption">
                                    <h3>Titan Model #201</h3>
                                    <p>Price: Rs. 3000.00</p>

                                    <!--For logged out users-->
                                    <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(6)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=6">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/g.jpg">
                                <div class="caption">
                                    <h3>HMT Milan</h3>
                                    <p>Price: Rs. 8000.00</p>

                                    <!--For logged out users-->
                                    <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(7)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=7">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/h.jpg">
                                <div class="caption">
                                    <h3>Faber Luba #111</h3>
                                    <p>Price: Rs. 18000.00</p>

                                    <!--For logged out users-->
                                    <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(8)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=8">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/j.jpg">
                                <div class="caption">
                                    <h3>H&W</h3>
                                    <p>Price: Rs. 800.00</p>

                                    <!--For logged out users-->
                                    <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(9)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=9">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--Second image in first row-->
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/j.jpg">
                                <div class="caption">
                                    <h3>Luis Phil</h3>
                                    <p>Price: Rs. 1000.00</p>

                                    <!--For logged out users-->
                                    <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(10)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=10">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/k.jpg">
                                <div class="caption">
                                    <h3>John Zok</h3>
                                    <p>Price: Rs. 1500.00</p>

                                    <!--For logged out users-->
                                    <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(11)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=11">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumbnail w3-center">
                                <img src="img/l.jpg">
                                <div class="caption">
                                    <h3>Jhalsani</h3>
                                    <p>Price: Rs. 1300.00</p>

                                    <!--For logged out users-->
                                    <?php
                                    if(!isset($_SESSION['id'])){?>
                                    <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="login.php">Add to cart</a></button>
                                    <?php
                                    }
                                    //for logged in users
                                    else{
                                        if(check_if_added_to_cart(12)==1){?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="#">Add to cart</a></button>
                                        <?php
                                        }
                                        else{?>
                                        <button class="w3-button w3-block w3-red"><a style="text-decoration: none;" href="cart-add.php?id=12">Add to cart</a></button>
                                        <?php

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div> 
                </div>
            </div>
            </div>
            </div>
        <!--FOOTER-->
        <footer style="padding-left: 0px; padding-right: 0px;" class="fooot w3-container w3-bottom w3-border-top">
            <div class="w3-center">
                <p>"Copyright © Lifestyle Store. All Rights
                    Reserved” and “Contact Us: +91 8367535342"</p>
            </div>
        </footer>

    </body>
</html>