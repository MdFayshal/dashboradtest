<?php 
include('DBheader.php');
require_once('database.php');
?>
    <div class="row  text-light">
            <div class="col-sm-3">
            </div>

            <div class="col-sm-6 ">
                <div class="form_reg">
                    <h2 class="text-center p-3 rgb">Teacher Registration</h2>
                    <form action="teacherregiproses.php" class="form-horizontal " method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="text" name="number" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="teacher_pass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" name="teachersignup" class=" loginbtn btn-warning text-light">SignUp</button>
                        <a href="index.php" type="submit" class="btn  btn-secondary loginbtn my-2">Back</a>
                    </form>
                </div>
            </div>

            <div class="col-sm-3">
            </div>
        </div>
    




<?php include('DBfooter.php')?>