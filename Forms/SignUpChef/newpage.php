<?php  

$con = mysql_connect("localhost","root","") or die("Connection Error");
mysql_select_db("wp") or die("DB Selection Error");

if(isset($_POST['sub'])){



$name = $_POST['namesignup'];
$uname = $_POST['usernamesignup'];
$email = $_POST['emailsignup'];
$pass = $_POST['passwordsignup'];
$confirmpass = $_POST['passwordsignup_confirm'];
$contact = $_POST['usercontact'];
$address = $_POST['useraddress'];
$location = $_POST['userarea'];
$info = $_POST['userinfo'];



$sql="insert into signupchef values('$name','$uname','$email','$pass','$confirmpass','$contact','$address','$location','$info') ";
mysql_query($sql);

echo $name.$uname;



}

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">

            <header>
                
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                
                    <div id="wrapper">
                        

                        <div id="login" class="animate form">
                            <form  method="POST" autocomplete="on"> 
                                <h1> Sign up as Chef/Cook</h1> 
                                <p> 
                                    <label for="namesignup" class="name" data-icon="u">Your Name</label>
                                    <input id="namesignup" name="namesignup" required="required" type="text" placeholder="eg. Cristiano Ronaldo" />
                                </p>

                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="eg. mysuperusername690" />
                                </p>


                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your Email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="eg. mysupermail@mail.com"/> 
                                </p>

                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your Password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>

                                <p> 
                                    <label for="usercontact" class="contact" data-icon="u">Your Contact Number</label>
                                    <input id="usercontact" name="usercontact" required="required" type="number" placeholder="eg. 0123456789" />
                                </p>

                                <p> 
                                    <label for="useraddress" class="address" data-icon="u">Your Address</label>
                                    <input id="useraddress" name="useraddress" required="required" type="text" placeholder="eg. Banglow # 2, Street-14, Clifton-Karachi" />
                                </p>

                                <p> 
                                    <label for="userarea" class="address" data-icon="u">Your Location of Making Food</label>
                                    <input id="userarea" name="userarea" required="required" type="text" placeholder="eg. Gulshan" />
                                </p>


                                <p> 
                                    <label for="userinfo" class="info" data-icon="u">Tell us something about you</label>
                                    <input id="userinfo" name="userinfo" required="required" type="text" placeholder="eg. Your experience of cooking and/or in which food you're expert" />
                                </p>





                                <p class="signin button"> 
									<input type="submit" name="sub" value="Sign up"/> 
								</p>
                            
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>