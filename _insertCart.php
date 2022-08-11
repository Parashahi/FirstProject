<?php
    session_start();
    include('config.php');

    $name = $_POST['hidden_name'];
    $price = $_POST['hidden_price'];
    $qty = $_POST['quantity'];
    $Size = $_POST['size'];

    $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name = '$name'");

    if(mysqli_num_rows($select_cart) > 0)
    {
      $message[] = 'product already added to cart';
    }
    else
    {
      $insert_product = mysqli_query($con, "INSERT INTO `cart`(name, price, quantity, size) VALUES('$name', '$price', '$qty', '$Size')");
      $message[] = 'product added to cart succesfully';
    }

    header('location:cart.php');
?>