
<?php 
include('DBheader.php');
require_once('database.php');
?>
<?php

$id=$_GET['id'];

$show = "SELECT * FROM admin WHERE id = $id";
$result = mysqli_query($connection,$show); 

?>


<div class=" container-fluid">
<div class="container   p-5 mt-5">
    <div class="jumbotron green">
    <h3 class="display-4 text-center bg-dark text-light py-1 mb-3"><?php echo"Admin ID - ".$id;?></h3>
        <table class="table table-light table-striped text-info">
        <tbody>
        <?php
                while ($sh=mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <th>User Name</th>
            <td><?php echo $sh['full_name'];?></td>

            </tr>
            <tr>
            <th>Email Address</th>
            <td><?php echo $sh['email'];?></td>

            </tr>
            <tr>
            <th>Password</th>
            <td><?php echo $sh['addmin_pass'];?></td>
        
            </tr>
        <?php }?>
        </tbody>
        </table>   
    <div class="text-end">
    <a href="adminlist.php" class="btn btn-info text-light float-right"><i class="fas fa-chevron-left"></i> Back</a>
    </div>
    </div>
</div>
</div>







<?php include('DBfooter.php')?>