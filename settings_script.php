<?php
include 'includes/common.php';
if(!isset($_SESSION['mail'])){
    header('Location:w.php');
}
else{
    $user_id=$_SESSION['id'];
    $oldpwd=mysqli_real_escape_string($con,$_POST['oldpwd']);
    $newpwd=mysqli_real_escape_string($con,$_POST['newpwd']);
    $newnew=mysqli_real_escape_string($con,$_POST['rnewpwd']);

    if($newpwd!=$newnew){
        header('Location:settings.php?password=not_same');
    }
    else{
        $fetchpwd=mysqli_query($con,"SELECT password from users where id='$user_id';")
        or die(mysqli_error($con));
        if(mysqli_num_rows($fetchpwd)>0){
            $rows=mysqli_fetch_assoc($fetchpwd);
            $prevpwd=$rows['password'];
            if($oldpwd==$prevpwd)
            $updatpwd=mysqli_query($con,"UPDATE users set password='$newpwd' where id='$user_id';")
            or die(mysqli_error($con));
            header('Location:product.php');
        }
        else{
            header('Location:settings.php?password=error');
        }
    }




}