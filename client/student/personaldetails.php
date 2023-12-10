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

    <script defer src="./js/personalDetails.js"></script>
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
      include('./components/sidebar.php');
      ?>


     <div class="homepage">
             <?php
      include('../components/header.php');
      ?>
      <div class="main-paragraph">
      
      <div class="content-title">
     <h3 class="text-light"><i class="fa-solid fa-id-card text-warning"></i> Personal Details</h3>
     </div>
        
        


<div class="container mt-4">
  <div class="row">
    <div class="col-12 mx-auto">
      <div class="card">
        <div class="card-body bg-dark">
          <div class="row">
            <div class="col-12">

          <div class="mb-3">
                         <h5 class="text-light">Student ID</h5>
              <p class="text-light" id="studentId"> </p>
          </div>

          <div class="mb-3">
                          <h5 class="text-light">Full Name</h5>
              <p class="text-light" id="fullName"></p>
          </div>

          <div class="mb-3">
              <h5 class="text-light">Age</h5>
              <p class="text-light" id="age"></p>
          </div>

<div class="mb-3">
                <h5 class="text-light">Gender</h5>
              <p class="text-light" id="gender"></p>
</div>
<div class="mb-3">
              <h5 class="text-light">Email</h5>
              <p class="text-light" id="email"></p>
</div>

            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>





</div>

  
    </div>
    </div>


  <?php 
   include('./components/footer.php');
  ?>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  
  
  
  
</body>

</html>
