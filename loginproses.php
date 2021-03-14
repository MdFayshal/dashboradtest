<?php
//adminpermission
session_start();
if(isset($_SESSION['username'])){
}
else{
    header('location:home.php');
}
require_once('database.php');


if (isset($_POST['login'])){
    $username = $_POST['name'];
    $userpass = $_POST['password'];
    
   
    $query = " select * from admin where ((full_name='$username' || email='$username') && addmin_pass='$userpass')" or die('Loading failed');

    $res = mysqli_query($connection,$query);
   // $row = mysqli_fetch_assoc($res);
    $rownum=mysqli_num_rows($res);
    if($rownum>0){
     while( $row = mysqli_fetch_assoc($res)){
       session_start();
       $_SESSION['username'] = $row['full_name'];
       header("location:index.php");
     }
    
    }else{
      echo'Error : Login Failed';
    }
  }



 //this is a another matho worked properly


 /* if (isset($_POST['login'])){
    $username = $_POST['name'];
    $userpass = $_POST['password'];
    
    $query = " select * from admin where ((full_name='$username' OR email='$username') AND addmin_pass='$userpass')" or die('Loading failed');
    $res = mysqli_query($connection,$query);
    $raw = mysqli_fetch_assoc($res);
     
   //this is a another matho worked properly


     if($raw==true){
         header("Location:index.php");
     }else{
       echo'error : Login Failed';
     }
    }
*/
?>