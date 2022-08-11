 <div class="container col-xl-10 col-xxl-8 px-4 py-5 border-top" id="5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Sign Up Now to get started</h1>
        <p class="col-lg-10 fs-4">Register as a member now and contact us to get desired membership.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-6">
        <form action="connect.php" method="post" class="p-4 p-md-5 text-start rounded-3 bg-warning" onsubmit="return validation()">
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
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
              <span id="emails" class="text-danger font-weight-bold"> </span>
            </div>
            <div class="col-12">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
              <span id="passw" class="text-danger font-weight-bold"> </span>
            </div>
            <div class="col-12">
              <label for="password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="conpass" name="password" placeholder="Password">
              <span id="conpassw" class="text-danger font-weight-bold"> </span>
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Municipality-ward">
              <span id="add" class="text-danger font-weight-bold"> </span>
            </div>
            <div class="col-12">
              <label for="member" class="form-label">Membership Type</label>
              <select class="form-select" id="member" name="mem">
                <option value="">Choose...</option>
                <option class="text-dark">Standard</option>
                <option class="text-dark">Gold</option>
                <option class="text-dark">Diamond</option>
              </select>
              <span id="mem" class="text-danger font-weight-bold"> </span>
            </div>
            <div class="col-12">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phonenum" placeholder="Phone Number">
              <span id="phonen" class="text-danger font-weight-bold"> </span>
            </div>
          </div>
          <hr class="my-4">
          <button class="w-100 btn btn-lg btn-dark"  type="submit" value="submit" name="submit">Sign up</button>
          <small>By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>
   <script type="text/javascript">

      function validation(){
         var fir = document.getElementById('firstName').value;
         var las = document.getElementById('lastName').value; 
         var ema = document.getElementById('email').value;
         var pas = document.getElementById('pass').value;
         var conpas = document.getElementById('conpass').value;
         var add = document.getElementById('address').value;
         var phone = document.getElementById('phone').value;
         var member = document.getElementById('member').value;

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



         if (pas == "") {
           document.getElementById('passw').innerHTML = " ** Please enter your password";
           return false;
         }
         if (pass.length <= 7) {
           document.getElementById('passw').innerHTML = " ** Password cannot be less than 7 letters";
           return false;
         }



         if (conpas == "") {
           document.getElementById('conpassw').innerHTML = " ** Please reenter your password";
           return false;
         }
          if (conpas.length <= 7) {
           document.getElementById('conpassw').innerHTML = " ** Password cannot be less than 7 letters";
           return false;
         }
         if (pas != conpas) {
           document.getElementById('conpassw').innerHTML = " ** Passwords are not matching";
           document.getElementById('passw').innerHTML = " ** Passwords are not matching";
           return false;
         }



         if (add == "") {
           document.getElementById('add').innerHTML = " ** Please enter your address";
           return false;
         }
         if (!isNaN(las)) {
          document.getElementById('add').innerHTML = " ** Address cannot be numbers only";
           return false;
         }
         
         if (member == "") {
           document.getElementById('mem').innerHTML = " ** Please select your membership";
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
       

      }
    </script>
