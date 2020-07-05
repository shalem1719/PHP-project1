<?php
include 'includes/common.php';
$id=$_GET['id'];
$user_id=$_SESSION['id'];
$insertuseritems=mysqli_query($con,"insert into users_items(user_id,item_id,status) values($user_id,$id,'Added to cart')")
or die(mysqli_error($con));
header('Location:product.php');