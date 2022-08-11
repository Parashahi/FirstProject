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
            <h4>Add Details</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-calendar-event-fill"></i></span> Info
              </div>
              <div class="card-body">                        
                        <form action="code.php" method="POST">
                         
                         <div class="row">
                            <div class="col-md-6 mb-3">
                             <label for="">Product Name</label>
                             <input type="text" name="item_name" class="form-control"> 
                            </div>
                           <div class="col-md-6 mb-3">
                             <label for="">Price</label>
                             <input type="text" name="item_price"  class="form-control"> 
                           </div>
                           <div class="col-md-6 mb-3">
                             <label for="">Quantity</label>
                             <input type="number" name="item_quantity"  class="form-control"> 
                           </div>
                           <div class="col-md-6 mb-3">
                             <label for="">Details</label>
                             <input type="text" name="item_details"  class="form-control"> 
                           </div>
                           <div class="col-md-6 mb-3">
                             <label for="">Image</label>
                             <input type="file" name="item_image" accept="images/" class="form-control"> 
                           </div>
                           <div class="col-md-12 mb-3">
                             <button type="submit" name="add_product" class="btn btn-success">Add product</button>
                           </div>
                         </div>
                        </form>
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
