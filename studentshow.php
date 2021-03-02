<?php 
include('DBheader.php');
require_once('database.php');
?>
<?php

$id=$_GET['id'];

$show = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($connection,$show); 

?>


<div class=" container-fluid">
<div class="container   p-5 mt-5">
    <div class="jumbotron green">
    <h3 class="display-4 text-center bg-dark text-light py-1 mb-3"><?php echo"Student ID - ".$id;?></h3>
        <table class="table table-light table-striped text-info">
        <tbody>
        <?php
                while ($sh=mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <th>First Name</th>
            <td><?php echo $sh['first_name'];?></td>

            </tr>
            <tr>
            <th>Last Name</th>
            <td><?php echo $sh['last_name'];?></td>

            </tr>
            <tr>
            <th>Phone Number</th>
            <td><?php echo $sh['mobile'];?></td>

            </tr>
            <tr>
            <th>Roll Number</th>
            <td><?php echo $sh['roll_number'];?></td>

            </tr>
            <tr>
            <th>Email Address</th>
            <td><?php echo $sh['email'];?></td>

            </tr>
            <tr>
            <th>Password</th>
            <td><?php echo $sh['student_pass'];?></td>
        
            </tr>
        <?php }?>
        </tbody>
        </table>   
    <div class="text-end">
    <a href="studentlist.php" class="btn btn-info text-light float-right"><i class="fas fa-chevron-left"></i> Back</a>
    </div>
    </div>
</div>
</div>
<?php 
include('DBfooter.php');
?>