<?php

session_start();
include('config.php'); 



if(isset($_POST['update_user']))
{

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $membership = $_POST['mem'];
    $phonenum = $_POST['phonenum'];
    $status= $_POST['sta'];
    $userid = $_POST['user_id'];

    $query = "UPDATE customer 
              SET fname='$fname', lname='$lname', email='$email', address='$address', membership='$membership', phonenum='$phonenum', Status='$status'
              where id='$userid'";
    $res = mysqli_query($con, $query);

    if ($res) {
        $_SESSION['message'] = "Updated Successfully";
        header('Location: dashboard.php');
        exit(0);
    }
}

if(isset($_POST['update_class']))
{

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phonenum = $_POST['phonenum'];
    $class = $_POST['class'];
    $time = $_POST['time'];
    $status= $_POST['status'];
    $userid = $_POST['id'];

    $query = "UPDATE classes 
              SET firstname='$fname', lastname='$lname', class='$class', Times='$time', phonenum='$phonenum', status='$status'
              where id='$userid'";
    $res = mysqli_query($con, $query);

    if ($res) {
        $_SESSION['message'] = "Updated Successfully";
        header('Location: classadmin.php');
        exit(0);
    }
}

if(isset($_POST['update_product']))
{

    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_quantity = $_POST['item_quantity'];
    $item_id = $_POST['itemid'];

    $query = "UPDATE product 
              SET item_name='$item_name', item_price='$item_price', item_quantity='$item_quantity'
              where item_id='$item_id'";
    $res = mysqli_query($con, $query);

    if ($res) {
        $_SESSION['message'] = "Updated Successfully";
        header('Location: products.php');
        exit(0);
    }
}

if (isset($_POST['add_product'])) 
{
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_quantity = $_POST['item_quantity'];
    $item_details = $_POST['item_details'];
    $item_img = $_POST['item_image'];

    $query = "INSERT INTO product (item_name, item_price, item_quantity, item_details, item_image) values('$item_name','$item_price','$item_quantity','$item_details','$item_img')";
    $res = mysqli_query($con, $query);

    if ($res) {
        $_SESSION['message'] = "Updated Successfully";
        header('Location: products.php');
        exit(0);
    }
}

if (isset($_POST['product_delete'])) 
{
    $prod_id = $_POST['product_delete'];

    $query="DELETE FROM product where item_id = '$prod_id' ";
    $res= mysqli_query($con, $query);

    if ($res)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header('Location: products.php');
        exit(0);
    }
}

if (isset($_POST['class_delete'])) 
{
    $id = $_POST['class_delete'];

    $query="DELETE FROM classes where id = '$id' ";
    $res= mysqli_query($con, $query);

    if ($res)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header('Location: classadmin.php');
        exit(0);
    }
}

if (isset($_POST['cust_delete'])) 
{
    $id = $_POST['cust_delete'];

    $query="DELETE FROM customer where id = '$id' ";
    $res= mysqli_query($con, $query);

    if ($res)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header('Location: dashboard.php');
        exit(0);
    }
}

if(isset($_POST['update_admin']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE admin SET Name = '$name', email='$email', passw='$password' where id = '1' ";
    $res = mysqli_query($con, $query);

    if ($res) {
        $_SESSION['message'] = "Updated Successfully";
        header('Location: admindet.php');
        exit(0);
    }
}

if(isset($_POST['update_order']))
{

    $item_name = $_POST['total_products'];
    $item_price = $_POST['total_price'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];
    $item_id = $_POST['id'];

    $query = "UPDATE orders 
              SET total_products='$item_name', total_price='$item_price', address='$address', phone='$phone' , Status='$status'
              where id='$item_id'";
    $res = mysqli_query($con, $query);

    if ($res) {
        $_SESSION['message'] = "Updated Successfully";
        header('Location: order.php');
        exit(0);
    }
}
?>

