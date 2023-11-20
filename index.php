<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PochinKi Hotel & Resort</title>
 <link rel = "icon" href = "logo2.png" type = "image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="index.css" rel="stylesheet" type="text/css">
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
  <!-- Slideshow Section -->
  <section class="slideshow" id="slideshow">
   <div class="slideshow-container">

<div class="mySlides fade">
  <img src="pic1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="pic2.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="pic3.png" style="width:100%">
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>

  <!-- Info Section -->
  <section class="Info">
	  <h2 class="infoText">Stay Your Way at PochinKi</h2>
	  <div class="info_row">
		  <div class="info_column">
			<h3 class="infoTitle">an unforgettable night in awaits</h3>
			<p class="title_description">Staying in is the new going out with PochinKi Night In. Enjoy signature culinary- or wellbeing-themed experiences, now at over 120 participating destinations through September 12, 2021.</p>
		  </div>
	  <div class="info_column">
			<h3 class="infoTitle">wellness days sale</h3>
			<p class="title_description">Honor your wellbeing at PochinKi Hotels & Resorts with a MYR250 nightly resort credit per person.</p>
		  </div>
	  <div class="info_column">
			<h3 class="infoTitle">feel at home at PochinKi house</h3>
			<p class="title_description">PochinKi hotels offer apartment-style suites with full kitchens, living areas, and more, including a 24-hour gym, and in-house laundry.</p>
		  </div>
	  </div>
  </section>
	  
  </section>
  <!-- Hotel Dislay Section -->
  <section class="HotelDisplaySection" id="HotelDisplaySection">
	<div class="row">
		<div class="column">
    	<div class="HotelDisplay">
   		<img src="hotel1.png" alt="Avatar" class="image">
   		<div class="overlay">
    	<div class="text">PULAU LANGKAWI, KEDAH</div>
			</div></div></div>
	<div class="column">
		<div class="HotelDisplay">
		<img src="hotel2.png" alt="Avatar" class="image">
		<div class="overlay">
		<div class="text">CHERATING, PAHANG</div>
			</div></div></div>
	<div class="column">
		<div class="HotelDisplay">
		<img src="hotel3.png" alt="Avatar" class="image">
		<div class="overlay">
		<div class="text">KARAMBUNAI, SABAH</div>
			</div></div></div>
	<div class="column">
		<div class="HotelDisplay">
		<img src="hotel4.png" alt="Avatar" class="image">
		<div class="overlay">
		<div class="text">PULAU PANGKOR, PERAK</div>
			</div></div></div>
	<div class="column">
		<div class="HotelDisplay">
		<img src="hotel5.png" alt="Avatar" class="image">
		<div class="overlay">
		<div class="text">DANGA BAY, JOHOR</div>
			</div></div></div>
	  </div>
  </section>
  <!-- Footer Section -->
  <section class="footer">
	<a href="loginpage.php"><button type="button">BOOK NOW!</button></a>
	<div class="rowContact">
	<div class="columnContact">
	<p class="contactUs">How can we help you ?</p>
	<p class="phoneNo">1-800-POCHINKI</p>
	<p class="smallText">call us, it's toll-free.</p>
		</div>
	<div class="columnContact">
		<div class="icon">
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-instagram"></a></div>
		</div></div>
	  
  </section>
  <!-- Copyrights Section -->
  <div class="copyright">&copy; 2001 - <strong>PochinKi Hotel & Resort</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
