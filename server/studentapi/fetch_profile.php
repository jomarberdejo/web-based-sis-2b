<?php
session_start();
include('../db_connect.php'); 


$currUserId = $_SESSION['user_id'];


    $query = "SELECT fullname, age, gender, email FROM students WHERE user_id = $currUserId "; 
    $result = $connection->query($query);

    if ($result) {
        $studentData = $result->fetch_assoc();
    } else {
        $studentData = ["error" => "Error: " . $connection->error];
    }



   echo json_encode($studentData);
   



    



$connection->close();
?>
