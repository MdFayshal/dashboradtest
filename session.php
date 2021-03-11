
<?php
    if(isset($_SESSION['username'])){
     }elseif(isset($_SESSION['teacheremail'])){
     }elseif(isset($_SESSION['roll_number'])){
     }
   else{
         header('location:home.php');
     }
?>