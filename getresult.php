<?php 

include('DBheader.php');
require_once('database.php');
?>


<div class="row  text-light">
            <div class="col-sm-3">
            </div>

            <div class="col-sm-5 offset-1  form_reg ">
                <div class="form">
                    <h2 class="text-center p-1 rgb">Get Result</h2>
                    <form action="studentresult.php" class="form-horizontal " method="POST">
                        <div class="mb-2">
                            <label for="exampleInputRoll" class="form-label">Roll Number</label>
                            <input type="text" name="roll" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="input-group form-inline mb-3">
                           <label for="exampleInputClasses" class="form-label pr-2 mr-3" style="font-size:18px;">Select Class</label>
                            <select name="classes" class="form-select  form-select-mb py-1 " >
                                <option class="text"  value="Class Not Selected.">Select Class</option>
                                <option value="1" >One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">four</option>
                                <option value="5">five</option>
                            </select>
                           </div>         
                        <button type="submit" name="submit" class=" loginbtn btn-warning text-center text-light">Show Result</button>
                        <a href="index.php" type="submit" class="btn  btn-secondary loginbtn my-2">Back</a>
                    </form>

                </div>
            </div>
            <div class="col-mb-3">
            </div>

</div>
<?php include('DBfooter.php')?>