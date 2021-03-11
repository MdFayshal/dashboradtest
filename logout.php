
<?php
include('session.php');
session_start();
session_unset();
session_destroy();

header('location:home.php') ;
die('Logout session <h3>Error</h3> <br/><h2>Error : Failed to logout</h2>');

?>
<?php include('session.php')?>