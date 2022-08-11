<?php

session_start();

 if(isset($_POST['login']))
 {
    $conn = mysqli_connect("localhost", "root", "", "gymwebsite");
          
        
    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }  
    
    include('config.php'); 
    $con = mysqli_connect("localhost", "root", "", "gymwebsite");
    $sql = "SELECT * FROM 'admin'";
    $row = mysqli_query($con, $sql);

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    if($email == "admin777@gmail.com" && $password == "admin123")
    {
        echo '<script>alert("Log in successful!")</script>'; 
        header("Location: dashboard.php");    
    } 
    else{
        echo '<script>alert("Enter Correct info")</script>'; 
        header("Location: adminlog.php");   
    }
}


if (isset($_POST['logout-btn'])) 
{
    session_destroy();
    unset($_SESSION['']);
    header("Location: adminlog.php");
}
?>