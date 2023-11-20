<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PochinKi Hotel & Resort</title>
 <link rel = "icon" href = "logo2.png" type = "image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="booking.css" rel="stylesheet" type="text/css">
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
        <li><a href="contactPage.php">CONTACT US</a></li>
        <li><a href="aboutPage.php">ABOUT US</a></li>
        <li> <a href="logout.php">LOG OUT</a></li>
      </ul>
    </nav>
  </header>

<!-- Profile Section -->
<section class="bookingSection">
<?php
    include ("connection.php");
    if(isset($_POST['submit']))
    {
    session_start();
    $username = $_SESSION['username'];
    $timeBook = $_POST["timeBook"];
    $dateBook = $_POST["dateBook"];
    $location = $_POST["location"];
    $dateFrom = $_POST["dateFrom"];
    $timeFrom = $_POST["timeFrom"];
    $dateTo = $_POST["dateTo"];
    $timeTo = $_POST["timeTo"];
    $numPeople = $_POST["numPeople"];
    
    $username = mysqli_real_escape_string($connection, $username);
    $location = mysqli_real_escape_string($connection, $location);
    $dateFrom = mysqli_real_escape_string($connection, $dateFrom);
    $timeFrom = mysqli_real_escape_string($connection, $timeFrom);
    $dateTo = mysqli_real_escape_string($connection, $dateTo);
    $timeTo = mysqli_real_escape_string($connection,  $timeTo);
    $numPeople = mysqli_real_escape_string($connection,  $numPeople);

    
    $sql = "INSERT INTO booking_data (timeBook, dateBook, username, location, dateFrom, timeFrom, dateTo, timeTo, numPeople) VALUES ('$timeBook','$dateBook','$username','$location','$dateFrom','$timeFrom','$dateTo','$timeTo','$numPeople')";
    $result = mysqli_query($connection, $sql);
    if($result)
    {
        echo "<script>alert('Your reservation is succesful. Please choose your room')</script>";
    }

      echo '
	    <style> body {
        overflow: visible;
      } </style>
      <h2>Choose Your Room</h2>
      ';
    
      $sql = "SELECT * FROM roomtype_data";
      $result = mysqli_query($connection, $sql);
      $table = mysqli_fetch_all($result,MYSQLI_ASSOC);
  
        foreach($table as $row)
        {
 ?>
          <form action="roomBookPage.php" id="roomSuggestion" method="post">
          <table id="room">
          <tr>
          <td><?= $row['roomID'] ?></td>
          <input type="hidden" name="roomID" value="<?= $row['roomID'] ?>">
          <td><img style="width:300px; height:200px; border-radius:10px" src="image/<?= $row['roomImage'] ?>"></td>
          <td><?= $row['roomType'] ?></td>
          <td><?= $row['roomPackage'] ?></td>
          <td style="text-align: justify;"><?= $row['roomDesc'] ?></td>
          <td><?= $row['roomPrice'] ?></td>
          <td style="text-align: center;"><input id="btnbook" type="submit" name="btnbook" value="BOOK"></td>
          </tr>
          </table>
          <input type="hidden" id="timeBook" value="<?php echo $timeBook; ?>" name="timeBook">
          <input type="hidden" id="dateBook" value="<?php echo $dateBook; ?>" name="dateBook">
          </form>
          <br><br>
<?php
        }
        mysqli_close ($connection);
  }
?>
    </section>
  <!-- Copyrights Section -->
  <div class="copyright">&copy; 2001 - <strong>PochinKi Hotel & Resort</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>