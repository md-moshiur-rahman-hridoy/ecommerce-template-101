<?php include "inc/header.php";?>

    <div id="cart" class="section-p1">
        <div class="cart-basket">
          <h4>All list of your cart items</h4>
          <?php 
              if($_SESSION['auth']==true){
              ?>
              <table>
                <thead>
                  <th>Photo</th>
                  <th>Product name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                </thead>
                <tbody>
                  <td><img src="assets/images/products/f1.jpg" alt="p1" /></td>
                  <td>Casulal t-shir men</td>
                  <td>
                    <div class="qt">
                      <i class="fa-solid fa-minus" id="qtMinus"></i>
                      <input
                        type="text"
                        name="quantity"
                        id="productQuantity"
                        value="1"
                      />
                      <i class="fa-solid fa-plus" id="qtPlus"></i>
                    </div>
                  </td>
                  <td class="totalPrice">10000</td>
                </tbody>
              </table>
            </div>
            <div class="subtotal">
              <h4>Subtotal</h4>
              <div class="count-row">
                  <p>Product price</p>
                  <p class="pPrice">12035</p>
              </div>
              <div class="count-row">
                  <p>Vat (0.3%)</p>
                  <p class="vPrice">12035</p>
              </div>
              <div class="count-row">
                  <p>Delivery charge</p>
                  <p class="dPrice">60</p>
              </div>
              <div class="count-row">
                  <b>Total</b>
                  <b class="subTotalPrice">600000</b>
              </div>
            
              <?php
                  }else{
                      header('Location: login.php');
                  }
          ?>
        </div>
    </div>

<?php include "inc/footer.php";?>