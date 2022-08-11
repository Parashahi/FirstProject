<?php
  session_start();
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phonenum'];
  $class = $_POST['class'];
  $time = $_POST['time'];

  if (!empty($fname) || !empty($lname) || !empty($phone) || !empty($class) || !empty($time)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "gymwebsite";
  
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
      die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    } else {
      $SELECT = "SELECT id from customer where id = ? Limit 1";
      $INSERT = "INSERT Into classes (firstname, lastname, phonenum, class, Times) values(?, ?, ?, ?, ?)";

      //Prepare statement
      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("i",$id);
      $stmt->execute();
      $stmt->bind_result($id);
      $stmt->store_result();
      $rnum = $stmt->num_rows;

      if ($rnum==0) {
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssss", $fname , $lname, $phone, $class, $time);
        $stmt->execute();
        $_SESSION['status'] = "<h1><center>Congratulation LOGIN Successfull...</center></h1>";

            header("Location: home.php"); 
      } else{
        echo "<h1>Some has already registered with this number.</h1>";
      }
      $stmt->close();
      $conn->close();
    }
  } else {
    echo "All field are required";
    header("Location: classes.php"); 
  }

?>