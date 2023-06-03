<?php include "inc/header.php";?>
<?php 
    session_start();
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
            <h4 class="welcom-message">Welcome, <?php echo $_SESSION['auth-data']['name'];?></h4>
        </div>
    </div>

<?php include "inc/footer.php";?>