


<?php 
include('DBheader.php');
require_once('database.php');
?>
<?php
if(isset($_POST['submit'])){

    $class = $_POST['classes'];
    $roll  =$_POST['roll'];

$det="SELECT students.first_name,students.last_name,classes.classname,students.roll_number,students.email,students.mobile FROM students INNER JOIN classes ON students.class_id=classes.id WHERE students.class_id='$class' AND students.roll_number='$roll'";
$query=mysqli_query($connection,$det);
?>

<div class="">

    <div class="jumbotron green">
    <h3 class="display-4 text-center text-light py-2 rgb  mx-auto">Student Detailes</h3>
        <table class="table table-light table-striped text-info">
        <tbody>
        <?php
              while($info=mysqli_fetch_assoc($query)){

            ?>
            <tr>
            <th>Student Name</th>
            <td><?php echo $info['first_name']." ".$info['last_name'];?></td>
            <tr>
            <th>Email Address</th>
            <td><?php echo $info['email'];?></td>
            </tr>   
            </tr>
            <tr>
            <th>Roll Number</th>
            <td><?php echo $info['roll_number'];?></td>
            </tr>
            <tr>
            <th>Class</th>
            <td><?php echo $info['classname'];?></td>
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
    <a href="getresult.php" class="btn btn-info text-light float-right"><i class="fas fa-chevron-left"></i> Back</a>
    </div>
    </div>

</div>
<?php }?>
<?php include('DBfooter.php');?>