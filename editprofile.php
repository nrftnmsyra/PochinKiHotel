<?php
session_start();
include ('checkuser.php');
$username = $_SESSION['username'];

include ("connection.php");

    $fullname = $_POST["fullname"];
    $phoneNo = $_POST["phoneNo"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    
    $username = mysqli_real_escape_string($connection, $username);
    $fullname = mysqli_real_escape_string($connection, $fullname);
    $phoneNo = mysqli_real_escape_string($connection, $phoneNo);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    $confirmpassword = mysqli_real_escape_string($connection, $confirmpassword);
    
    $query = "UPDATE user_data SET fullname='$fullname', phoneNo='$phoneNo', email='$email', password='$password', 
    confirmpassword='$confirmpassword' WHERE username='$username'";
    $result= mysqli_query($connection, $query);

if($result==TRUE)
     echo "<script>alert('Your profile has been updated');
            window.location='home.php'</script>";
else
    echo "<script>alert('Error. Profile update unsuccessful');
            window.location='editprofilepage.php'</script>";
    mysqli_close($connection);
   
?>