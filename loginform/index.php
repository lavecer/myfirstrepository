<?php  session_start();  
    if(!isset($_SESSION['use']))
    {
    header("Location:auth.php");  
    }
?>

<html>
<head>

</head>

<body style="background-image: url('assets/img/c.jpg');">
<center><marquee direction = "left" behavior="scroll" direction="left" scrollamount="20" ><h1 style="color:red;">WELCOME TO THE BORDERLAND YOU LOGIN SUCCESSFULY!!!</h1></marquee> 
</center>

<center><h1 style="color:red;">Click here to <a href="off.php" tite="off">Logout.</a></h1></center>
</body>
</html>


