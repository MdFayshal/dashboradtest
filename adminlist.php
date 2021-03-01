<?php 
include('DBheader.php');
require_once('database.php');
?>



<?php 
$info = "SELECT * FROM admin";
$result = mysqli_query($connection,$info); 
?>


<div class=" container-fluid">
    <div class="container p-5">
        <div class="jumbotron">
            <h1 class="display-4 text-center text-light py-2 bg-dark mb-5">Admin list</h1>
        
            <table class="table table-light table-striped text-info">
                <thead>
                    <tr>
                    <th scope="col"class="text-info">Id</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($lop=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                    <th scope="row"class="text-info"><?php echo $lop['id'];?></th>
                    <td class="text-info "><?php echo $lop['full_name'];?></td>
                    <td class="text-info "><?php echo $lop['email'];?></td>
                    <td class="text-info "><?php echo $lop['addmin_pass'];?></td>
    
                    <td class="text-info ">
                    <a href="adminedit.php?id=<?php echo $lop['id'];?>" class="btn btn-sm btn-warning">Edit</a> ||
                    <a href="admindelete.php?id=<?php echo $lop['id']?>" class="btn btn-sm btn-danger text-light">Delete</a> ||
                    <a href="showadmin.php?id=<?php echo $lop['id'];?>" class="btn btn-sm btn-success">Show</a>
                    </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>

 
            
        </div>
    </div>
</div>


<?php include('DBfooter.php')?>