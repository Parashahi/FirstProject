<!-----------header----------->   
<?php
   //include header file
   include('Template/_adminhead.php');
?>

<!-- offcanvas -->
<?php
   //include offcanvas file
   include('Template/_offcanvas.php');
?>

<?php
  session_start();
  include_once('config.php');   
?>
 <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Edit Details</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-calendar-event-fill"></i></span> Info
              </div>
              <div class="card-body">
                
              <?php
              if(isset($_GET['id']))
              {
                  $user_id = $_GET['id'];
                  $user= "SELECT * FROM classes where id = '$user_id'";
                  $user_run = mysqli_query($con, $user);

                  if(mysqli_num_rows($user_run)>0)
                  {
                      foreach($user_run as $users)
                      {
              ?>                            
                        <form action="code.php" method="POST">
                         <input type="hidden" name="id" value="<?=$users['id'];?>">
                         <div class="row">
                            <div class="col-md-6 mb-3">
                             <label for="">First Name</label>
                             <input type="text" name="fname" value="<?=$users['firstname'];?>" class="form-control"> 
                            </div>
                           <div class="col-md-6 mb-3">
                             <label for="">Last Name</label>
                             <input type="text" name="lname" value="<?=$users['lastname'];?>" class="form-control"> 
                           </div>
                           <div class="col-md-6 mb-3">
                             <label for="">Phone Number</label>
                             <input type="text" name="phonenum" value="<?=$users['phonenum'];?>" class="form-control"> 
                           </div>
                           <div class="col-md-6 mb-3">
                             <label class="form-label">Class</label>
                             <select class="form-select" name="class" value="<?=$users['class'];?>">
                              <option value="">Choose...</option>
                              <option  <?=$users['class'] == "Yoga" ? 'selected':'';?> >Yoga</option>
                              <option  <?=$users['class'] == "Zumba" ? 'selected':'';?> >Zumba</option>
                              <option  <?=$users['class'] == "Cardio" ? 'selected':'';?> >Cardio</option>
                             </select>
                           </div>
                           <div class="col-md-6 mb-3">
                             <label class="form-label">Time</label>
                             <select class="form-select" name="time" value="<?=$users['Times'];?>">
                              <option value="">Choose...</option>
                              <option  <?=$users['Times'] == "6 AM" ? 'selected':'';?> >6 AM</option>
                              <option  <?=$users['Times'] == "1 PM" ? 'selected':'';?> >1 PM</option>
                              <option  <?=$users['Times'] == "6 PM" ? 'selected':'';?> >6 PM</option>
                             </select>
                           </div>
                           <div class="col-md-6 mb-3">
                             <label class="form-label">Status</label>
                             <select class="form-select" name="status" value="<?=$users['status'];?>">
                              <option value="">Choose...</option>
                              <option class="text-dark" <?=$users['status'] == "Completed" ? 'selected':'';?>>Completed</option>
                              <option class="text-dark" <?=$users['status'] == "Pending" ? 'selected':'';?>>Pending<Pending/option>
                             </select>
                           </div>
                           <div class="col-md-12 mb-3">
                             <button type="submit" name="update_class" class="btn btn-success">Update</button>
                           </div>
                         </div>
                        </form>
               <?php
                      }
                  }
                  else
                  {
               ?>
                          <h4> No Record Found</h4>
            <?php
                  }
              }
            ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
