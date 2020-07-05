<?php
include 'includes/common.php';
if(!isset($_SESSION['id'])){
  header('Location:login.php');
 }
  
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
        
       <?php
       include 'includes/header2.php';
       ?>

        <!--BODY SECTION-->
        <div style="margin-top: 70px;" class="billing-table w3-container w3-mobile w3-responsive">
        <table class="w3-table-all w3-large w3-grey">
    
    <!--show table only if there are items added in the cart-->
    <?php
    $sum = 0;
    $user_id = $_SESSION['id'];
    $query = "SELECT i.name,i.price,i.id from items i INNER JOIN users_items ui ON i.id=ui.item_id WHERE ui.user_id=$user_id;";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    if (mysqli_num_rows($result) >= 1) {
        ?>
        <thead>
            <tr>
                <th>Item Number</th>
                <th>Item Name</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result)) {
              $id=0;
                $sum+= $row["price"];
                $id .= $row['id'] . ", ";
                echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link w3-button w3-block w3-red' style='text-decoration:none;'> Remove</a></td></tr>";
            }
            $id = rtrim($id, ", ");
            echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='w3-button w3-block w3-red' style='text-decoration:none;'>Confirm Order</a></td></tr>";
            ?>
        </tbody>
        <?php
    } else {
        echo "Add items to the cart first!";
    }
    ?>
    <?php
    ?>
</table>
        </div>
        <!--FOOTER-->
        <footer class="foot w3-bottom w3-border-top">
            <div class="w3-center">
                <p>"Copyright © Lifestyle Store. All Rights
                    Reserved” and “Contact Us: +91 8367535342"</p>
            </div>
        </footer>

    </body>
</html>