
<?php include('session.php')?>
<?php
require_once('database.php');

if(isset($_POST['studentsignup'])){
$first_name        = $_POST['first_name'];
$last_name         = $_POST['last_name'];
$number            = $_POST['number'];
$roll_number       = $_POST['roll_number'];
$email             = $_POST['email'];
$student_pass      = $_POST['student_pass'];
$class             = $_POST['class'];

//$info = "INSERT INTO students (first_name,last_name,mobile,roll_number,email,student_pass,class_id) VALUES('$first_name','$last_name','$number','$roll_number','$email','$student_pass','$class')";
$info ="INSERT INTO `students` (`first_name`, `last_name`, `mobile`, `roll_number`, `email`, `student_pass`, `class_id`) VALUES ('$first_name ', '$last_name', '$number ', '$roll_number', '$email', '$student_pass ', '$class ')";
$result = mysqli_query($connection,$info) or die(mysqli_error($connection));

if($result == True){
    header("Location:index.php");
}else{
    echo "Error";
}
}

?>
