<?php
    session_start();
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";
    $conn = mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $college=$_POST['college'];
    $phone_no=$_POST['phone_no'];
    $id=$_SESSION['id'];
    $sql="UPDATE users SET name='$name',email='$email',password='$password',college='$college',phone_no='$phone_no' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    echo "Profile update" ."<br/>";
    ?>
        <a href ="web_editprofile.php"> click here </a> to continue.
        <?php
        
              
 
    
    mysqli_close($conn);
?>

