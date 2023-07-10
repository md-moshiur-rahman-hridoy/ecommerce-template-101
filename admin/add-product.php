<?php include "inc/sidebarwithheader.php";?>
<?php 
  include 'libs/functions.php';

  if (isset($_POST['add_product_sumit'])) {
    $pName = $_POST['pName'];
    $stoke = $_POST['stoke'];
    $pPrice = $_POST['pPrice'];
    $sellPrice = $_POST['sellPrice'];
    $file = $_FILES['product_image'];
    $pDetails = $_POST['pDetails'];

    if ($pName==""||$stoke==""||$pPrice==""||$sellPrice==""||$file==""||$pDetails=="") {
        $message = "<div class='alert-danger'>Product feild cannot be empty!</div>";
    }else{
        // prepare file to upload
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];
        // file extension
        $fileEtx = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileEtx));

        // accepted extention
        $allowExt = array('jpg', 'jpeg','png');
        
        // checking valid extention
        if(in_array($fileActualExt, $allowExt)){
            if($fileError===0){
                if($fileSize<500000){
                    $newFileName = uniqid('', true).".".$fileActualExt;
                    $fileDestination = "../assets/images/products/".$newFileName;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    try {
                        $query = "INSERT INTO `products` (`id`, `product_name`, `product_details`, `product_image`, `product_price`, `stoke`, `sell_price`, `create_time`) VALUES (NULL, '$pName', '$pDetails', '$newFileName', '$pPrice', '$stoke', '$sellPrice', current_timestamp())";
                    $result = mysqli_query(dbconn(), $query);
                    } catch (mysqli_sql_exception $e) {
                        var_dump($e);
                        exit;
                    }
                    if ($result) {
                        $message = "<div class='alert alert-success'>You product sucessfully Created in Database.</div>";
                    }else{
                        $message = "<div class='alert alert-danger'>Error! product not uploaded</div>";
                    }
                }else{
                    $message = "<div class='alert alert-danger'>File cann't upload! File size is too long.</div>";
                }
            }else{
                $message = "<div class='alert alert-danger'>Error, File cann't upload!</div>";
            }
        }else{
            $message = "<div class='alert alert-danger'>Invalid file! use png/jpg/jpeg only.</div>";
        }
    }
  }
  
?>
        <div class="content-area">
          <div class="row mt-3 mb-3">
            <div class="col-6">
                <h4>Create a new product</h4>
            </div>
            <div>
                <?php 
                    if (isset($message)) {
                        echo $message;
                    }
                ?>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row mt-3">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="pName" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Stoke</label>
                            <input type="number" name="stoke" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Regular Price</label>
                            <input type="number" name="pPrice" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                <div class="col-4">
                        <div class="form-group">
                            <label for="">Sell Price</label>
                            <input type="number" name="sellPrice" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" name="product_image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Product Details</label>
                    <textarea name="pDetails" class="form-control" cols="30" rows="6"></textarea>
                </div>
                <input type="submit" value="Save Product" class="btn btn-success mt-5" name="add_product_sumit">
            </form>
          </div>
        </div>
<?php include "inc/footer.php";?>
