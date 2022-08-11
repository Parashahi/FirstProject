<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
    <link rel="icon" type="image/x-icon" href="images/logo1.png">    

    <!---Bootstrap CDN--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body class="text-center bg-dark">

  <main class="form-signin">
    <div class="col-md-10 mx-auto col-lg-5">
     <form action="" method="post" onsubmit="return validation()">  
       <img class="mb-4" src="images/logo1.png" alt="" width="72" height="68">
       <h1 class="h3 mb-3 fw-normal text-secondary">Please sign in</h1>

       <div class="form-floating">
         <input type="email" class="form-control" id="email" name="email" placeholder=" ">
         <label for="floatingInput">Email address</label>
         <span id="emails" class="text-danger font-weight-bold"> </span>
       </div>

       <div class="form-floating">
         <input type="password" class="form-control" id="password" name="password" placeholder=" ">
         <label for="floatingPassword">Password</label>
         <span id="passw" class="text-danger font-weight-bold"> </span>
       </div>
       <?php
        include('config.php');
        
        if(isset($_POST['login']))
        {       
          $email = $_POST['email']; 
          $password = $_POST['password'];
          
          
  

          //to prevent from mysqli injection  
          $email = stripcslashes($email);  
          $password = stripcslashes($password);  
          $email = mysqli_real_escape_string($con, $email);  
          $password = mysqli_real_escape_string($con, $password);  

          $sql = "SELECT * from customer where email = '$email' and `password` = '$password'";  
          $result = mysqli_query($con, $sql);  
          $row = mysqli_fetch_assoc($result);  
          $count = mysqli_num_rows($result);  
          
          if($count==1)
          {
            header("location:home1.php?email=$email");           
          }
          else
          {
            echo '<script>alert("Enter Correct info")</script>';         
          }
        }
   ?>
       <hr class="dropdown-divider bg-dark">
       <a href=""><input type="submit" class="w-100 btn btn-lg btn-warning" name="login" value="Login"/></a>
       <hr class="dropdown-divider bg-dark">
     </form>
    <a href="adminlog.php"><button class="w-100 btn btn-lg btn-warning">Log in as Admin</button></a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </main>
   
    <script type="text/javascript">
           
     function validation() {
      var email = document.getElementById('email').value;
      var pass = document.getElementById('password').value;

         if (email == "") {
           document.getElementById('emails').innerHTML = "*Please enter your email*";
           return false;
         }        
         if (email.length <= 2) {
           document.getElementById('emails').innerHTML = "*Email cannot be less than 2 letters*";
           return false;
         }


         if (pass == "") {
           document.getElementById('passw').innerHTML = "*Please enter your password*";
           return false;
         }
         if (pass.length <= 7) {
           document.getElementById('passw').innerHTML = "*Password cannot be less than 7 letters*";
           return false;
         }
        
     }
    </script> 


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
  </body>
</html>