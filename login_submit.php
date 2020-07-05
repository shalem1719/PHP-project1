<?php
include 'includes/common.php';
$mail=mysqli_real_escape_string($con,$_POST['mail']);
$pwd=mysqli_real_escape_string($con,$_POST['pwd']);
//$pwd=md5($pwd);
$select_users=mysqli_query($con,"SELECT id,email from users where email='$mail' and password='$pwd';")
or die(mysqli_error($con));
$rows=mysqli_num_rows($select_users);
if($rows==0){
    echo "Username or password incorrect!";
    header('location: login.php?login=wrong_credentials');
}
else{
    $row=mysqli_fetch_array($select_users,MYSQLI_ASSOC);
    $_SESSION['mail']=$row['email'];
    $_SESSION['id']=$row['id'];
    echo "Login successful";
    header('location:product.php');
}
?>