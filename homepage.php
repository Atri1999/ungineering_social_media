<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="css/homepage.css"/>
        <link rel="stylesheet" href="css/hp_login.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <div class="header">
            <div class="logo">
                <a href="http://127.0.0.1/social_media/homepage.php" class="aaaa" target="_blank">
                <div>
                    <div class="c1"><img src="img/ungineering_logo.svg" class="imag"/></div>
                    <div class="c2">
                        <div class="r1"><span class="hghlgh">un</span>gineering</div>
                        <div class="r2">A <span class="hghlgh">bit</span> of knowledge is good, a <span class="hghlgh">byte</span> is better</div>
                    </div>
                </div></a>
            </div>
            <div class="hbutton">
                <?php
                    session_start();
                    if(isset($_SESSION['id']) && $_SESSION['id']){
                    ?>
                <span class="dash_brd">My Dashboard</span>
                <button class="first" >Logout</button>
                    <?php
                    } else {
                    ?>
                <a href="web_login.php" ><button class="first">Log in</button></a>
                <a href="web_registration.php"><button class="second">New User</button></a>
                    <?php
                    }
                    ?>           
            </div>
        </div>
        
        
        
        <div class="status">
            <div class="st_content">
            <?php
                session_start();
                if(isset($_SESSION['id']) && $_SESSION['id']){
                ?>
                <div class="put_status">
                    <div class="instr"> Write Something here</div>
                    <div>
                        <form method="post" action="status.php">
                            <input class="space" name="status" type="text"/><br>
                            <input class="smt" type="submit" name="submit" value="Post"/>
                        </form>                        
                    </div>
                    
                </div> 
                <?php
                }
                ?> 
                <div class="row">
                    <div class="r_nm" >Name</div>
                    <div class="r_cnt">Hello,deletime atuy jksd jdfkad silinnd sljnsdns ksdsdndn sodncm KWJSHADA KHEJ hwdlsjldfc ljdfcsskfcs bb edjjhjjss jhjshhfshfdks hfjhjshfjdhfdjh
                    ddhlahdaj jhddjsjfhdsjfb  jdfdnf sfsdj dsjhdfncnsfdscn vhf hgudhf hdasdhaj dadhxbjshd jdha hjdhfjsfhdj jhjhdjxfs jfhjshfsj higHSDAJDA JJJDX JJjdfijdsfs
                    </div>
                    <div class="r_t">Time:Date</div>
                </div>
                <div class="row">
                    <div class="r_nm" >Name</div>
                    <div class="r_cnt">Hello,deletime atuy jksd jdfkad silinnd sljnsdns ksdsdndn sodncm KWJSHADA KHEJ hwdlsjldfc ljdfcsskfcs bb edjjhjjss jhjshhfshfdks hfjhjshfjdhfdjh
                    ddhlahdaj jhddjsjfhdsjfb  jdfdnf sfsdj dsjhdfncnsfdscn vhf hgudhf hdasdhaj dadhxbjshd jdha hjdhfjsfhdj jhjhdjxfs jfhjshfsj higHSDAJDA JJJDX JJjdfijdsfs 
                    </div>
                    <div class="r_t">Time:Date</div>
                </div>
                <div class="row">
                    <div class="r_nm" >Name</div>
                    <div class="r_cnt">Hello,deletime atuy jksd jdfkad silinnd sljnsdns ksdsdndn sodncm KWJSHADA KHEJ hwdlsjldfc ljdfcsskfcs bb edjjhjjss jhjshhfshfdks hfjhjshfjdhfdjh
                    ddhlahdaj jhddjsjfhdsjfb  jdfdnf sfsdj dsjhdfncnsfdscn vhf hgudhf hdasdhaj dadhxbjshd jdha hjdhfjsfhdj jhjhdjxfs jfhjshfsj higHSDAJDA JJJDX JJjdfijdsfs
                    </div>
                    <div class="r_t">Time:Date</div>
                </div>
                <div class="row">
                    <div class="r_nm" >Name</div>
                    <div class="r_cnt">Hello,deletime atuy jksd jdfkad silinnd sljnsdns ksdsdndn sodncm KWJSHADA KHEJ hwdlsjldfc ljdfcsskfcs bb edjjhjjss jhjshhfshfdks hfjhjshfjdhfdjh
                    ddhlahdaj jhddjsjfhdsjfb  jdfdnf sfsdj dsjhdfncnsfdscn vhf hgudhf hdasdhaj dadhxbjshd jdha hjdhfjsfhdj jhjhdjxfs jfhjshfsj higHSDAJDA JJJDX JJjdfijdsfs 
                    </div>
                    <div class="r_t">Time:Date</div>
                </div>
                <div class="row">
                    <div class="r_nm" >Name</div>
                    <div class="r_cnt">Hello,deletime atuy jksd jdfkad silinnd sljnsdns ksdsdndn sodncm KWJSHADA KHEJ hwdlsjldfc ljdfcsskfcs bb edjjhjjss jhjshhfshfdks hfjhjshfjdhfdjh
                    ddhlahdaj jhddjsjfhdsjfb  jdfdnf sfsdj dsjhdfncnsfdscn vhf hgudhf hdasdhaj dadhxbjshd jdha hjdhfjsfhdj jhjhdjxfs jfhjshfsj higHSDAJDA JJJDX JJjdfijdsfs 
                    </div>
                    <div class="r_t">Time:Date</div>
                </div>                
            </div>
        </div>
        
        
        
        <div class="footer">
            <div class="col fs_1">
                <div class="div_1 col_1">Connect with us at</div>
                <div class="div_2 col_1 imag">
                        <a href="www.youtube.com"><img src="img/yt.png"/></a>
                        <a herf="www.facebook.com"><img src="img/fb.png"/></a>
                </div>    
            </div>
            <div class="col fs_2">
                <div class="div_1 col_2">For any questions/ doubts, write us at-</div>
                <div class="div_2 col_2">queries@ungineering.com</div> 
            </div>
        </div>
    </body>
</html>            
            
            
        
            
