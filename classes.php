<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Classes</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="images/logo1.png">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <!---Bootstrap CDN--->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!---Icon--->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="facebook" viewBox="0 0 16 16">
      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </symbol>
  </svg>
</head>
<body>
  <!-----------Navbar----------->   

  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark mx-auto text-center mb-0" >
      <div class="container">
        <div class="col-2 ">
          <a href="home.php" class="navbar-logo mb-0 ">
          <img class="d-inline-block" src="images/logo1.png"
          height="50" width="55">
          </a>
        </div>
        <button type="button" 
          data-bs-toggle="collapse"  
          data-bs-target="#navbarNav"
          class="navbar-toggler"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>  
        </button>
        <div class="collapse navbar-collapse"id="navbarNav">
          <div class="col ms-5">
            <ul class="navbar-nav">
              <li class="nav-item"><a href="#" class="nav-link active">Home</a>
              </li>
              <li class="nav-item"><a href="home.php #2" class="nav-link">Facilities</a>
              </li>
              <li class="nav-item"><a href="home.php #3" class="nav-link">Classes</a>
              </li>      
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" 
                   id="navbarDropdown"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">
                   Membership
                </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="home.php #4" class="dropdown-item">Standard</a></li>
                <li><a href="home.php #4" class="dropdown-item">Gold</a></li>
                <li><a href="home.php #4" class="dropdown-item">Diamond</a></li>
              </ul>
              </li>   
              <li class="nav-item"><a href="store.php" target="_blank" class="nav-link">Store</a>
              </li>
              <li class="nav-item"><a href="#6" class="nav-link">Contacts</a>
              </li>
            </ul>
          </div>
          <div>
           <a href="login.php" target="_blank"><button type="button" class="btn btn-outline-light ms-5" style="border-radius: 22px;">Login</button></a>
           <a href="#5"><button type="button" class="btn btn-warning" style="border-radius: 22px;">Sign-up</button></a>
          </div>
        </div>
      </div>
  </nav>
  
  <!-----------Main-----------> 

 <div class="container col-xl-10 col-xxl-8 px-4 py-5 border-top" id="5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Register for our classes</h1>
        <p class="col-lg-10 fs-4">Input your info and register for your desired class</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="class.php" method="post" class="p-4 p-md-5 text-start rounded-3 bg-warning" onsubmit="return validation()">
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
              <label for="class" class="form-label">Class</label>
              <select class="form-select" id="class" name="class">
                <option value="" class="text-dark">Choose...</option>
                <option class="text-dark">Zumba</option>
                <option class="text-dark">Yoga</option>
                <option class="text-dark">Cardio</option>
              </select>
              <span id="cla" class="text-danger font-weight-bold"> </span>
            </div>
            <div class="col-12">
              <label for="time" class="form-label">Time</label>
              <select class="form-select" id="time" name="time">
                <option value="" class="text-dark">Choose...</option>
                <option class="text-dark">6 AM</option>
                <option class="text-dark">1 PM</option>
                <option class="text-dark">6 PM</option>
              </select>
              <span id="tim" class="text-danger font-weight-bold"> </span>
            </div>
          </div>
          <hr class="my-4">
          <button class="w-100 btn btn-lg btn-dark" type="submit" value="submit" name="submit">Sign up</button>
          <small>By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>
  <!-----------footer----------->   

  <div class="container p-3 pb-md-4 mx-auto mb-0" id="6">
  <footer class="py-5 ">
   <div class="row">
     <div class="py-4 my-4 border-top d-flex">
      <div class="col-4 me-4">
        <p>&copy; 2022 <a href="" style="color: black;">Fitzone Nepal</a>. All rights reserved.</p>
      </div>

      <div class="col-4">
        <h5>Contact Info</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">016202221/9861590039</li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FitzoneNep@gmail.com</a></li>
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

    <script src="form-validation.js"></script>

    <script type="text/javascript">
      function validation(){
         var fir = document.getElementById('firstName').value;
         var las = document.getElementById('lastName').value; 
         var ema = document.getElementById('email').value;
         var clas = document.getElementById('class').value;
         var time = document.getElementById('time').value;

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


         if (clas == "") {
           document.getElementById('cla').innerHTML = " ** Please enter your desired class";
           return false;
         }


         if (time == "") {
           document.getElementById('tim').innerHTML = " ** Please enter your time";
           return false;
         }
          

      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>