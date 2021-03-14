<?php
include('DBheader.php');
require_once('database.php');

 
$email=  $_SESSION['teacheremail'];
$show = "SELECT teachers.id,teachers.email,teachers.teacher_pass FROM teachers WHERE teachers.email='$email'";
$result = mysqli_query($connection,$show); 
 
?>


<div class="container my-5 ">
        <h1 class="display-4 text-center text-light rgb py-3 my-5">Change Password</h1>
      
        <?php
                while ($sh = mysqli_fetch_assoc($result)){
            ?>
            <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <form class="form-horizontal" action="teacherchangepass.php" method="GET" name="form">
        <label for="exampleInputPassword1" class="form-label">Current Password</label>
        <div class="mb-3"><input type="password" class="form-control" id="exampleInputPassword0" placeholder="<?php echo $sh['teacher_pass']?>"></div>
        <label for="exampleInputPassword1" class="form-label">New Password</label>
        <div class="mb-3"><input type="password" name="pass2" class="form-control" id="exampleInputPassword1" placeholder="Your New password"></div>
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <div class="mb-3"><input type="password"name="pass1" class="form-control" id="exampleInputPassword2" placeholder="Confirm New Password"></div>
        
        <button type="submit" name="submit" class="btn btn-success text-light mr-3">change Password</button>
        
        <button type="reset" class="btn btn-warning text-light">Reset</button>

        <a href="tdata.php"type="submit"  class="btn btn-secondary text-light float-right"><i class="fas fa-chevron-left"></i> Back</a>
            
        </form>
        </div>
        <div class="col-md-2"></div>
        </div>

    
            <?php } ?>
      
            


    </div>


<?php
if(isset($_GET["submit"])){
    $tpass = $_GET['pass1'];
    $cpass = $_GET['pass2'];
    if($tpass==$cpass){

    //$update = "UPDATE students SET student_pass=' $studentpass' WHERE students.class_id=1 AND students.roll_number=1001";
    $update = "UPDATE `teachers` SET `teacher_pass` = '$tpass' WHERE teachers.email='$email'";
    $updated = mysqli_query($connection,$update);

    if($updated){
        
        echo "<script>alert('Update Done.')</script>";
        //header("Location:studentlist.php");
        
    }else{
        echo "--------------------------------File To Updated";
    }
}else{
    echo '<script> alert("Failed :\nPassword Not Match...!\nPlease confirm your password");</script>';
}     
    
}

?>

<?php include('DBfooter.php')?>