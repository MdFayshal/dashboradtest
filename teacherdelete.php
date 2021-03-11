<?php include('session.php');?>
<?php
require_once('database.php');
$id = $_GET['id'];

$delete="DELETE FROM `teachers` WHERE `teachers`.`id` = $id";
$res=mysqli_query($connection,$delete);

if($res){
    header("Location:teacherlist.php");
    echo "Delete done";
}else{
    echo "Error : Can't delete your information !!";
}

?>