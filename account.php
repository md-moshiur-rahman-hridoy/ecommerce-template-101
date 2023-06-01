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

<?php include "inc/header.php";?>
    
    <div id="myaccount" class="section-p1 section-m1">
        <center><h1>Coming soon...</h1></center>
    </div>

<?php include "inc/footer.php";?>