<?php

  include_once('config.php'); 

  $itemid = $_GET['id']??1;
  $con = mysqli_connect("localhost", "root", "", "gymwebsite");
  $sql = "SELECT * FROM product where item_id";
  $res = mysqli_query($con, $sql); 
  
?>
<!-----------single product details----------->   

 <!---------External css--------->
<link rel="stylesheet" type="text/css" href="css/productdetails.css">

<div class="small-container single-product p-3 pb-md-4 mx-auto mb-0">
<div class="row">
<?php
  if(mysqli_num_rows($res) > 0)
  {
    while($row = mysqli_fetch_assoc($res))
    { 
      if($row['item_id'] == $itemid)
       {
         if($row['item_id'] == 1){
     ?>     
      <div class="col-sm-6">
        <img src="<?php echo $row['item_image'];?>">
      </div>
      <div class="col-sm-6 ">       
       <form method="post" action="_insertCart.php?action=add&id=<?php echo $row['item_id']?>">
        <p>Home / <?php echo $row['item_name'];?></p>
        <h1><?php echo $row['item_name'];?></h1>
        <h4>Rs.<?php echo $row['item_price'];?></h4>
        <input type="hidden" name="hidden_price" value="<?= $row['item_price']; ?>" /> 
        <input type="hidden" name="hidden_name" value="<?= $row['item_name']; ?>" />  
        Qty:<input type="number" name="quantity" value="1">
        <hr>
        <input class="btn btn-warning" name="add" type="submit" style="border-radius: 22px; width: 150px;" value="Add to cart">
        <p><h3>Product Details</h3>
        <?php echo $row['item_details'];?></p>
       </form>
      </div>       
     <?php
       }
       else{
      ?>
      <div class="col-sm-6">
        <img src="<?php echo $row['item_image'];?>">
      </div>
      <div class="col-sm-6 ">
       <form method="post" action="_insertCart.php?action=add&id=<?php echo $row['item_id']?>">
        <p>Home / <?php echo $row['item_name'];?></p>
        <h1><?php echo $row['item_name'];?></h1>
        <h4>Rs.<?php echo $row['item_price'];?></h4>
        <input type="hidden" name="hidden_price" value="<?= $row['item_price']; ?>" /> 
        <input type="hidden" name="hidden_name" value="<?= $row['item_name']; ?>" />  

        <select type="submit" id="size" name="size">
          <option>Select Size</option>
          <option>XXL</option>
          <option>XL</option>
          <option>Large</option>
          <option>Medium</option>
          <option>Small</option>
        </select>
        Qty:<input type="number" name="quantity" value="1">
        <hr>
        <input class="btn btn-warning" name="add" type="submit" style="border-radius: 22px; width: 150px;" value="Add to cart">
        <p><h3>Product Details</h3>
        <?php echo $row['item_details'];?></p>
       </form>
      </div> 
      <?php
       }
      }
    }
  }
  ?>
</div>
</div>