<?php 
include('DBheader.php');
require_once('database.php');
?>



<?php 
$info = "SELECT * FROM students";
$result = mysqli_query($connection,$info); 
?>



    <div class="p-5">
            <h1 class="display-4 text-center text-light py-2 rgb mb-5 mx-auto">Students list</h1>
        
            <table class="table table-light table-striped text-info">
                <thead>
                    <tr class="font">
                    <th scope="col"class="text-info">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone Number</th>
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
                    <th scope="row"class="text-info"><?php echo $lop['id'];?></th>
                    <td><?php echo $lop['first_name'];?></td>
                    <td><?php echo $lop['last_name'];?></td>
                    <td><?php echo $lop['mobile'];?></td>
                    <td><?php echo $lop['roll_number'];?></td>
                    <td><?php echo $lop['email'];?></td>
                    <td><?php echo $lop['student_pass'];?></td>
    
                    <td class="text-info ">
                    <a href="studentedit.php?id=<?php echo $lop['id'];?>" class="btn xs btn-warning">Edit</a> ||
                    <a href="studentdelete.php?id=<?php echo $lop['id']?>" class="btn xs btn-danger text-light">Delete</a> ||
                    <a href="studentshow.php?id=<?php echo $lop['id'];?>" class="btn xs btn-success">Show</a>
                    </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
    </div>



<?php include('DBfooter.php')?>