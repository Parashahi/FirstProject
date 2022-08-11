<div class="container p-5 pb-md-4 mt-5  mb-4" id="1">
  <div class="row">
    <div class="col-md-12 mb-3">
      <div class="card">
        <div class="card-header">
          <span><i class="bi bi-person-fill me-2"></i></span> Your Membership Details
        </div>
        <div class="card-body">
          <div class="table-responsive">
<?php
    include('config.php');
    
    $email = $_GET['email'];
    $sql = "SELECT * from customer where email = '$email'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_assoc($result);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){  
        echo "<table id='example' class='table table-striped data-table' style='width: 100%' >";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Phone</th>";
        echo "<th>Membership Type</th>";
        echo "<th>Purchase date</th>";
        echo "<th>Status</th>";
        echo "</tr>";
        echo"</thead>";
            $fullname = $row['fname'].' '.$row['lname'];
            $phone = $row['phonenum'];
            $membership = $row['membership'];
            $date = $row['datecreated'];
            $status = $row['Status'];
            
        echo "<tbody>";
        echo "<tr>";
          echo "<td>$fullname</td>";
          echo "<td>$phone</td>";
          echo "<td>$membership</td>";
          echo "<td>$date</td>";
          echo "<td>$status</td>";
        echo "</tr>";  
        echo "</tbody>";          
        echo "</table>";
    }
    else
    {
      echo"No data";
    }
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  