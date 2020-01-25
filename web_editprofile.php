<!DOCTYPE html>
<html>
    <head>
        <title> Web_EditProfile </title>
        <link rel= "stylesheet" href= "css/web_editprofile.css"/>
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
                            <a href = "wed_myprofile.php"><b><u> My</u> Dashboard</b></a>
                        </div>
                        <div class= "r1_c2_rw3"></div>
                    </div>
                    <div class= "r1_c2_cc2">
                        <div class= "r1_c2_rr1"></div>
                        <div class= "r1_c2_rr2">
                            <div class= "log"><a href= "logout.php"><b>Logout</b></a></div>
                        </div>
                        <div class= "r1_c2_rr3"></div>
                    </div>
                </div>
                
            </div>
        </div>
        </hr>
        
        
        
        
        <div class= "row3">
            <div class= "col7">
                <div class= "r3_c7_rw1">
                    <div class= "r3_c7_clm2">
                        <div class= "r3_c7_rr1">
                                <a href = "web_myprofile.php"><u> Profile </u></a>
                        </div>
                        <div class= "r3_c7_rr3">
                            <b><u> Edit</u> Profile</b> 
                        </div>
                    </div>
                </div>
            </div>
            <div class= "col8">
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
                    $id=$_SESSION['id'];
                    $sql1="SELECT * FROM users";
                    $result1 = mysqli_query($conn, $sql1);
                    if (!$result1) {
                        die("Error: " . $sql . "<br>" . mysqli_error($conn));
                    }
                    while($row=mysqli_fetch_array($result1)){
                        if($id==$row['id']){
                             $_SESSION['name']=$row['name'];
                             $_SESSION['email']=$row['email'];
                             $_SESSION['password']=$row['password'];
                             $_SESSION['college']=$row['college'];
                             $_SESSION['phone_no']=$row['phone_no'];
                             
                            
                        }        
                    } 
                    mysqli_close($conn);
    
                    
                ?>
                <div class= "cp2">
                <form method = "post" action = "web_edit_submit.php">
                   <br/><br/><br/><br/>
                   <b><p6>Name:</p6></b><br/><br/>
                   <input type="text" name="name" value ="<?php echo $_SESSION["name"];?>"><br/><br/><br/>
                   <b><p6>Email:</p6></b><br/><br/>
                   <input type="text" name="email" value ="<?php echo $_SESSION["email"] ;?>"><br/><br/><br/>
                   <b><p6>Password:</p6></b><br/><br/>
                   <input type="text" name="password" value ="<?php echo $_SESSION["password"] ;?>"><br/><br/><br/>
                   <b><p6>College:</p6></b><br/><br/>
                   <input type="text" name="college" value ="<?php echo $_SESSION["college"] ;?>"><br/><br/><br/>
                   <b><p6>Phone Number:</p6></b><br/><br/><br/>
                   <input type="text" name="phone_no"  value ="<?php echo $_SESSION["phone_no"] ;?>"><br/><br/><br/>
                   <br/><br/>
                   <input type="submit" value="Update" name="update"/>
                </form>
                </div>
             </div>
            <div class= "col9"></div>
        </div>
        
        
        
       
        
        <div class= "row4">
            <div class= "c6">
                <div class= "r4_c6_clm1">
                    <div class= "r4_c6_rw1">
                        Connect with us at
                    </div>
                    <div class= "r4_c6_rw2">
                        <div class= "r4_c6_cc1">
                            <a href = "www.youtube.com"><img class="logo_img1" src= "img/you.png"/></a>
                        </div>
                        <div class= "r4_c6_cc2">
                            <a href = "www.facebook.com"><img class= "logo_img2" src= "img/fb2.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class= "c7">
                 <div class= "r4_c7_clm1">
                    <div class= "r4_c7_rw1">
                        For any questions/doubts,write us at -
                    </div>
                    <div class= "r4_c7_rw2">
                        queries@ungineering.com
                    </div>
                 </div>
            </div>    
        </div>
    </body>
</html>
