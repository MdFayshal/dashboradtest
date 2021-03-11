<?php
include('session.php');
require_once('database.php');

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