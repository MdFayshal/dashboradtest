
<?php
    if(isset($_SESSION['username'])){
       $admin='';
     }elseif(isset($_SESSION['teacheremail'])){
       $teacher='';
     }elseif(isset($_SESSION['roll_number'])){
       $student='';
     }
   else{
         header('location:home.php');
     }
?>