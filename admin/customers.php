<?php include "inc/sidebarwithheader.php";?>
<?php 
  include 'libs/functions.php';
  $totalUser = countNumRows('user');
  
?>
        <div class="content-area">
          <div class="row mt-3">
            <div class="col-6">
                <h4>Customers</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $result = selectCustomer('user');

                        if(mysqli_num_rows($result) > 0){
                            foreach($result as $customer){
                    ?>
                    <tr>
                        <th scope="row"><?= $customer['id']?></th>
                        <td><?= $customer['name']?></td>
                        <td><?= $customer['name']?></td>
                        <td><?= $customer['role']?></td>
                        <td>
                        <button type="button" class="btn btn-success">Active</button>
                        </td>
                    </tr>
                    <?php        
                            }
                        }else{
                            echo "<h4>No data Avaible!</h4>";
                        }
                    ?>
                    
                </tbody>
                </table>
            </div>
          </div>
        </div>
<?php include "inc/footer.php";?>

