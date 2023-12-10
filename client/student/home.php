<?php 
  include('../common/check_auth.php');
?>

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
  

  <!-- dependencies -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>

  <script src="https://kit.fontawesome.com/ca7101e501.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css" />

  
  <title>Student Information Management System</title>

 
</head>

<body>
  
  <div class="main">

         <?php
      include('./components/sidebar.php');
      ?>
    
 
    
    <div class="homepage">
      <?php
      include('../components/header.php');
      include('../components/home_content.php');
      ?>
   

  </div>
  </div>


    <?php 
   include('./components/footer.php');
  ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  

 
</body>

</html>

