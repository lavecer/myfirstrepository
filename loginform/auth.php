<?php


#===================[If no database]==========================#
include 'main/config.php';

session_start(); 
if(isset($_SESSION['use']))  
 {
    header("Location:index.php"); 
 }
if(isset($_POST['login']))
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
      if($user == "$username" && $pass == "$password")
         {                                   
          $_SESSION['use']=$user;
         echo '<script type="text/javascript"> window.open("index.php","_self");</script> ';

        }
        else
        {
            echo "<h2 style='color:#fff;text-align:center'>Invalid Username or Password</h2>";        
        }
}

?>

<!-- #===================================[Design of login]=================================#-->

<!doctype html>
<html>
<head>
    <link rel="icon" href="ecerlav.jpg" type="image/icon type">
    <!-- Basic Site Informations -->
    <title>𝗢𝗢𝗣𝗦 𝗦𝗢𝗥𝗥𝗬!!!</title>
    <meta name="description" content="LOGIN FORM">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/img/icon.png">
    <!-- Assets -->
    <link href="assets/css/links.css" rel="stylesheet"/>
    <link href="assets/css/style2.css" rel="stylesheet"/>
</head>
<style>
body{
    background: url(assets/img/c.jpg);
    no-repeat center center fixed; 
    webkit-background-size: cover;
    moz-background-size: cover;
    o-background-size: cover;
    background-size: cover;
}
</style>
    <!-- Contents -->
    <body id="body">
    <div class="container mb-5 mt-5" id="container">
	<div style="margin-top: 100px;">
	<div class="col-md-12">
	<div id="content">
	<div class="form-group"><div id="card">
	<div class="card" style="width:400px;background:#212121">
    <div class="card-body">
    <center><img class="rounded-circle" src="assets/img/logo.jpg" width="200" height="200"></center><br><br><br>
    <h4 class="card-title" style="text-align:center;color:#fff">LOGIN FORM</h4>
    <p class="card-title" style="text-align:center;color:#fff">You're current session is locked.</p>
    &nbsp;
    <form class="form-signin" role="form" method="POST">
    <input type="text" name="user" class="form-control form__field form__label" id="user" placeholder="Username" required autofocus autocomplete="off">
    <br>
    <form class="form-signin" role="form" method="POST">
    <input type="password" name="pass" class="form-control form__field form__label" id="pass" placeholder="Password" required autofocus autocomplete="off">
    <br>
    <button type="SUBMIT" name="login" value="login" class="btn btn-primary btn-block mb-4" style="width:100%">Login</button>
    </form>

    </form>
    </div>
    </div>
    </div>
    </div>
	</div>
	</div>
    <br>


</body>
</html>