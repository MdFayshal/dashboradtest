<?php
    session_start();
     if(!isset($_SESSION['teacheremail'])){

        header("location:teacherlogin.php");
    }
    require_once('database.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>AsminDashBoard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="student.css">
   
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="tindex.php"><i class="fas fa-home"></i> DashBoard<a></h3>
                <a href="tindex.php"><strong><i class="fas fa-home"></i> DB</strong></a>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#teacher" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-tie"></i>
                        Teacher
                    </a>
                    <ul class="collapse list-unstyled" id="teacher">
                        <li>
                            <a href="teacherlist.php">T.List</a>
                        </li>
                        <li>
                            <a href="teacherregi.php">T.Registration</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#student" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-graduate"></i>
                        Student
                    </a>
                    <ul class="collapse list-unstyled" id="student">
                        <li>
                            <a href="studentlist.php">S.List</a>
                        </li>
                        <li>
                            <a href="studentregi.php">S.Registration</a>
                        </li>
                        <li>
                            <a href="#">Result</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="download" onClick="pass()"><i class="fa fa-lock"></i>
Change password</a>
                </li>
                <li>
                    <a href="#" class="article"onClick="page()">button2</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-orange">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link btn btn-info btn-sm text-light ml-1" href="index.php"><i class="fas fa-eye"></i> View Site</a>
                            </li>
                            <li class="nav-item">
                                <a> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-orange text-light ml-1" href="logout.php"><i class="fas fa-sign-out-alt"></i>LogOut</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<!-- Main Containt -->            
            <section class="" id="main">

                     
            </section>
<!--END section-->
<?php 
  $email = $_SESSION['teacheremail'];
 $info = "SELECT * FROM teachers WHERE email ='$email' ";
 $result = mysqli_query($connection,$info); 
?>



    <div class="p-5">
            <h1 class="display-4 text-center text-light py-2 rgb mb-5"><?php echo 'Teacher : '.$email ?></h1>
        
            <table class="table table-light table-striped text-info">
                <thead>
                    <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($lop=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                    <td class="text-info "><?php echo $lop['first_name'];?></td>
                    <td class="text-info "><?php echo $lop['last_name'];?></td>
                    <td class="text-info "><?php echo $lop['mobile'];?></td>
                    <td class="text-info "><?php echo $lop['email'];?></td>
                    <td class="text-info "><?php echo $lop['teacher_pass'];?></td>
    
                    <td class="text-info ">
                    <a href="teacheredit.php?id=<?php echo $lop['id'];?>" class="btn btn-sm btn-warning">Edit</a> ||
                    <a href="teachershow.php?id=<?php echo $lop['id'];?>" class="btn btn-sm btn-success">Show</a>
                    </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
    </div>
           
        </div>

    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script src="input.js"></script>
</body>

</html>
          