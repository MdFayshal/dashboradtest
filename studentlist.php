<?php 

include('DBheader.php');
require_once('database.php');
?>



<?php 
$info = "SELECT students.id,students.first_name,students.last_name,students.mobile,classes.classname,students.roll_number,students.email,students.student_pass FROM students INNER JOIN classes ON students.class_id=classes.id ORDER BY students.class_id";
$result = mysqli_query($connection,$info); 
?>



    <div class="p-5">
            <h1 class="display-4 text-center text-light py-2 rgb mb-5 mx-auto">Students list</h1>
        
            <table class="table table-responsive-sm table-sm  table-light table-striped table-hover text-info pl-2">
                <thead>
                    <tr class="font ">
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Class Name</th>
                    <th scope="col">Roll Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($lop=mysqli_fetch_assoc($result)){
                ?>
                    <tr class="text-left text-info">
                    <td><?php echo $lop['first_name'];?></td>
                    <td><?php echo $lop['last_name'];?></td>
                    <td><?php echo $lop['mobile'];?></td>
                    <td><?php echo $lop['classname'];?></td>
                    <td><?php echo $lop['roll_number'];?></td>
                    <td><?php echo $lop['email'];?></td>
                    <td><?php echo $lop['student_pass'];?></td>
    
                    <td class="text-info float-right">
                   <?php if(isset($_SESSION['username'])){?>
                    <a href="studentedit.php?id=<?php echo $lop['id'];?>" class="btn xs btn-warning">Edit</a> ||
                    <a href="studentdelete.php?id=<?php echo $lop['id']?>" class="btn xs btn-danger text-light">Delete</a> ||
                    <?php }?>
                    <a href="studentshow.php?id=<?php echo $lop['id'];?>" class="btn xs btn-success">Show</a>
                    </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
    </div>



<?php include('DBfooter.php')?>