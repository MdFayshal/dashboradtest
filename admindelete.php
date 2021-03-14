<?php
//admin permission
session_start();
  if(isset($_SESSION['username'])){
}
else{
    header('location:home.php');
}

require_once('database.php'); //database connection


//datageting section
$id = $_GET['id'];

$delete="DELETE FROM `admin` WHERE `admin`.`id` = $id";
$res=mysqli_query($connection,$delete);

if($res){
    header("Location:adminlist.php");
    echo "Delete done";
}else{
    echo "Error : Can't delete your information !!";
}

?>