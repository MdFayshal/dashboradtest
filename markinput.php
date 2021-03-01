<?php 
include('DBheader.php');
require_once('database.php');
?>
    <div class="row  text-light">
            <div class="col-sm-2">
            </div>

            <div class="col-sm-8 ">
                <div class="form_reg">
                    <h2 class="text-center p-3 rgb">Markinput</h2>
                    <form action="resultinputproses.php" class="form-horizontal " method="POST">
                        <div class="mb-2">
                            <label for="exampleInputname" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputRoll" class="form-label">Roll Number</label>
                            <input type="text" name="roll" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-2 ">
                            <label for="exampleInputClasses" class="form-label pr-2" style="font-size:18px;">Select Class</label>
                            <select class="form-select form-select-lg py-1" >
                                <option class="text" selected>Classes</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">four</option>
                                <option value="5">five</option>
                            </select>
                        </div>
                        <button type="submit" name="mark" class=" loginbtn btn-warning text-light">submit</button>
                        <a href="studenresult.php" type="submit" class="btn  btn-secondary loginbtn my-2">Back</a>
                    </form>
                </div>
            </div>

            <div class="col-sm-2">
            </div>
        </div>
    




<?php include('DBfooter.php')?>