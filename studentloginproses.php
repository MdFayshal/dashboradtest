<?php
require_once('database.php');


if (isset($_POST['slogin'])){
    $sname = $_POST['name'];
    $spass = $_POST['password'];
    
   
    $query = " select * from `students` where ((roll_number='$sname' || email='$sname') && student_pass='$spass')" or die('Loading failed Error query');

    $res = mysqli_query($connection,$query);
   // $row = mysqli_fetch_assoc($res);
    $rownum = mysqli_num_rows($res);
    if($rownum>0){
     while( $row = mysqli_fetch_assoc($res)){
       session_start();
       $_SESSION['id'] = $row['id'];
       $_SESSION['roll_number'] = $row['roll_number'];
       $_SESSION['studentemail']    = $row['email'];
       $_SESSION['password'] = $row['password'];
       $_SESSION['first_name'] = $row['first_name'];
       $_SESSION['last_name'] = $row['last_name'];
       $_SESSION['phone_number'] = $row['mobile'];

       header("location:s_index.php");
     }
    
    }else{
      echo'Error : Login Failed';
    }
  }
?>