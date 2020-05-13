<?php
include('session.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: englishIndex.php"); // Redirecting To Profile home Page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
    <link rel = "stylesheet" type = "text/css" href = "homeEnglish.css"/>
    <link rel = "stylesheet" type = "text/css" href = "login.css"/>
    <script type="text/javascript" src="javascriptLogin.js"> </script>
</head>
<body>
    <div class ="pagetitle"> 
        <nav>
           <a href="englishIndex.php"> <h1>LEARN ENGLISH</h1></a>    
            <ul>
                <li><a href="englishIndex.php">Home</a></li>
                <li><a href="tenses.php">English Tenses </a></li> 
                   
            </ul>
         </nav>   
</div>

</div>

<center></center><div class="background"></div>

	<div class="title">
  <span class="loginTitle">Login here</span>

</div>
<form class="box2" name="login" method="post" onsubmit = "return (validateData());">
<h1>Login</h1>
<input type="text" name="txtUsername" placeholder="Username" required>
<input type="password" name="txtPassword" placeholder="Password" required>

<input type="submit" name="btnSubmit" value="Login">
<!--<span class="error">error</span>-->
</form>
<!--Footer-->
<footer class="footer3" >
    <br>
        <p>Copyright &copy 2020 Learn English. All rights reserved.</font></p>
    <br>
</footer>
</body>
</html>