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

    
    <script defer src="../js/logout.js"></script>
    <script defer src="../js/main.js"></script>

    <script defer src="../js/chart.js"></script>
    <script defer src="../js/dashboard.js"></script>
  
    <!-- dependencies -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
  
    <script src="https://kit.fontawesome.com/ca7101e501.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css" />
  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <title>Student Information Management System</title>
    

   
  </head>

<body>
  <div class="main">
     <?php
      include('../components/sidebar.php');
      ?>

     <div class="homepage _dashboard-homepage">
      <?php
      include('../components/header.php');
      ?>
    <div class="main-paragraph">
     
     <div class="content-title">
     <h3 class="text-light"><i class="bi bi-speedometer text-warning"></i> Dashboard
       </h3>
     </div>
     
     <div class="container mt-2">
    <div class="row dashboard-data">
      <!-- Total Students Card -->
      <div class="col-lg-4">
        <div class="card bg-dark ">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-user-graduate"></i> Total Students</h5>
            <h2 class="card-text" id="totalStudents">0</h2>

          </div>
        </div>
      </div>

      <!-- Enrolled Students Card -->
      <div class="col-lg-4">
        <div class="card bg-dark">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-check-circle"></i> Enrolled</h5>
            <h2 class="card-text" id="enrolledStudents">0</h2>

          </div>
        </div>
      </div>

      <!-- In Progress Card -->
      <div class="col-lg-4">
        <div class="card bg-dark ">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-spinner"></i> In Progress</h5>
            <h2 class="card-text" id="inProgress">0</h2>

          </div>
        </div>
      </div>

      <!-- Enrollment Rate Card -->
      <div class="col-lg-4">
        <div class="card bg-dark">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-chart-line"></i> Enrollment Rate</h5>
            <h2 class="card-text" id="enrollmentRate">0%</h2>

          </div>
        </div>
      </div>

      <!-- Male Students Card -->
      <div class="col-lg-4">
        <div class="card bg-dark">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-male"></i> Male Students</h5>
            <h2 class="card-text" id="maleStudents">0</h2>

          </div>
        </div>
      </div>

      <!-- Female Students Card -->
      <div class="col-lg-4 ">
        <div class="card bg-dark">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-female"></i> Female Students</h5>
            <h2 class="card-text" id="femaleStudents">0</h2>

          </div>
        </div>
      </div>
      
    </div>
  </div>


<div class="chart">
  <div id="radioButtons">
    <div>
      <input type="radio" id="statusRadio" name="dataRadio" value="status" checked>
      <label for="statusRadio">Status</label>
    </div>
    <div>
      <input type="radio" id="genderRadio" name="dataRadio" value="gender">
      <label for="genderRadio">Gender</label>
    </div>
  </div>

  <div class="chart-container">
    <canvas id="dashboardChart"></canvas>
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
