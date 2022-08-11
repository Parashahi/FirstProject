<?php

@include 'config.php';

if(isset($_POST['order_btn']))
{

   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $phone = $_POST['phonenum'];
   $email = $_POST['email'];
   $state = $_POST['state'];
   $address = $_POST['address'];

   $cart_query = mysqli_query($con, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') '.' ('. $product_item['size'] .')';
         $product_price = $product_item['price'] * $product_item['quantity'];
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($con, "INSERT INTO `orders`(fname, lname, phone, email, state, address, total_products, total_price) 
                   VALUES('$fname','$lname','$phone','$email','$state','$address','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='row mt-5'>
      <div class='order-message-container col-md-12 col-lg-12 ' align='center'>
      <div class='message-container'>
         <h3>Thank you for Shopping! </h3>
         <h3>Order placed Successfully!!</h3>
         <div class='order-detail'>
           <ul class='list-group mb-3 ''>
            <li><span>".$total_product."</span></li>
            <li><span class='total'> Total : Rs.".$price_total."/-  </span></li>
           </ul>
         </div>
         <div class='customer-details'>
            <p> Your Name : <span>".$fname." ".$lname."</span> </p>
            <p> Your Number : <span>".$phone."</span> </p>
            <p> Your Email : <span>".$email."</span> </p>
            <p> Your Address : <span>".$address.", ".$state."</span> </p>
         </div>
            <a href='store.php' class='btn btn-warning'>Continue shopping</a>
         </div>
      </div>
      </div>
      ";
   }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <link rel="icon" type="image/x-icon" href="images/logo1.png">

    <title>Checkout</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
  

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    <!---Bootstrap CDN--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!---Icon--->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </symbol>
      <symbol id="instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </symbol>
    </svg>


    <style>
      *{
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
        font-family: 'Acme', sans-serif;
        color: white;

      }      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
      .bi {
        vertical-align: -.125em;
         fill: currentColor;
      }

    </style>

    
  </head>
<body class="bg-dark">
    
<div class="container">
   <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/logo1.png" alt="" width="72" height="65">
        <h2>Checkout</h2>        
      </div>
      <div class="row g-5">
       <div class="col-md-4 col-lg-4 order-md-last " style="border-radius: 12px;" align="center">
        <h4>
          <span class="">Your cart</span>
        </h4>
        <ul class="list-group mb-3 ">
         <?php
         include('config.php');
         $select_cart = mysqli_query($con, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = $fetch_cart['price'] * $fetch_cart['quantity'];
            $grand_total = $total += $total_price;
         ?>
          <li class="list-group-item">
            <span class="text-dark"><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)(<?= $fetch_cart['size']; ?>)</span>
          </li>
         <?php
           }
        }else{
          echo "<div class='display-order'><span>your cart is empty!</span></div>";
        }
         ?>
         <li class="list-group-item bg-secondary">
           <span class="grand-total text-dark "> Total : Rs.<?= $grand_total; ?>/- </span>
         </li>
        </ul>
       </div>
       <div class="col-md-7 col-lg-8">
        <h4 class="mb-3 text-light" align="center">Billing address</h4>
        <form action="" method="post" onsubmit="return validation()">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="First Name" name="fname">
              <span id="firstnam" class="text-danger font-weight-bold"> </span>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lname">
              <span id="lastnam" class="text-danger"> </span>
            </div>

            <div class="col-12">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phonenum" placeholder="Phone Number">
              <span id="phonen" class="text-danger font-weight-bold"> </span>
            </div>
    
            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
              <span id="emails" class="text-danger font-weight-bold"> </span>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Municipality-ward">
              <span id="ad" class="text-danger font-weight-bold"> </span>
            </div>

            <div class="col-12">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" name="state">
              <option value="">Choose...</option>
                <option class="text-dark">State-1</option>
                <option class="text-dark">State-2</option>
                <option class="text-dark">State-3</option>
                <option class="text-dark">State-4</option>
                <option class="text-dark">State-5</option>
              </select>
              <span id="sta" class="text-danger font-weight-bold"> </span>
            </div>            
          </div>
          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" value=" ">
              <label class="form-check-label" for="credit">Cash on delivery</label>
              <span id="radio" class="text-danger font-weight-bold"> </span>
            </div>
          </div>
          <hr class="my-4">
          <button class="w-100 btn btn-warning btn-lg" type="submit" value="submit" name="order_btn">Checkout</button>
          
        </form>
       </div>
      </div>
   </main>
</div>
  <!-----------footer----------->   
  <div class="container p-3 pb-md-4 mx-auto mb-0" id="6">
   <footer class="py-5 ">
    <div class="row">
     <div class="py-4 my-4 border-top d-flex">
      <div class="col-4 me-4">
        <p>&copy; 2022 <a href="" style="color: grey;">Fitzone Nepal</a>. All rights reserved.</p>
      </div>

      <div class="col-4">
        <h5>Contact Info</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">016202221/9861590039</li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">FitzoneNep@gmail.com</a></li>
          <li class="nav-item mb-2">Tokha-3, Kathmandu</li>
        </ul>
      </div>

      <div class="col-4">
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex float-end me-5">
          <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/_parashahi/?hl=en" target="_blank"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a>
          </li>
         <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/parash.shahi777/" target="_blank"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a>
         </li>
        </ul>
      </div>
     </div>
    </div>
   </footer>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
      function validation()
      {
         var fir = document.getElementById('firstName').value;
         var las = document.getElementById('lastName').value; 
         var ema = document.getElementById('email').value;
         var add = document.getElementById('address').value;
         var stat = document.getElementById('state').value;
         var phone = document.getElementById('phone').value;
         var rad = document.getElementById('credit');

         if (fir == "") {
           document.getElementById('firstnam').innerHTML = " ** Please enter your firstname";
           return false;
         }
         if (fir.length <= 2) {
           document.getElementById('firstnam').innerHTML = " ** First name cannot be less than 2 letters";
           return false;
         }
         if (!isNaN(fir)) {
          document.getElementById('firstnam').innerHTML = " ** Firstname should only be letters";
           return false;
         }



         if (las == "") {
           document.getElementById('lastnam').innerHTML = " ** Please enter your lastname";
           return false;
         }
         if (las.length <= 2) {
           document.getElementById('lastnam').innerHTML = " ** Lastname cannot be less than 2 letters";
           return false;
         }
         if (!isNaN(las)) {
          document.getElementById('lastnam').innerHTML = " ** Lastname should only be letters";
           return false;
         }



         if (ema == "") {
           document.getElementById('emails').innerHTML = " ** Please enter your email";
           return false;
         }        
         if (ema.length <= 2) {
           document.getElementById('emails').innerHTML = " ** email cannot be less than 2 letters";
           return false;
         }


         if (add == "") {
           document.getElementById('ad').innerHTML = " ** Please enter your address";
           return false;
         }
         if (!isNaN(add)) {
          document.getElementById('ad').innerHTML = " ** Address cannot be numbers only";
           return false;
         }


         if (stat == "") {
           document.getElementById('sta').innerHTML = " ** Please enter your address";
           return false;
         }


         if (phone == "") {
           document.getElementById('phonen').innerHTML = " ** Please enter your phone number";
           return false;
         }
         if (isNaN(phone)) {
          document.getElementById('phonen').innerHTML = " ** Phone number must not be string or characters";
           return false;
         }
         if (phone.length != 10) {
          document.getElementById('phonen').innerHTML = " ** Phone number must be of 10 digits";
           return false;
         }


         if(rad.checked==false){
          document.getElementById('radio').innerHTML = " ** Please check the payment method";
           return false;
         }
      }
    </script>
</body>
</html>