<?php

     include('DBheader.php');
     require_once('database.php');
  
?>

<?php 
$teacher = $_SESSION['teacheremail'];
 $info   = "SELECT * FROM teachers WHERE email ='$teacher' ";//$teacher decleared in DBheader
 $result = mysqli_query($connection,$info); 
?>



    <div class="p-5">
    <h1 class="display-4 text-center text-light py-2 rgb mb-5">My Detailes</h1>


                    
            <table class="table table-light table-striped text-info">
                <thead>
                    <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // while ($lop=mysqli_fetch_assoc($result)){
                ?>
                    <?php
                while ($lop=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                    <td class="text-info "><?php echo $lop['first_name'];?></td>
                    <td class="text-info "><?php echo $lop['last_name'];?></td>
                    <td class="text-info "><?php echo $lop['mobile'];?></td>
                    <td class="text-info "><?php echo $lop['email'];?></td>
                    <td class="text-info "><?php echo $lop['teacher_pass'];?></td>
    
                    <td class="text-info ">
                     <a href="teachershow.php?id=<?php echo $lop['id'];?>" class="btn btn-sm btn-success">Show</a>
                    </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
    </div>
           
       <?php include('DBfooter.php') ?>