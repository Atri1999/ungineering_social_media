<?php
    session_start();
    $hostname="127.0.0.1";
    $user="root";
    $pass="123456";
    $database="social_media";
    
    $response = array();
    
    $conn = mysqli_connect($hostname, $user, $pass, $database);
    if (!$conn) {
        $response['success']=false;
        $response['messege']="Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
    }
    
    $status= $_POST['status'];
    $user_id= $_SESSION['id'];
    
    $sql="INSERT INTO statuses (date_,time,status,user_id) VALUES (NOW(),NOW(),'$status','$user_id');";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response['success']=false;
        $response['messege']="Error: " . mysqli_error($conn);
        echo json_encode($response);
    }
    
    $sql2="SELECT name FROM users WHERE id = $user_id";

    
    $result2 = mysqli_query($conn, $sql2);
    if (!$result) {
        $response['success']=false;
        $response['messege']="Error: " . mysqli_error($conn);
        echo json_encode($response);
    }
    $result2=mysqli_fetch_array($result2);
    
    $response['success']=true;
    $response['name']=$result2['name'];
    $response['date']=date('Y-m-d');
    $response['time']=date('H:i:s');
    $response['status']=$status;
    $response['messege']="...";
    
    echo json_encode($response);
    
    mysqli_close($conn);

?>
    
