<?php
include('DBheader.php');
require_once('database.php');

$id = $_GET['id'];
$show = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($connection,$show); 
 
?>


<div class="container my-5 ">
    <div class="jumbotron rgb py-5 ">
        <h1 class="display-4 text-center text-light bg-info py-3 my-5">EditForm</h1>
        <form class="form-horizontal offset-3" action="studentedit.php" method="GET" name="form">
        <?php
                while ($sh = mysqli_fetch_assoc($result)){
            ?>
        <div class="row mb-3">
                <label class="col-sm-2 col-form-label text-info">ID-Number</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="id" value="<?php echo $id;?>">
                </div>
            </div>       
        <div class="row mb-3">
                <label class="col-sm-2 col-form-label text-info ">First Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="first_name" value="<?php echo $sh['first_name'];?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label text-info ">Last Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="last_name" value="<?php echo $sh['last_name'];?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label text-info ">Phone Number</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="number" value="<?php echo $sh['mobile'];?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label text-info ">Roll Number</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="roll_number" value="<?php echo $sh['roll_number'];?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label text-info">Email Address</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="email" value="<?php echo $sh['email'];?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label text-info">Password</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="studentpass" value="<?php echo $sh['student_pass'];?>">
                </div>
            </div>
            <div class="offset-2">
            <button type="submit" name="submit" class="btn btn-success text-light mr-3">Update</button>
            <button type="reset" class="btn btn-warning text-light">Reset</button>
            <a href="studentlist.php"type="submit"  class="btn btn-secondary text-light float-right"><i class="fas fa-chevron-left"></i> Back</a>
            </div>
            <?php } ?>
        </form>
            


    </div>
</div>

<?php
if(isset($_GET["submit"])){
    $first_name       = $_GET['first_name'];
    $last_name        = $_GET['last_name'];
    $number           = $_GET['number'];
    $roll_number      = $_GET['roll_number'];
    $email            = $_GET['email'];
    $studentpass      = $_GET['studentpass'];
    $id               = $_GET['id'];


    $update = "UPDATE students SET first_name = '$first_name',last_name = '$last_name',mobile = '$number',roll_number='$roll_number', email = '$email',student_pass=' $studentpass' WHERE id = $id";
    $updated = mysqli_query($connection,$update);

    if($updated){
        
        echo "<script>alert('Update Done.')</script>";
        //header("Location:studentlist.php");
        
    }else{
        echo "--------------------------------File To Updated";
    }
                             
}

?>


<?php include('DBfooter.php')?>