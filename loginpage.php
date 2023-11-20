<?php
session_start();
if($_SESSION){
        header("Location: home.php");
    }
include('login.php');
?>

<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PochinKi Hotel & Resort</title>
 <link rel = "icon" href = "logo2.png" type = "image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="login.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  <header> 
	<img class="logo" src="logo.png">
    <h4 class="logo" contenteditable="true">PochinKi Hotel & Resort</h4>
<nav>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="loginpage.php">LOGIN</a></li>
        <li> <a href="signup.html">SIGN UP</a></li>
      </ul>
    </nav>
  </header>
<!-- Login Form -->
<section class="Login">
    <div class="loginForm">
      <h1>Login</h1>
      <form action="" method="post" autocomplete="off">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.html">Signup</a>
        </div>
      </form>
    </div>
</section>
  <!-- Copyrights Section -->
  <div class="copyright">&copy; 2001 - <strong>PochinKi Hotel & Resort</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>