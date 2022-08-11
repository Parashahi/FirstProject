
<!---------All Products---------->
<?php
  include('config.php'); 
  $con = mysqli_connect("localhost", "root", "", "gymwebsite");
  $sql = "SELECT * FROM product where item_id > 1";
  $res = mysqli_query($con, $sql); 
?>
<div class="small-container p-3 pb-md-4 mx-auto mb-0" id="1">
 <h2>Our Products</h2>
 <div class="row">
 <?php
  if(mysqli_num_rows($res) > 0)
  {
    while($row = mysqli_fetch_assoc($res))
    {
      ?> 
          <div class="col-3">
            <a href = "<?php printf('%s?id=%d','productdetails.php', $row['item_id']) ?>"><img src="<?php echo $row['item_image'];?>"></a>
            <h4><?php echo $row['item_name'];?></h4>     
            <div class="rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
            </div>
            <p>Rs. <?php echo $row['item_price'];?></p>
          </div>
      <?php
    }
  }
 ?>
 </div>
</div>