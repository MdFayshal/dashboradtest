<?php 

include('DBheader.php');
require_once('database.php');
?>


<div class="row  text-light">
            <div class="col-sm-3">
            </div>

            <div class="col-sm-5 offset-1  form_reg ">
                <div class="form">
                    <h2 class="text-center p-1 rgb">Markinput</h2>
                    <form action="studentmark.php" method="POST" class="d-flex  pt-3">
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
                        $class = null;                      
                        if(isset($_POST['submit'])){
                            
                            $class = $_POST['classes'];
                           $_SESSION['classes'] = $class;
                            }
                        $info = "SELECT * FROM subjects WHERE classid = '$class' ";
                        $res = mysqli_query($connection,$info); 
                  
                    ?>
                    <label class="form-label" style="font-size:18px" name="<?php echo $class;?>" ><b>You have Selected Class : <?php echo $class;?></b></label>
                       
                    <?php
                        while($sub=mysqli_fetch_assoc($res)){
                    
                    ?> 
                        <div class="input-group input-group-mb mb-3 text-center">
                        <span class="input-group-text " id="inputGroup-sizing-sm" style="width:110px;"><?php echo ucfirst($sub['subjectname']);?></span>
                <input type="text" class="form-control" style="width:25px;" placeholder="class <?php echo ucfirst($sub['subjectname']);?>" name="mark[<?php echo ucfirst($sub['subjectname']);?>][]">
                        </div>
                        <?php }?>
                        <button type="submit" name="msubmit" class=" loginbtn btn-warning text-light">submit</button>
                        <a href="studenresult.php" type="submit" class="btn  btn-secondary loginbtn my-2">Back</a>
                    </form>

                </div>
            </div>
            <div class="col-mb-3">
            </div>

</div>
<?php



if(isset($_POST['msubmit'])){

        $class = $_SESSION['classes'];
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $data = $_POST['mark'];

        foreach($data as $subjects => $value){
            
            
            foreach($value as $key=>$marks ){
           
       

         $insert="INSERT INTO `results` ( `subjects`, `class_id`, `mark`, `roll_number`) VALUES ('$subjects', '$class', '$marks', '$roll')";


 $result = mysqli_query($connection,$insert) or die(mysqli_error($connection));
 if($result==false){
     echo "connection failed";
 }

}

}
}


?>
<?php include('DBfooter.php')?>