<!DOCTYPE html>
<html>
    <head>
        <title> Web_myProfile </title>
        <link rel= "stylesheet" href= "css/web_myprofile.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
        <div class= "row1">
            <div class= "c1">
                <div class= "r1_c1_clm1">
                    <div class= "r1_c1_cc1">
                        <img  class= "logo_img" src="img/ungineering_logo.svg"/>
                    </div>
                    <div class= "r1_c1_cc2">
                        <div class ="r1_c1_rw1">
                            <b><span style="color:red">un</span>gineering</b>
                        </div>
                        <div class ="r1_c1_rw2">
                             A <span style= "color:red">bit</span> of knowledge is good.A <span style= "color:red"> byte</span> is better.
                        </div>
                    </div>
                </div>
            </div>
            <div class= "c2">
                <div class= "r1_c2_clm1">
                    <div class= "r1_c2_cc1">
                        <div class= "r1_c2_rw1"></div>
                        <div class= "r1_c2_rw2">
                            <a href = "web_myprofile.php"><b><u> My</u> Dashboard</b></a>
                        </div>
                        <div class= "r1_c2_rw3"></div>
                    </div>
                    <div class= "r1_c2_cc2">
                        <div class= "r1_c2_rr1"></div>
                        <div class= "r1_c2_rr2">
                            <div class= "log"><a href = "logout.php"><b>Logout</b></a></div>
                        </div>
                        <div class= "r1_c2_rr3"></div>
                    </div>
                </div>
                
            </div>
        </div>
        </hr>
        
        <div class= "row2">
            <div class= "c3">
                <div class= "r2_c3_clm1">
                    <div class="r2_c3_rr1">
                        <div class= "r2_c3_rw1">
                            <b><u>Profi</u>le</b>
                        </div>
                        
                        <div class= "r2_c3_rw3">
                            <a href = "web_editprofile.php"><u> Edit Profile</u></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class= "c4">
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
                $user_id=$_SESSION['id'];
                $sql="SELECT * FROM statuses WHERE user_id=$user_id ORDER BY id DESC";

                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Error: " . $sql . "<br>" . mysqli_error($conn));
                }
                ?>
            <?php
                while($row=mysqli_fetch_array($result))
                {?>
                <div class= "r2_c4_rw1">
                    <div class= "r2_c4_rr1">
                       
                        <div class= "r2_c4_cc2">
            <?php                 echo $row['status'];?>
                        </div>
                       
                    </div>
                    <div class= "r2_c4_rr2">
                        <i>Time:<?php echo $row['time']; ?>Hrs IST |<?php echo $row['date_'];?></i>
                    </div>
                </div>
          <?php }?>
            </div>
        </div>
        
        
        <div class= "row3">
            <div class= "c6">
                <div class= "r3_c6_clm1">
                    <div class= "r3_c6_rw1">
                        Connect with us at
                    </div>
                    <div class= "r3_c6_rw2">
                        <div class= "r3_c6_cc1">
                           <a href = "www.youtube.com"><img class="logo_img1" src= "img/you.png"/></a>
                        </div>
                        <div class= "r3_c6_cc2">
                            <a href = "www.facebook.com"><img class= "logo_img2" src= "img/fb2.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
               
                mysqli_close($conn);
             ?>

            <div class= "c7">
                 <div class= "r3_c7_clm1">
                    <div class= "r3_c7_rw1">
                        For any questions/doubts,write us at -
                    </div>
                    <div class= "r3_c7_rw2">
                        queries@ungineering.com
                    </div>
                 </div>
            </div>    
        </div>
    </body>
</html>    
