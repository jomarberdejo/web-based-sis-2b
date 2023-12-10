<?php
session_start();

if (isset($_SESSION['logged-in']) || $_SESSION['logged-in'] === true) {
    if ($_SESSION['user_role'] === 'Admin') {
  header('Location: ../admin/home.php'); 
    
    exit();
}
else if ($_SESSION['user_role'] === 'Student'){
   header('Location: ../student/home.php');
    exit();
}
}




