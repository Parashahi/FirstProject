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
                  $itemid = $_GET['id'];
                  $sql= "SELECT * FROM orders where id = '$itemid'";
                  $query_run = mysqli_query($con, $sql);

                  if(mysqli_num_rows($query_run)>0)
                  {
                      foreach($query_run as $items)
                      {
              ?>                            
                        <form action="code.php" method="POST">
                         <input type="hidden" name="id" value="<?=$items['id'];?>">
                         <div class="row">
                            <div class="col-md-6 mb-3">
                             <label for="">Product Name</label>
                             <input type="text" name="total_products" value="<?=$items['total_products'];?>" class="form-control"> 
                            </div>
                           <div class="col-md-6 mb-3">
                             <label for="">Price</label>
                             <input type="text" name="total_price" value="<?=$items['total_price'];?>" class="form-control"> 
                           </div>
                           <div class="col-md-6 mb-3">
                             <label for="">Address</label>
                             <input type="text" name="address" value="<?=$items['address'];?>" class="form-control"> 
                           </div>
                           <div class="col-md-6 mb-3">
                             <label for="">Phone</label>
                             <input type="number" name="phone" value="<?=$items['phone'];?>" class="form-control"> 
                           </div>
                           <div class="col-md-6 mb-3">
                             <label class="form-label">Status</label>
                             <select class="form-select" name="status" value="<?=$items['Status'];?>">
                              <option value="">Choose...</option>
                              <option class="text-dark" <?=$items['Status'] == "Completed" ? 'selected':'';?>>Completed</option>
                              <option class="text-dark" <?=$items['Status'] == "Processing" ? 'selected':'';?>>Processing</option>
                              <option class="text-dark" <?=$items['Status'] == "Pending" ? 'selected':'';?>>Pending<Pending/option>
                             </select>
                           </div>
                           <div class="col-md-12 mb-3">
                             <button type="submit" name="update_order" class="btn btn-success">Update</button>
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
