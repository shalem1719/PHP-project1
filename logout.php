<?php
session_start();
if(!isset($_SESSION['mail']))
{
    header('Location:w.php');

}
else{
    session_destroy();
    header('Location:w.php');

}