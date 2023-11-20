<?php
include ("connection.php");
    $username = $_POST["username"];
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
    
    $sql = "SELECT username FROM user_data WHERE username='$username'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1)
    {
        echo "<script>alert('Sorry, This Phone Number already registered.');
        window.location='signup.html'</script>";
    }
    else
    {
        $query = mysqli_query($connection, "INSERT INTO user_data (username,fullname, phoneNo, email, password, 
        confirmpassword)
        VALUES ('$username','$fullname','$phoneNo','$email', '$password', '$confirmpassword')");
        if($query)
        {
            echo "<script>alert('Thank You. You have been registered.');
            window.location='index.php'</script>";
        }
    }
?>