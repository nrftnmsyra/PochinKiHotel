<?php   
session_start();  
if(!isset($_SESSION["username"])){  
    header("location:loginpage.php");  
    
} else {  
  $username = $_SESSION['username'];
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
<link href="contact.css" rel="stylesheet" type="text/css">
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
    <li><a href="home.php">HOME</a></li>
    <li><a href="bookingPage.php">FIND A ROOM</a></li>
    <li><a href="aboutPage.php">ABOUT US</a></li>
    <li> <a href="logout.php">LOG OUT</a></li>
    </ul>
    </nav>
  </header>
  <!-- Slideshow Section -->
  <section class="slideshow" id="contact">
  <div class="contactForm">
<h1>Contact Us</h1>
        <table style="width:100%" class="contactTbl">
        <form action="bookingPage.php" method="post">
            <tr>
              <th><label for="name"> Name</label></th>
              <td>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
              </td>
              </tr>
            <tr>
              <th><label for="email">Email</label></th>
              <td>
              <input type="text" id="email" name="email" placeholder="Your Email">
              </td>
            </tr>
            <tr>
                <th><label for="sub-of-msg">Subject of Message</label></th>
                <td>
                <select id="sub-of-msg" name="sub-of-msg">
      <option value="australia">Compliment</option>
      <option value="canada">Complaint</option>
      <option value="usa">Suggestion</option>
    </select>
                </td>
            </tr>
            <tr>
                <th><label for="message">Message</label></th>
                <td><textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea></td>
            </tr>
            
          </table><br><br>
          <input type="submit"  style='display:flex;' class="buttonP" value="Submit">
          </form>
</div>
</section>
  <!-- Copyrights Section -->
  <div class="copyright">&copy; 2001 - <strong>PochinKi Hotel & Resort</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
<?php
}
?>