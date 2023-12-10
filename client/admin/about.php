<?php 
  include('../common/check_auth.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Student Information Management System">
    <meta name="author" content="Jomar M. Berdejo">
  
    <!-- css links -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="../css/footer.css">
    
    <!-- js links -->
      <script src="../js/protected.js"></script>
    <script defer src="../js/home.js"></script>
    <script defer src="../js/logout.js"></script>
  
    
  
    <!-- dependencies -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
  
    <script src="https://kit.fontawesome.com/ca7101e501.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css" />
  
    
    <title>Student Information System</title>
   
   
  </head>

<body>
  <div class="main">
     <?php
      include('../components/sidebar.php');
      ?>

  
      
     <div class="homepage">
      <?php
      include('../components/header.php');
      ?>
      
      <div class="main-paragraph bg-dark">

  <div class="container mt-4 ">
    <div class="row ">
      <div class="col-lg-6">
      
        <h2 class="heading _heading"><i class="fas fa-user-graduate _about-icon"></i>EVSU-CC 2nd Year IT Student Information System</h2>
        <p class="subheading _subheading">Empowering IT Students with Efficient Information Management</p>
        <p>
           By using the system, administrators can quickly access and update student data, reducing the likelihood of errors and improving the collection and storage of students' data.
        </p>
        <br>
        <p>
          With a user-friendly interface, the system enables administrators to efficiently track and manage student information and facilitate the enrollment process. It helps simplify administrative tasks and provides easy access to students' data.
        </p>
        <br>
        <p>If you have any questions or feedback about the IT Student Information System, please contact us <a href="mailto:berdejojomar@gmail.com"><i class="fas fa-envelope"></i></a>.</p>
      </div>
      <div class="col-lg-6 _key-features">
        <div class="card _about-card bg-primary">
          <div class="card-body _about-card-body">
            <h5 class="card-title"><i class="fas fa-tasks"></i> Key Features</h5>
            <ul class="list-group _about-list-group">
              <li class="list-group-item"><i class="fas fa-user-graduate"></i> Student Information Management</li>
              <li class="list-group-item"><i class="fas fa-sign-in-alt"></i> Admin Login</li>
              <li class="list-group-item"><i class="fas fa-users"></i> Total Student Tracking</li>
              <li class="list-group-item"><i class="fas fa-check-circle"></i> Enrollment Status Tracking</li>
              <li class="list-group-item"><i class="fas fa-venus-mars"></i> Gender Tracking</li>
              <li class="list-group-item"><i class="fas fa-search"></i> Student Searching</li>
              <li class="list-group-item"><i class="fas fa-file-alt"></i> Generate Student Report</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>



</div>

</div>
</div>


  <?php 
   include('../components/footer.php');
  ?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  


</body>

</html>
