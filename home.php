<?php include('header.php')?>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Dashboard</a>
        </li>
      </ul>
      <span class="navbar-text">
        <form class="container-fluid justify-content-start">
            <a class="btn btn-sm btn-outline-secondary" type="button" href="login.php">Admin</a>
            <a class="btn btn-sm btn-outline-secondary" type="button"href="teacherlogin.php">Teacher</a>
            <a class="btn btn-sm btn-outline-secondary" type="button"href="studentlogin.php">Student</a>
        </form>
      </span>
    </div>
  </div>
</nav>



<?php include('footer.php')?>