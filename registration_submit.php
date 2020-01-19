<?php
    $hostname="127.0.01";
    $username="root";
    $db_password="123456";
    $db_name="social_media";
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password= $_POST['password'];
    $con_pw=$_POST['password1'];
    if($password==$con_pw)
    {
        $sql="INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
        $result=mysqli_query($conn,$sql); 
        if(!$result){
            die("Error: ".$sql."<br/>". mysqli_error($conn));
        }
        echo "Registration Successful";
        ?>
        <p><a href="web_login.php">Click here</a>to continue</p>
        <?php
    }
    else{
        echo "Password and confirm password doesn't match";
        ?>
        <p><a href="web_registration.php">Click here</a>to continue</p>
        <?php   
    }
    mysqli_close($conn);
?>





