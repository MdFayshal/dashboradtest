<?php
    session_start();
    if(!isset($_SESSION['username'])){

         header("location:login.php");
     }
?>
<?php
session_start();
session_unset();
session_destroy();

header('location:login.php') ;
die('Logout session <h3>Error</h3> <br/><h2>Error : Failed to logout</h2>');

?>