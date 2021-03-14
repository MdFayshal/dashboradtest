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
                    <form action="getresult.php" method="POST" class="d-flex  pt-3">
                        <div class="input-group form-inline mb-3">
                           <!-- <label for="exampleInputClasses" class="form-label pr-2 mr-3" style="font-size:18px;">Select Class</label>-->
                            <select name="classes" class="form-select  form-select-mb py-1 " >
                                <option class="text"  value="Class Not Selected.">Select Class</option>
                                <option value="1" >One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">four</option>
                                <option value="5">five</option>
                            </select>
                           </div>
                           <div class="md-4">
                            <label for="exampleInputname" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputRoll" class="form-label">Roll Number</label>
                            <input type="text" name="roll" class="form-control" id="exampleInputEmail1">
                        </div> 

                            <div class=" form-inline mb-3  ">
                            
                            <button type="submit" name="submit" class=" btn btn-warning text-light float-right" style="margin-left:-10px;">Select</button>
                            </div> 
                                                  
                    </form>
                    <form action="studentmark.php" class="form-horizontal " method="POST">
                    <div class="md-4">
                            <label for="exampleInputname" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputRoll" class="form-label">Roll Number</label>
                            <input type="text" name="roll" class="form-control" id="exampleInputEmail1">
                        </div>
                        
                        

                    <?php 
                        $id = null;                      
                        if(isset($_POST['submit'])){
                            
                            $id = $_POST['classes'];  // Storing Selected Value In Variable
                           // echo "You have selected class : " .$id;  // Displaying Selected Value
                            }
                        $subject = "SELECT * FROM subjects WHERE classid = '$id' ";
                        $sub = mysqli_query($connection,$subject); 
                       //  $sub=mysqli_fetch_all($res,MYSQLI_ASSOC);
                        //  print_r($sub);
                    ?>
                    <label class="form-label" style="font-size:18px" ><b>You have Selected Class : <?php echo $id;?></b></label>
                   
</div>
<?php include('DBfooter.php')?>