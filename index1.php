<?php
    session_start();
    if(!isset($_SESSION['username'])){

         header("location:login.php");
     }
?>
<?php include('header.php');?>

<div class="container form_bg py-5">
    <div class="row  text-light">
        <div class="col-sm-4">
            
        </div>

        <div class="col-sm-4 ">
            <h1>this is dashboard</h1>
        </div>

        <div class="col-sm-2 offset-1 ">
            <a href="adminregi.php" class="btn btn-info">AddAdmin</a>
        <a href="logout.php" class="btn btn-lime mt-2">LogOut</a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>



