<?php
    $hostname="localhost";
    $username="root";
    $db_password="123456";
    $database="social_media";
    
    $response = array();
    $conn=mysqli_connect($hostname,$username,$db_password,$database);
    if(!$conn){
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
        //die("connection failed: ". mysqli_connect_error());
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password= $_POST['password'];
    $con_pw=$_POST['password1'];
    if($password==$con_pw)
    {
        $sql="INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
        //$result=mysqli_query($conn,$sql);
        if (!mysqli_query($conn, $sql)) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
        }
    }

    $response['success'] = true;
    $response['message'] = "Registration successful";
    echo json_encode($response); 
        
    mysqli_close($conn);
?>
