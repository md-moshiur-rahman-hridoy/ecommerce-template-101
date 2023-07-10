<?php include "inc/sidebarwithheader.php";?>
<?php 
  include 'libs/functions.php';
  $totalUser = countNumRows('user');
  $totalProducts = countNumRows('products');
  
?>
        <div class="content-area">
          <div class="row mt-3">
            <div class="col-3">
              <div class="card text-white text-center bg-primary p-3">
                <i class="fa-solid fa-users-viewfinder fa-5x"></i>
                <h5 class="card-title mt-2">Customers</h5>
                <h5 class="card-title mt-2">
                  <?php echo $totalUser?>
                </h5>
              </div>
            </div>
            <div class="col-3">
              <div class="card text-white text-center bg-dark p-3">
                <i class="fa-brands fa-product-hunt fa-5x"></i>
                <h5 class="card-title mt-2">Products</h5>
                <h5 class="card-title mt-2"><?= $totalProducts;?></h5>
              </div>
            </div>
            <div class="col-3">
              <div class="card text-white text-center bg-info p-3">
                <i class="fa-solid fa-sack-dollar fa-5x"></i>
                <h5 class="card-title mt-2">Earning</h5>
                <h5 class="card-title mt-2">$500M</h5>
              </div>
            </div>
            <div class="col-3">
              <div class="card text-white text-center bg-warning p-3">
                <i class="fa-brands fa-sellsy fa-5x"></i>

                <h5 class="card-title mt-2">Orders</h5>
                <h5 class="card-title mt-2">1K</h5>
              </div>
            </div>
          </div>
        </div>
<?php include "inc/footer.php";?>

