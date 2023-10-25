<?php

session_start();
include("./base.php");

if ((isset($_SESSION['logged-in'])) || isset($_SESSION['logged-in']) === true) {
    if ($_SESSION['user_role'] === 'Admin') {
    header('Location: ./client/admin/home.php');
    exit();
}

else if ($_SESSION['user_role'] === 'Student'){
   header('Location: ./client/student/home.php');
    exit();
}
}

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

    <link rel="stylesheet" href="<?= $baseUrl ?>client/css/login.css">
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
 
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>

  
  <!-- js links -->
  
    <script defer src="<?= $baseUrl ?>client/js/login.js"></script>
  

  <!-- dependencies -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">



  
  <title>Student Information Management System</title>
 
 
</head>

<body>





  <section>
  <nav>
      <ul>
        <li><a href="./index.php">Login</a></li>
        <li><a href="#" class="active">Register</a></li>
      </ul>
    </nav>

    <div class="container">
      <div class="form-container">
        <form id="login-form" class="form">
          <h2>Register</h2>
          <hr>
          <div class="form-control " id="user-shakes">

            <span class="icons"><img src="./client/icons/user-icon.png" alt=""></span>
            <input 
            type="text" 
            id="register-username" 
            placeholder="Username" autocomplete="off">
          </div>
          <div class="form-control " id="pass-shakes">
            <span class="icons"><img src="./client/icons/pass-icon.png" alt=""></span>

            <input 
            type="password" 
            id="register-password"
            autocomplete="off"
            placeholder="Password">
           
            <img src="./client/icons/show.png" alt="" class="toggle-password" onclick="toggleSignupPassword()"></span>
          </div>

          <button onclick="validateSignUp(event)">Sign Up</button>


        </form>
      </div>
    </div>
  </section>
  
  



</body>

</html>

