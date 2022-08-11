
<!---------Exclusive product---------->
<?php
  include('config.php'); 
  $con = mysqli_connect("localhost", "root", "", "gymwebsite");
  $sql = "SELECT * FROM product where item_id = 1";
  $res = mysqli_query($con, $sql); 
?>
<div class="offer">
<div class="small-container p-3 pb-md-4 mx-auto mb-0">
<?php
  if(mysqli_num_rows($res) > 0)
  {
    while($row=mysqli_fetch_assoc($res))
    {
      ?>      
      <div class="row">
        <div class="col-2">
          <a href="<?php printf('%s?id=%d','productdetails.php', $row['item_id'])?>">
            <img src="<?php echo $row['item_image'];?>" class="offer-img">
          </a>
        </div>
        <div class="col-2">
          <h5>Home / <?php echo $row['item_name'];?></h5>
          <p>Exclusively available in our store.</p>
          <h2><?php echo $row['item_name'];?></h2>
          <small><?php echo $row['item_details'];?></small><br>
          <div class="rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i> 
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
          </div>
          <p>Rs. <?php echo $row['item_price'];?></p>
  
        </div>
      </div>
      <?php
    }
  }
?>
</div>
</div>
