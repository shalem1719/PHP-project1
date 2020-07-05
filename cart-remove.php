<?php
include 'includes/common.php';
$user_id=$_SESSION['id'];
$id=$_GET['id'];
$deletepurchase=mysqli_query($con,"DELETE FROM users_items where item_id='$id' and user_id='$user_id';")
or die(mysqli_error($con));
header('Location: cart.php');
