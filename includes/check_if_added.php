<?php
//include 'includes/common.php';

function check_if_added_to_cart($item_id){
    $con=mysqli_connect("localhost","root","","store");
$user_id=$_SESSION['id'];
$ifadded_query=mysqli_query($con,"SELECT * from users_items where user_id='$user_id' and item_id='$item_id';");
if(mysqli_num_rows($ifadded_query)>0){
    return 1;
}
else {
    return 0;
}
}