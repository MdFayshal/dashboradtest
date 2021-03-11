
<?php
    session_start();
    if(isset($_SESSION['username'])){

require_once('database.php');
$id = $_GET['id'];

$delete="DELETE FROM `students` WHERE `students`.`id` = $id";
$res=mysqli_query($connection,$delete);

if($res){
    header("Location:studentlist.php");
    echo "Delete done";
}else{
    echo "Error : Can't delete your information !!";
}
    }else{

        
       // echo'<script>alert("NEEED ADMIN PERMITION...!"); window.location="studentlist.php";</script>';
        
        header("location:home.php");
}
?>
