  <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Orders</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-cart-fill"></i></span> Order Details
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <?php
                    include('config.php'); 
                    $con = mysqli_connect("localhost", "root", "", "gymwebsite");
                    $sql = "SELECT * FROM orders";
                    $res = mysqli_query($con, $sql); 
                  ?>
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Products</th>
                        <th>Email</th>                  
                        <th>Address</th>    
                        <th>Phone</th>
                        <th>Amount</th>
                        <th>Order Date</th>    
                        <th>Status</th>  
                        <th>Edit</th>       
                      </tr>
                    </thead>
                    <?php
                         if(mysqli_num_rows($res) > 0)
                         {
                           while($row=mysqli_fetch_assoc($res))
                           {
                             ?>                          
                              <tr>
                               <td><?php echo $row['fname'].' '.$row['lname'];?></td>
                               <td><?php echo $row['total_products'];?></td>                               
                               <td><?php echo $row['email'];?></td>
                               <td><?php echo $row['address'];?></td>                              
                               <td><?php echo $row['phone'];?></td> 
                               <td><?php echo $row['total_price'];?></td>
                               <td><?php echo $row['order_date'];?></td>                              
                               <td><?php echo $row['Status'];?></td>
                               <td><a href="order-edit.php?id=<?php echo $row['id'];?>"><input class="btn btn-success" name="" type="submit" style="border-radius: 12px; width: 55px;" value="Edit"></a></td>
                              </tr>
                             <?php
                           }
                         }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Products</th>
                        <th>Email</th>                  
                        <th>Address</th>    
                        <th>Phone</th>
                        <th>Amount</th>
                        <th>Order Date</th>    
                        <th>Status</th>  
                        <th>Edit</th>        
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
