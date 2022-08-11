<main class="mt-5 pt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h4>Products</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-bag-check-fill"></i></span> Product Details
            <a href="product-add.php"><input class="btn btn-primary float-end" name="" type="submit" style="border-radius: 12px; width: 120px;" value="Add Product"></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            <?php
              include('config.php'); 
              $con = mysqli_connect("localhost", "root", "", "gymwebsite");
              $sql = "SELECT * FROM product";
              $res = mysqli_query($con, $sql); 
            ?>
            <table id="example" class="table table-striped data-table" style="width: 100%">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
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
                    <td><?php echo $row['item_id'];?></td>
                    <td><?php echo $row['item_name'];?></td>
                    <td><?php echo $row['item_price'];?></td>
                    <td><?php echo $row['item_quantity'];?></td>
                    <td><a href="product-edit.php?id=<?php echo $row['item_id'];?>"><input class="btn btn-success" name="" type="submit" style="border-radius: 12px; width: 55px;" value="Edit"></a></td>
                    <td>
                      <form action="code.php" method="post">
                        <button type="submit" name="product_delete" value="<?= $row['item_id'];?>" class="btn btn-danger">Remove</button>
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
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
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
</main>
          