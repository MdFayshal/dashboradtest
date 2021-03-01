<?php
    session_start();
    if(!isset($_SESSION['username'])){

         header("location:login.php");
     }
?>
<?php
require_once('database.php');
if(isset($_POST['addminsignup'])){
$full_name   = $_POST['name'];
$email       = $_POST['email'];
$admin_pass = $_POST['admin_pass'];


$info = "INSERT INTO admin (full_name,email,addmin_pass) VALUES('$full_name','$email','$admin_pass')";

$result = mysqli_query($connection,$info) or die(mysqli_error($connection));

if($result == True){
    header("Location:index.php");
}else{
    echo "Error";
}
}

?>