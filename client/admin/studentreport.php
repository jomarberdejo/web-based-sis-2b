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
    <script defer src=".../js/home.js"></script>
    <script defer src="../js/logout.js"></script>
    <script defer src="../js/report.js"></script>
    
  
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


     <div class="homepage _student-report">
             <?php
      include('../components/header.php');
      ?>
      <div class="main-paragraph">
      
      <div class="content-title">
     <h3 class="text-light"><i class="fa-solid fa-file-contract text-warning"></i> Student's Report</h3>
     </div>
        
        
  <!-- Title of the system -->
  <div class="container mt-4">
    <div class="row">

      <!-- Table design for student list -->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body bg-dark">
            <div class="table-responsive">
              <div class="__data-table overflow-auto">
              <table id="datatable" class="table table-hover table-dark table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Student ID</th>
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Section</th>
                    <th>Status</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                  </tr>
                </thead>
                <tbody id="table" class="bg-dark">
                
                </tbody>
              </table>
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
   include('../components/footer.php');
  ?>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  
  
  
  
</body>

</html>
