<?php
include ('connection.php'); 
$roomID = $_POST['roomID'];
$timeBook = $_POST['timeBook'];
$dateBook = $_POST['dateBook'];
$duration = $_POST['duration'];

$sql = "SELECT * FROM roomtype_data WHERE roomID = '$roomID'";
$result = mysqli_query($connection, $sql) or die("Query error : " . mysqli_error($connection));
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
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
<link href="roomBookPage.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
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
         <li><a href="bookingPage.php">BACK</a></li>
        <li><a href="home.php">HOME</a></li>
        <li> <a href="logout.php">LOG OUT</a></li>
      </ul>
    </nav>
  </header>
  <!-- Slideshow Section -->
  <section class="roomImage" id="roomImage">
   <div class="pic-container">
   <img style="width:100%;" src="image/<?= $row['roomImage'] ?>">
</div>
</section>

  <!-- Info Section -->
              <section class="Info" id="info">
              <div class = "text1">
                        <h3><?= $row['roomPackage'] ?></h3>
                        </div>
                        <div class = "text3">
                            <p><?= $row['roomDesc'] ?></p>
                        </div>
                        <div class = "text2">
                        <h5><u>Bathroom</u></h5>
                        </div>
                        <div class = "text3">
                            <p><?= $row['bathroomDesc'] ?></p>
                        </div>
                        <div class = "text2">
                        <h5><u>Room Features</u></h5>
                        </div>
                        <div class = "text3">
                            <p><?= $row['featureDesc'] ?></p>
                        </div>
                        <div class = "text2">
                        <h5><u>Entertainment</u></h5>
                        </div>
                        <div class = "text3">
                            <p><?= $row['entDesc'] ?></p>
                        </div>
                        <div class = "text2">
                        <h5><u>Internet Access</u></h5>
                        </div>
                        <div class = "text3">
                            <p><?= $row['internetDesc'] ?></p>
                        </div>
                        <div class = "text1">
                        <p><?= $row['roomPrice'] ?><br></p>
                        <input type="hidden" id="roomPrice" value="<?= $row['price'] ?>">
                        <input type="hidden" id="duration" value="<?= $duration ?>">
                    </div>
  </section>
  <!-- Adds-on Section -->
  <section class="addsOn">
  <br>
    <div class="addsOnForm">
      <h1>Adds-On Breakfast or Dinner</h1>
      <form action="payment.php" method="post">
        <div class="txt_field">
          <input type="number" name="breakfast" value="0" id="breakfast" required>
          <span></span>
          <label>Breakfast (RM30 per pax)</label>
        </div>
        <div class="txt_field">
          <input type="number" name="dinner" value="0" id="dinner" required>
          <span></span>
          <label>Dinner (RM50 per pax)</label>
        </div>
    </div>
  </section>
  <section class="total">
  <br>
    <h1 id="totalText">Total : </h1><label id="rm">RM</label><input id="result" type="text" name="totalPayment" value="<?= number_format((float)$row['price']*$duration, 2, '.', '') ?>">
    <input type="hidden" name="roomID" value="<?= $roomID ?>">
    <input type="hidden" name="timeBook" value="<?= $timeBook ?>">
    <input type="hidden" name="dateBook" value="<?= $dateBook ?>">
    <input type="hidden" name="duration" value="<?= $duration ?>">
  <button name="submit" type="submit">CHECKOUT</button></a></form> 
  </section>
  <!-- Copyrights Section -->
  <div class="copyright">&copy; 2001 - <strong>PochinKi Hotel & Resort</strong></div>
</div>
<!-- Main Container Ends -->
</body>
<script>
  $(document).ready(function() {
            $('input').keyup(function(ev) { 
          $("#roomPrice").val()
         var breakfast = $("#breakfast").val()*1;    
         var dinner= $("#dinner").val()*1;
         var room=$("#roomPrice").val()*1;
         var duration=$("#duration").val()*1
         var totalBreakfast = breakfast * 30;
         var totalDinner = dinner * 50;
         var totalRoom = room * duration;
         var total = totalRoom+totalBreakfast+totalDinner;   
         var divobj = document.getElementById('result');
                divobj.value = (total.toFixed(2));
            });
        });
  </script>
</html>
<?php
}
}
mysqli_close ($connection);
?>