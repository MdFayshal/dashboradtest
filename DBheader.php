<?php session_start();?>
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
    <link rel="stylesheet" href="studentmark.css">
    
   
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
</head>

<body>
    <?php if(isset($_SESSION['username'])){?>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="index.php"><i class="fas fa-home"></i> DashBoard<a></h3>
                <a href="index.php"><strong><i class="fas fa-home"></i> DB</strong></a>
            </div>

            <ul class="list-unstyled components">
        
                <li class="active">
                    <a href="#admin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-user-cog"></i>
                        Admin
                    </a>
                    <ul class="collapse list-unstyled" id="admin">
                        <li>
                            <a href="adminregi.php">New Admin</a>
                            
                        </li>
                        <li>
                            <a href="adminlist.php">Admin List</a>
                        </li>
                    </ul>
                    
                </li>
 

    <!--Teacher-->
    
                <li>
                    <a href="#teacher" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-tie"></i>
                        Teacher
                    </a>
                    <ul class="collapse list-unstyled" id="teacher">
                  
                        <li>
                            <a href="teacherlist.php">T. List</a>
                        </li>                  
                        <li>
                            <a href="teacherregi.php">T. Registration</a>
                        </li>
                    </ul>
                </li>
 
        <!--Student-->        
                <li>
                    <a href="#student" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-graduate"></i>
                        Student
                    </a>
                    <ul class="collapse list-unstyled" id="student">
                        <li>
                            <a href="studentregi.php">S. Registration</a>
                        </li>
                
                        <li>
                            <a href="studentlist.php">S. List</a>
                        </li>
                        <li>
                            <a href="getresult.php">Get Result</a>
                        </li>
                        <li>
                            <a href="studentmark.php">Input Mark</a>
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
                                <a class="nav-link btn btn-info btn-sm text-light ml-1" href="home.php"><i class="fas fa-eye"></i> View Site</a>
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


    <!--Teacher-->
<?php }elseif(isset($_SESSION['teacheremail'])){?>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="index.php"><i class="fas fa-home"></i> DashBoard<a></h3>
                <a href="index.php"><strong><i class="fas fa-home"></i> DB</strong></a>
            </div>

            <ul class="list-unstyled components">    
    <!--Teacher-->
    
                <li>
                    <a href="#teacher" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-tie"></i>
                        Teacher
                    </a>
                    <ul class="collapse list-unstyled" id="teacher">        
                        <li>
                            <a href="tdata.php">My Details</a>
                        </li>
                    
                        <li>
                            <a href="teacherregi.php">T. Registration</a>
                        </li>
                    </ul>
                </li>
 
        <!--Student-->        
                <li>
                    <a href="#student" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-graduate"></i>
                        Student
                    </a>
                    <ul class="collapse list-unstyled" id="student">
                        <li>
                            <a href="studentregi.php">S. Registration</a>
                        </li>
                
                        <li>
                            <a href="studentlist.php">S. List</a>
                        </li>
                        <li>
                            <a href="getresult.php">Get Result</a>
                        </li>
                        <li>
                            <a href="studentmark.php">Input Mark</a>
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
                                <a class="nav-link btn btn-info btn-sm text-light ml-1" href="home.php"><i class="fas fa-eye"></i> View Site</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link btn btn-secondary btn-sm text-light ml-1" href="teacherchangepass.php"><i class="fa fa-lock"></i> Change Password</a>
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

       <!--END teacher--> 

<?php }elseif(isset($_SESSION['roll_number'])){?>
<!--START Student--->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="index.php"><i class="fas fa-home"></i> DashBoard<a></h3>
                <a href="index.php"><strong><i class="fas fa-home"></i> DB</strong></a>
            </div>

            <ul class="list-unstyled components">

        <!--Student-->        
                <li>
                    <a href="#student" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-graduate"></i>
                        Student
                    </a>
                    <ul class="collapse list-unstyled" id="student">
                        <li>
                            <a href="studentregi.php">S. Registration</a>
                        </li>
                        <li>
                            <a href="#">Result</a>
                        </li>
                   
                        <li>
                            <a href="sdata.php">My Result</a>
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
                                <a class="nav-link btn btn-info btn-sm text-light ml-1" href="home.php"><i class="fas fa-eye"></i> View Site</a>
                            </li>
                            <li class="nav-item">
                                <a> </a>
                            </li>
                            <li class="nav-item">
                                <a href="changestudentpass.php" class=" nav-link btn btn-sm text-light btn-secondary ml-1"><i class="fa fa-lock"></i> Change password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-orange text-light ml-1" href="logout.php"><i class="fas fa-sign-out-alt"></i>LogOut</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

<?php }?>

<!-- Main Containt -->            
            <section class="" id="main">
          