<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Classes</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-calendar-event-fill"></i></span> Classes Info
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <?php
                    include('config.php'); 
                    $con = mysqli_connect("localhost", "root", "", "gymwebsite");
                    $sql = "SELECT * FROM classes";
                    $res = mysqli_query($con, $sql); 
                  ?>
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%">
                    <thead>
                      <tr>
                        <th>Name</th>                        
                        <th>Phone No.</th>
                        <th>Class</th>
                        <th>Time</th>                        
                        <th>Date</th>
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
                               <td><?php echo $row['firstname'].' '.$row['lastname'];?></td>
                               <td><?php echo $row['phonenum'];?></td>
                               <td><?php echo $row['class'];?></td>
                               <td><?php echo $row['Times'];?></td>
                               <td><?php echo $row['date'];?></td>
                               <td><?php echo $row['status'];?></td>
                               <td><a href="class-edit.php?id=<?php echo $row['id'];?>"><input class="btn btn-success" name="" type="submit" style="border-radius: 22px; width: 55px;" value="Edit"></a></td>
                               <td>
                                <form action="code.php" method="post">
                                  <button type="submit" name="class_delete" value="<?= $row['id'];?>" class="btn btn-danger">Remove</button>
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
                        <th>Name</th>  
                        <th>Phone No.</th>
                        <th>Class</th>
                        <th>Time</th>                        
                        <th>Date</th>
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
    </main>