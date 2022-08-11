<?php
    session_start();
    include('config.php');
    //session_destroy();

    if(isset($_POST['update_update_btn'])){
      $update_value = $_POST['update_quantity'];
      $update_id = $_POST['update_quantity_id'];
      $update_quantity_query = mysqli_query($con, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
      if($update_quantity_query){
         header('location:cart.php');
      };
   };
   
   if(isset($_GET['remove'])){
      $remove_id = $_GET['remove'];
      mysqli_query($con, "DELETE FROM `cart` WHERE id = '$remove_id'");
      header('location:cart.php');
   };
   
   if(isset($_GET['delete_all'])){
      mysqli_query($con, "DELETE FROM `cart`");
      header('location:cart.php');
   }
?>
<!--------Header---------->
<?php
   //include footer file
   include('Template/_carthead.php');
?>
 <!-----------Shopping cart section----------->   

<div class = "small-container p-3 pb-md-4 mx-auto mb-0">
  <h3 class="mt-5 text-center">Shopping Cart Details</h3>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
       <tr>
        <th width="5%">SN</th>
        <th width="30%">Product Name</th>
        <th width="13%">Price</th>
        <th width="10%">Quantity</th>
        <th width="10%">Size</th>
        <th width="15%">Total Amount</th>
        <th width="17%">Update</th>
        <th width="17%">Remove Item</th>
       </tr>
      </thead>
      <tbody>
         <?php
           $select_cart = mysqli_query($con, "SELECT * FROM `cart`");
           $total = 0;
           $sub_total = 0;
           $num = 1;
           if(mysqli_num_rows($select_cart) > 0)
           {
             while($fetch_cart = mysqli_fetch_assoc($select_cart))
             {
         ?>
              <tr>
                <td><?php echo $num++ ;?></td>
                <td><?php echo $fetch_cart['name']; ?></td>
                <td>Rs.<?php echo number_format($fetch_cart['price']); ?>/-</td>
                <form action="" method="post">
                 <td>
                   <input type='number' class='form-control' name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>">
                 </td>
                 <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                 <td><?php echo ($fetch_cart['size']); ?></td>
                 <td>Rs.<?php echo $sub_total = $fetch_cart['price'] * $fetch_cart['quantity']; ?>/-</td>
                 <td><input type="submit" class="btn btn-warning" value="update" name="update_update_btn"></td>
                </form>
                <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Remove item from cart?')" class="btn btn-danger">remove</a></td>
              </tr>
              <?php
               $total = $sub_total + $total;  
             };
           };
        ?>
           <tr class="table-bottom">
             <td></td>
             <td colspan="4" align="center">Grand total</td>        
             <td>Rs.<?php echo $total; ?>/-</td>
             <td colspan="2" align="center">
              <a href="cart.php?delete_all" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all?');" class="delete-btn"> Delete all </a>
            </td>
           </tr>
      </tbody>          
    </table>   
    <div class="col-12 btn btn-warning" align="center">
      <a href="checkout.php" class="text-dark" style="text-decoration:none;" >Procced to Checkout</a>
    </div>
  </div>
</div>

<!-----------footer----------->   

<?php
   //include footer file
   include('footer.php');
?>