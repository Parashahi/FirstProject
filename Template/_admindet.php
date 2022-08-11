    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Admin details</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-person-fill me-2"></i></span>Admin Details
              </div>
              <div class="card-body">
                <?php
                  include('config.php'); 
                  $user= "SELECT * FROM admin";
                  $user_run = mysqli_query($con, $user);

                  if(mysqli_num_rows($user_run)>0)
                  {
                    foreach($user_run as $users)
                    {
                ?>                            
                      <form action="code.php" method="POST">
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?=$users['Name'];?>" class="form-control"> 
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="<?=$users['email'];?>" class="form-control"> 
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" value="<?=$users['passw'];?>" class="form-control"> 
                          </div>
                          <div class="col-md-12 mb-3">
                            <button type="submit" name="update_admin" class="btn btn-success">Update</button>
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
            ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>