<?php
    session_start();
    //$name=$_COOKIE['name'];
    if(isset($_SESSION['id'])&&$_SESSION['id']){
        header('Location:hp_login.php');
    }
    else{
        echo "Invalid user";
    }
?>
