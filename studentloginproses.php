 <?php
require_once('database.php');


if (isset($_POST['slogin'])){
    $class =$_POST['class'];
    $roll = $_POST['name'];
    $spass = $_POST['password'];
    
  
   
    $query = " SELECT * FROM `students` WHERE (roll_number='$roll'AND class_id='$class' AND student_pass='$spass')" ;
    $res = mysqli_query($connection,$query);

    $rownum = mysqli_num_rows($res);
    if($rownum>0){
     while( $row = mysqli_fetch_assoc($res)){
       session_start();
       $_SESSION['roll_number'] = $row['roll_number'];
       $_SESSION['class'] = $row['class_id'];
       header("location:index.php");
     }
    
    }else{
      echo'Error : Login Failed data not fatch';
    }
  }
?>
<?php //include('session.php')?>