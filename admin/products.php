<?php include "inc/sidebarwithheader.php";?>
<?php 
  include 'libs/functions.php';
  $totalUser = countNumRows('products');
  
?>
        <div class="content-area">
          <div class="row mt-3 mb-3">
            <div class="col-6">
                <h4>Products</h4>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="add-product.php" class="btn btn-primary">Add Product</a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
            <table class="table text-center">
                <thead>
                    <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Stoke</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sell Price</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $result = select('products');

                        if(mysqli_num_rows($result) > 0){
                            foreach($result as $product){
                    ?>
                    <tr>
                        <th scope="row"><?= $product['id']?></th>
                        <td>
                            <img src="../assets/images/products/<?= $product['product_image']?>" alt="" srcset="" width="100">
                        </td>
                        <td><?= $product['product_name']?></td>
                        <td><?= $product['stoke']?></td>
                        <td><?= $product['product_price']?></td>
                        <td><?= $product['sell_price']?></td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <a href="view-product.php"><i class="fa-solid fa-eye" style="color: black;"></i></a>
                                <a href="update-product.php"><i class="fa-solid fa-pencil" style="color: purple;"></i></a>
                                <a href="remove-product.php"><i class="fa-solid fa-trash" style="color: #e60000;"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php        
                            }
                        }else{
                    ?>
                </tbody>
                </table>
                    <?="<h4 class='text-center'>No data Avaible!</h4>"?>
                <?php
                        }
                    ?>
            </div>
          </div>
        </div>
<?php include "inc/footer.php";?>

