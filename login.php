
<?php 
include('header.php');
require_once('database.php');
?>

    <div class="container loginform_bg">
        <div class="row  text-light">
            <div class="col-sm-4">
            </div>

            <div class="col-sm-4 ">
                <div class="form_log">
                    <h2 class="text-center pb-2">LOGIN</h2>
                    <form action="loginproses.php" class="form-horizontal " method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username or Email</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" name="login" class=" loginbtn btn-warning text-light">LogIn</button>
                    </form>
                </div>
            </div>

            <div class="col-sm-4">
            </div>
        </div>
    </div>




<?php include('footer.php')?>