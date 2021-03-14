<?php

    include('DBheader.php');
    require_once('database.php');
    include('session.php');   
?>     
<?php

$roll  = $_SESSION['roll_number'];
$class = $_SESSION['class'];

$show = "SELECT students.id,students.first_name,students.last_name,classes.classname,students.roll_number,students.mobile,students.email,students.student_pass FROM `students` INNER JOIN classes ON students.class_id=classes.id WHERE `roll_number` = '$roll'AND `class_id`='$class'";

$result = mysqli_query($connection,$show); 

?>


<div>
<div >
    <div class="jumbotron green">
    <?php
                while ($sh=mysqli_fetch_assoc($result)){
            ?>
    <h3 class="display-4 text-center bg-dark text-light py-1 mb-3"><?php echo"Student ID - ".$sh['roll_number'];?></h3>
        <table class="table table-light table-striped text-info">
        <tbody>
   
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
            <th>Class Name</th>
            <td><?php echo $sh['classname'];?></td>

            </tr>
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
        <?php 
$info = "SELECT results.subjects,results.mark FROM results WHERE results.roll_number='$roll'AND results.class_id='$class'";
$result = mysqli_query($connection,$info); 
?>



    <div>
            <h1 class="display-5 text-center bg-dark text-light py-1">Result</h1>
        
            <table class="table  table-sm  table-light table-striped table-hover text-info pl-2">
                <thead>
                    <tr class="font">
                    <th scope="col" class="pl-5">Subjects</th>
                    <th scope="col">Mark</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($lop=mysqli_fetch_assoc($result)){
                ?>
                    <tr class=" text-info">
                    <td class="pl-5"><?php echo $lop['subjects'];?></td>
                    <td><?php echo $lop['mark'];?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
    </div>   
    <div class="text-end">
    <a href="index.php" class="btn btn-info text-light float-right"><i class="fas fa-chevron-left"></i> Back</a>
    </div>
    </div>
</div>
</div>

<?php include('DBfooter.php')?>