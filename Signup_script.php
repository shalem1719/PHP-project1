<?php
if(isset($_POST['signup'])){
    include 'includes/common.php';

    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['mail']);
    $pwd=mysqli_real_escape_string($con,$_POST['pwd']);
    $contact=mysqli_real_escape_string($con,$_POST['contact']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $address=mysqli_real_escape_string($con,$_POST['address']);

    //check errors first and then success


    if(empty($name)||empty($email)||empty($pwd)||empty($contact)||empty($city)||empty($address)){
        header('Location:signup.php?signup=empty');
    }
    else{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header('Location: signup.php?signup=invalidemail');
        }
        else{
            if(strlen($pwd)<8){
                header('Location:signup.php?signup=invalidpassword');
            }
            else{

              //  $select_emailss=mysqli_query($con,"select id from users where email=$email;");
                //$roww=msql_num_rows($select_emailss);
                //if( mysqli_num_rows($select_emailss)!=0){
                  //  echo "Email already exists";
                    //header('Location: signup.php?signup=emailexists');
                //}
               // else{
                    //$pwd=md5($pwd);
                    $insertusers=mysqli_query($con,"insert into users(name,email,password,contact,city,address) values('$name','$email','$pwd','$contact','$city','$address');")
                    or die(mysqli_error($con));
                    $id=mysqli_insert_id($con);
                    $_SESSION['id']=$id;
                    $_SESSION['mail']=$email;
                    header('Location: product.php');
               // }




            }
        }
    }
}
else{
    header('Location:signup.php?signup=error');
}

