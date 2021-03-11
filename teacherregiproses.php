
<?php include('session.php');?>
<?php
require_once('database.php');


if(isset($_POST['teachersignup'])){
$first_name   = $_POST['first_name'];
$last_name   = $_POST['last_name'];
$number       = $_POST['number'];
$email        = $_POST['email'];
$teacher_pass = $_POST['teacher_pass'];


$info = "INSERT INTO teachers (first_name,last_name,mobile,email,teacher_pass) VALUES('$first_name','$last_name','$number','$email','$teacher_pass')";

$result = mysqli_query($connection,$info) or die(mysqli_error($connection));

if($result == True){
    header("Location:index.php");
}else{
    echo "Error";
}
}

?>
