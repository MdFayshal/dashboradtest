<?php 
include('DBheader.php');
require_once('database.php');
?>
    <div class="row  text-light">
            <div class="col-sm-3">
            
            </div>

            <div class="col-sm-6 ">
                <div class="form_reg">
                    <h2 class="text-center p-3 rgb">Student Registration</h2>
                    <form action="studentregiproses.php" class="form-horizontal " method="POST">
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="text" name="number" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-2">
                           <label for="exampleInputClasses" class="form-label pr-2 mr-3" style="font-size:18px;">Select Class</label>
                            <select name="class" class="form-select  form-select-mb py-1 " >
                                <option class="text"  value="Class Not Selected.">Select Class</option>
                                <option value="1" >One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">four</option>
                                <option value="5">five</option>
                            </select>
                           </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Roll Number</label>
                            <input type="text" name="roll_number" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="student_pass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" name="studentsignup" class=" loginbtn btn-warning text-light">SignUp</button>
                        <a href="studentlist.php" type="submit" class="btn  btn-secondary loginbtn my-2">Back</a>
                    </form>
                </div>
            </div>

            <div class="col-sm-3">
            </div>
        </div>
    




<?php include('DBfooter.php')?>
