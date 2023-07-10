<?php include "inc/header.php";?>
<?php include "libs/functions.php";?>
    <div id="shop-hero" class="section-p1">
      <h4>Enjoy your shopping in bigest mall</h4>
      <div class="searchbar">
        <input type="text" name="searchbar" id="searchbar" />
        <button>
          <i class="fa-solid fa-search"></i>
        </button>
      </div>
    </div>

    <div id="product-showcase" class="section-p1 section-m1">
      <div id="feture-product">
          <?php
            $result = select('products');
            if(mysqli_num_rows($result) > 0){
              foreach($result as $product){
                $p_id = $product['id'];
                $p_name = $product['product_name'];
                $p_details = $product['product_details'];
                $p_price = $product['product_price'];
                $p_sell = $product['sell_price'];
                $p_stoke = $product['stoke'];
                $p_image = $product['product_image'];
          ?>
          <div class="product" id="p_id_<?= $p_id;?>">
            <img src="assets/images/products/<?= $p_image;?>" alt="Product" />
            <div class="p-details">
              <span class="product-brand">adidas</span>
              <h5><?= $p_name;?></h5>
              <div class="star">
                <span class="material-symbols-sharp"> star </span>
                <span class="material-symbols-sharp"> star </span>
                <span class="material-symbols-sharp"> star </span>
                <span class="material-symbols-sharp"> star </span>
                <span class="material-symbols-sharp"> star </span>
              </div>
              <h4>$<?= $p_price;?></h4>
              <form action="" method="post" ="form-submit">
                <input type="hidden" class="pid" value="<?= $p_id;?>">
                <input type="hidden" class="pname" value="<?= $p_name;?>">
                <input type="hidden" class="pprice" value="<?= $p_sell;?>">
                <input type="hidden" class="pimage" value="<?= $p_image;?>">
                <?php
                  if(isset($_SESSION['auth-data']['id'])){
                ?>
                <input type="hidden" class="uid" value="<?=$_SESSION['auth-data']['id']?>">
                <?php
                  }else{
                ?>
                <input type="hidden" class="uid" value="null">
                <?php
                  }
                ?>
                
                <button type="submit" class="cart" id="addItemButton">
                  <span class="material-symbols-sharp"> add_shopping_cart </span>
                </button>
              </form>
              
            </div>
          </div>
          <?php
              }
            }else{
              echo "<h4>No product avaiable!</h4>";
            }
          ?>
          
      </div>
      <div class="pagination">
        <ul>
            <li class="pre"><a href="#">Previous</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li class="next"><a href="#">Next</a></li>
        </ul>
      </div>
    </div>

<?php include "inc/footer.php";?>