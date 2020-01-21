<?php
    session_start();
    $hostname="127.0.0.1";
    $user="root";
    $pass="123456";
    $database="social_media";
    
    $conn = mysqli_connect($hostname, $user, $pass, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $status= $_POST['status'];
    $user_id= $_SESSION['id'];
    
    $sql="INSERT INTO statuses (date_,time,status,user_id) VALUES (NOW(),NOW(),'$status','$user_id');";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    
    header('Location:homepage.php');
    
    mysqli_close($conn);

?>
    
