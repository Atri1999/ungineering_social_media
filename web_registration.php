<!DOCTYPE html>
<html>
    <head>
        <title> web_registration page </title>
        <link rel="stylesheet"  href="css/web_registration.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    </head>
    <body>
       <!-- <div class="row1"> 
            
            
        </div> -->
        <div class="row2"> 
            <div class="one"></div>
            <div class="two">
                <a href="http://www.ungineering.com/">
                    <div class="logoimg">
                        <img class="ungineering_logo" src="http://www.ungineering.com/static/img/ungineering_logo.svg" alt="ungineering_logo">
                    </div>
                    <div class="logotext">
                        <div class="logo_text_container1">
                            <h1 class="text_ungineering">
                                <span class="text_un">un</span>
                                <span class="text_gineering">gineering</span>
                            </h1>
                        </div>
                        <div class="logo_text_container2">
                            <h6 class="knowledge">A <span class="bit">bit</span> of knowledge is good.A<span class="byte"> byte</span> is better</h6>
                        </div>        
                    </div>
                </a>
            </div>
            <div class="three">
                <div class="three1"></div> 
                <div class="three2"></div>  
            </div>     
        </div> 
        <div class="row3"> 
            
        </div>
        
        <div class="maindiv"> 
            
            <div class="maindiv2">
                <div class="row4"> 
                    <div class="four"></div>
                    <div class="five"><a href="web_login.php"><h2 style="color:red;padding-top:13px;">Existing user</h2></a></div>
                    <div class="six"><a href="web_registration.php"><h2 class="sixhead" style="color:black;padding-top:13px;padding-left:70px;">New user</h2></a></div>
                    <div class="seven"></div>
                </div>
                <div class="row5"> 
                    <div class="eight"></div>
                    <div class="nine"><h1>Create New Account at<br/>Ungineering</h1></div>
                    <div class="ten"></div>
                </div>
                <form id="registration_form" method="post" action="registration_submit.php">
                    <div class="name_row"> 
                        <div class="name_row-1"> </div>
                        <div class="name_row-2">
                            <div class="name_row-2-1"><h3 class="name">Name</h3></div>
                            <div class="name_row-2-2">
                                <input class="name_row-2-2input" style="border: solid 1px red;margin-bottom:25px;" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="name_row-3"></div>
            
                    </div> 
                    <div class="row6"> 
                        <div class="row6-1"> </div>
                        <div class="row6-2">
                            <div class="row6-2-1"><h3 class="email">Email</h3></div>
                            <div class="row6-2-2">
                                <input class="row6-2-2input" style="border: solid 1px red;" type="text" name="email"/>
                            </div>
                        </div>
                        <div class="row6-3"></div>
            
                    </div> 
                    <div class="row7"> 
                        <div class="row7-1"> </div>
                        <div class="row7-2"> 
                            <div class="row7-2-1"><h3 class="password">Password</h3></div>
                            <div class="row7-2-2">
                                <input class="row7-2-2input" style="border: solid 1px red;" type="password" name="password"/>
                            </div>
                        </div>
                        <div class="row7-3"></div>
                    </div>
                    <div class="confirm_password"> 
                        <div class="confirm_password-1"> </div>
                        <div class="confirm_password-2"> 
                            <div class="confirm_password-2-1"><h3 class="password1">Confirm Password</h3></div>
                            <div class="confirm_password-2-2">
                                <input class="confirm_password-2-2input" style="border: solid 1px red;" type="password" name="password1"/>
                            </div>
                        </div>
                        <div class="confirm_password-3"></div>
                    </div>
                    <div class="row8"> 
                        <div class="row8-1"> </div>
                        <div class="row8-2">
                            <input type="submit" value="Create Account">
                        </div>
                
                        <div class="row8-3"></div>
                    </div>
             
                    <div class="row9"> 
                        <a href="web_login.php"><h3 class="new_user_login" style="color:#D76368">Existing user,Login</h3></a>
                    </div>
                    <div class="row10"> 
                    </div>
                </form>
            </div>
          
        </div> 
        <div class="row11"> 
            <div class="row11-1"> </div>
            <div class="row11-2">
                <div class="row11-2-1"> 
                    <div class="row11-2-1-connect">Connect with us at</div>
                </div>
                <div class="row11-2-2">
                    <a href="https://www.youtube.com/"><div class="fa fa-youtube-play"></div></a>
                    <a href="https://www.facebook.com/"> <div class="fa fa-facebook"></div></a>
                </div>
            </div>
            <div class="row11-3"> </div>
            <div class="row11-4">
                <div class="row11-4-1"> 
                    <div class="row11-4-1-questions"><p class="questions">For any questions/doubts,write us at-</p></div>
                </div>
                <div class="row11-4-2"> 
                    <div class="row11-4-2-questions"><p class="queries">queries@ungineering.com</p></div>
                </div>
            </div>
            <div class="row11-5"> </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script> 
    </body>
</html>
