<?php
require_once('database.php');


if (isset($_POST['s_login'])){

    $email = $_POST['email'];
    $pass = $_POST['password'];
    
   
    $query = " select * from `students` where (email='$email' && teacher_pass='$pass')" or die('Loading failed');

    $res = mysqli_query($connection,$query);
   // $row = mysqli_fetch_assoc($res);
    $rownum=mysqli_num_rows($res);
    if($rownum>0){
     while( $row = mysqli_fetch_assoc($res)){
       session_start();
       //$_SESSION['username']        = $row['full_name'];
       $_SESSION['studentemail']    = $row['email'];
       $_SESSION['password']        = $row['password'];

       header("location:index.php");
     }
    
    }else{
      echo'Error : Login Failed';
    }
  }

?>