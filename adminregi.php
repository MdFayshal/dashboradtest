<?php 

include('DBheader.php');
require_once('database.php');

?>

    <div class="container form_bg">
        <div class="row  text-light">
            <div class="col-sm-3">
            </div>

            <div class="col-sm-5 offset-1 ">
                <div class="form_reg">
                    <h2 class="text-center pb-2">Admin Registration</h2>
                    <form action="superadmininsert.php" class="form-horizontal " method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="admin_pass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" name="addminsignup" class=" loginbtn btn-warning text-light">SignUp</button>
                        <a href="index.php" type="submit" class="btn  btn-secondary loginbtn my-2">Back</a>
                    </form>
                </div>
            </div>

            <div class="col-sm-3">
            </div>
        </div>
    </div>




<?php include('DBfooter.php')?>