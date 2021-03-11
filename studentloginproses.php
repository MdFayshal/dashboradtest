 <?php
// require_once('database.php');


// if (isset($_POST['login'])){
//     $username = $_POST['name'];
//     $spass = $_POST['password'];
    
   
//     $query = " select * from students where ((roll_number='$username' || email='$username') && student_pass='$spass')" or die('Loading failed');

//     $res = mysqli_query($connection,$query);
//    // $row = mysqli_fetch_assoc($res);
//     $rownum=mysqli_num_rows($res);
//     if($rownum>0){
//      while( $row = mysqli_fetch_assoc($res)){
//        session_start();
//        $_SESSION['roll_number'] = $row['roll_number'];
//        $_SESSION['semail']    = $row['email'];
//       // $_SESSION['password'] = $row['password'];

//        header("location:index.php");
//      }
    
//     }else{
//       echo'Error : Login Failed error321';
//     }
//   }

require_once('database.php');


if (isset($_POST['slogin'])){
    $sname = $_POST['name'];
    $spass = $_POST['password'];
  
   
    $query = " SELECT * FROM `students` WHERE ((email='$sname' || roll_number='$sname') && student_pass='$spass')" ;
    $res = mysqli_query($connection,$query);
   // $row = mysqli_fetch_assoc($res);
    $rownum = mysqli_num_rows($res);
    if($rownum>0){
     while( $row = mysqli_fetch_assoc($res)){
       session_start();
       $_SESSION['roll_number'] = $row['roll_number'];
       $_SESSION['s.email']    = $row['email'];

       //$_SESSION['password'] = $row['password'];


       header("location:index.php");
     }
    
    }else{
      echo'Error : Login Failed data not fatch';
    }
  }
?>
<?php include('session.php')?>