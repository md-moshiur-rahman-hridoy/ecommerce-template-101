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
        <div class="sidebar">
            <ul>
                <li>
                    <i class="fa-solid fa-receipt"></i>
                    <a href="#">My Orders</a>
                </li>
                <li>
                    <i class="fa-solid fa-truck"></i>
                    <a href="#">Delivery Details</a>
                </li>
                <li>
                    <i class="fa-solid fa-user"></i>
                    <a href="#">Profile</a>
                </li>
                <li>
                <i class="fa-solid fa-gear"></i>
                    <a href="#">Settings</a>
                </li>
                <li>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a href="./logout.php">Logout</a>
                </li>
            </ul>
        </div>
        <div class="main-content">
            <h4>Welcome, <?echo $_SESSION['auth-data'];?></h4>
        </div>
    </div>

<?php include "inc/footer.php";?>