<?php include "inc/header.php";?>
<?php 
    if(isset($_SESSION)){
        if($_SESSION['auth']){
            //start here code
        }else{
            header("Location: login.php");
        }
    }else{
        header("Location: login.php");
    }
?>

    <div id="myaccount" class="section-p1 section-m1">
        <?php include "inc/account-sidebar.php";?>
        <div class="main-content">
            <div id="profile">
                <div class="photo">
                    <?php 
                        if(isset($_SESSION['auth-data']['	profile_pic'])){
                        ?>
                        <img src="<?php echo $_SESSION['auth-data']['	profile_pic'];?>" alt="" srcset="">
                        <?php
                        }else{
                        ?>
                        <img src="assets/images/people/default.png" alt="" srcset="">
                        <?php
                        }
                    ?>

                </div>
              
                <h4><?= $_SESSION['auth-data']['name'];?></h4>
                <h6><?= $_SESSION['auth-data']['email'];?></h6>
                <button class="edit">Edit</button>
                <button class="viewFullProfile">View Full Profile</button>
            </div>
        </div>
    </div>

<?php include "inc/footer.php";?>