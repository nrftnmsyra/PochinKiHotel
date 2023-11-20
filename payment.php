<?php
include ('connection.php');
$total = $_POST['totalPayment'];
session_start();
    $username = $_SESSION['username'];
    $roomID = $_POST["roomID"];
    $timeBook = $_POST["timeBook"];
    $dateBook = $_POST["dateBook"];
    $breakfast = $_POST["breakfast"];
    $dinner = $_POST["dinner"];
    $duration = $_POST["duration"];

    $username = mysqli_real_escape_string($connection, $username);
    $roomID = mysqli_real_escape_string($connection, $roomID);
    $timeBook = mysqli_real_escape_string($connection, $timeBook);
    $dateBook = mysqli_real_escape_string($connection, $dateBook);
    $breakfast = mysqli_real_escape_string($connection, $breakfast);
    $dinner = mysqli_real_escape_string($connection, $dinner);

    $datePayment = date("Y/m/d");

    $sql = "INSERT INTO invoice_data (username, totalPayment, datePayment, dateBook, timeBook) VALUES ('$username','$total','$datePayment','$dateBook','$timeBook')";
    $result = mysqli_query($connection, $sql);
    
    $sql = "UPDATE booking_data SET roomID = '$roomID', breakfastPax = '$breakfast', dinnerPax ='$dinner' WHERE username = '$username' AND timebook = '$timeBook' AND datebook = '$dateBook' ";
    $result = mysqli_query($connection, $sql);
    if($result)
    {
        echo "<script>alert('Room $roomID have been chosen')</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Room Payment</title>
    <link rel = "icon" href = "logo2.png" type = "image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <link rel="stylesheet" href="payment.css">
</head>
<body>

<h2>Room Payment</h2>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form id="validate" action="receipt.php" method="post">
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Information</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="fullname" placeholder="Nurfatin Masyura" required>
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="nurfatinmasyura@gmail.com" required>
                        <label for="adr"><i class="fa fa-phone"></i> Phone Number</label>
                        <input type="text" id="adr" name="address" placeholder="0123456789" required>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>

                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="Nurfatin Masyura"required>
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"required>
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September"required>
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2021"required>
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352"required>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <input type="hidden" id="username" value="<?php echo $username; ?>" name="username">
                <input type="hidden" id="timeBook" value="<?php echo $timeBook; ?>" name="timeBook">
                <input type="hidden" id="dateBook" value="<?php echo $dateBook; ?>" name="dateBook">
                <input type="hidden" id="duration" value="<?php echo $duration; ?>" name="duration">
                <input id="btn1" name="submit" type="submit" value="Continue to checkout" class="btn">
                <input id="btn2" onclick="history.back()" type="button" value="Cancel" class="btn">
            </form>
        </div>
    </div>
    <div class="col-25">
        <div class="container">
            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>
            <p>Total <span class="price" style="color:black"><b>RM<?php echo $total; ?></b></span></p>
        </div>
    </div>
</div>
<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            fullname: {
                required: true,
            },
            email: {
                required: true,
            },
            address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            zip: {
                required: true,
            },
            cardname: {
                required: true,
            },
            cardnumber: {
                required: true,
            },
            expmonth: {
                required: true,
            },
            expyear: {
                required: true,
            },
            cvv: {
                required: true,
            },
           
        },
        messages: {
            fullname:"Please input full name*",
            email:"Please input email*",
            city:"Please input city*",
            address:"Please input address*",
            state:"Please input state*",
            zip:"Please input address*",
            cardname:"Please input card name*",
            cardnumber:"Please input card number*",
            expmonth:"Please input exp month*",
            expyear:"Please input exp year*",
            cvv:"Please input cvv*",
        },
    });
</script>
</body>
</html>
