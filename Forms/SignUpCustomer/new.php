<?php  

$con = mysql_connect("localhost","root","") or die("Connection Error");
mysql_select_db("wp") or die("DB Selection Error");

if(isset($_POST['sub'])){



$name = $_POST['namesignup'];
$uname = $_POST['usernamesignup'];
$email = $_POST['emailsignup'];
$pass = $_POST['passwordsignup'];
$confirmpass = $_POST['passwordsignup_confirm'];


$sql="insert into signupcustomer values('$name','$uname','$email','$pass','$confirmpass') ";
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
                    <div id="wrapper">
                       

                        <div id="login" class="animate form">
                            <form  method="POST" autocomplete="on"> 
                                <h1> Sign up as a Customer</h1> 
                                
                                <p> 
                                    <label for="namesignup" class="name" data-icon="u">Your Name</label>
                                    <input id="namesignup" name="namesignup" required="required" type="text" placeholder="Cristiano Ronaldo" />
                                </p>


                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your Email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
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