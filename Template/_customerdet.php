<main class="mt-5 pt-3">
  <div class="container-fluid">
    <div class="row" id="2">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-people-fill"></i></span> Customer Details
                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <?php
                    include('config.php'); 
                    $con = mysqli_connect("localhost", "root", "", "gymwebsite");
                    $sql = "SELECT * FROM customer";
                    $res = mysqli_query($con, $sql); 
                  ?>
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Membership Type</th>
                        <th>Phone No.</th>
                        <th>Start date</th>
                        <th>Status</th> 
                        <th>Edit</th>  
                        <th>Remove</th>             
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                         if(mysqli_num_rows($res) > 0)
                         {
                           while($row=mysqli_fetch_assoc($res))
                           {
                             ?>                          
                              <tr>
                               <td><?php echo $row['fname'].' '.$row['lname'];?></td>
                               <td><?php echo $row['email'];?></td>
                               <td><?php echo $row['address'];?></td>
                               <td><?php echo $row['membership'];?></td>
                               <td><?php echo $row['phonenum'];?></td>
                               <td><?php echo $row['datecreated'];?></td>
                               <td><?php echo $row['Status'];?></td>
                               <td><a href="customer-edit.php?id=<?php echo $row['id'];?>"><input class="btn btn-success" name="" type="submit" style="border-radius: 12px; width: 55px;" value="Edit"></a></td>
                               <td>
                                <form action="code.php" method="post">
                                  <button type="submit" name="cust_delete" value="<?= $row['id'];?>" class="btn btn-danger">Remove</button>
                                </form>
                               </td>
                              </tr>
                             <?php
                           }
                         }
                      ?>
                    </tbody>
                    <tfoot>
                     <tr>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Membership Type</th>
                        <th>Phone No.</th>
                        <th>Start date</th>
                        <th>Status</th>       
                        <th>Edit</th>   
                        <th>Remove</th>         
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</main>