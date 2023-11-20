<?php
include "connection.php";
if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];    
  
    $query=mysqli_query($connection, "SELECT * FROM user_data WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['username']=$user;  
  
    /* Redirect browser */  
    header("Location: home.php");  
    }  
    } else {  
        echo "<script>alert('Invalid username or password!');
            window.location='loginpage.php'</script>"; 
    }  
  
} else {  
    echo "<script>alert('All fields are required!');
            window.location='loginpage.php'</script>"; 
}  
}  
?>  