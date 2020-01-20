<?php
    session_start();
    $hostname="127.0.01";
    $username="root";
    $db_password="123456";
    $db_name="social_media";
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }

    $email=$_POST['email'];
    $password= $_POST['password'];
    $flag=0;
    
    while($row=mysqli_fetch_array($result)){
        if($row['email']==$email && $row['password']==$password){
            $flag=1;
            $_SESSION['id']=$row['id'];
            header('Location:homepage.php');
            break;
        }
    }
    if($flag==0){
        header('Location:web_login.php');     
    }
    mysqli_close($conn);
?>

