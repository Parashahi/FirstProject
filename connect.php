<?php
  include('config.php');  

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $membership = $_POST['mem'];
  $phonenum = $_POST['phonenum'];

	if (!empty($fname) || !empty($lname) || !empty($email) || !empty($password) || !empty($address) || !empty($membership) || !empty($phonenum) ) 
  {
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "gymwebsite";
	
		// code...
		//create connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

		if (mysqli_connect_error()) {
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
		} else {
			$SELECT = "SELECT phonenum from customer where phonenum = ? Limit 1";
			$INSERT = "INSERT Into customer (fname, lname, email, password, address, membership, phonenum) values(?, ?, ?, ?, ?, ?, ?)";
			//Prepare statement
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("i",$phonenum);
			$stmt->execute();
			$stmt->bind_result($phonenum);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if ($rnum==0) {
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssssssi", $fname , $lname, $email, $password, $address, $membership, $phonenum);
				$stmt->execute();

        header("location:login.php");
				echo "<h1>New record inserted successfully...</h1>";
			} else{
				echo '<script>alert("Number already exists")</script>';
			}
			$stmt->close();
			$conn->close();
		}
	} else {
		echo "All field are required";
	}

?>