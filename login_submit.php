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
            echo"Hello"." ". $row['name'];
            //setcookie("id",$row['id'],time()+3600);
            //setcookie("name",$row['name'],time()+3600);
            $_SESSION['id']=$row['id'];
            $_SESSION['name']=$row['name'];
            ?>
            <br/>
            
            <form action="hp_login.php" method="get">
                <input type="hidden" name="name" value="<?php echo $row['name']?>"/>
                <input type="submit" name="submit" value="click here"/>
            </form>
            <?php
            break;
        }
    }
    if($flag==0){
        echo"Login unsuccessful";
    }
   // echo"Fetching problem.";
    mysqli_close($conn);
?>

