<?php
session_start();
include('../db_connect.php');

$currUserId = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"));

    $fullname = $data->fullname;
    $age = $data->age;
    $gender = $data->gender;
    $email = $data->email;

    $query = "UPDATE students SET ";
    
    if(!empty($fullname)){
      $query .= "fullname = '$fullname', ";
    }
    if(!empty($age)){
      $query .= "age = '$age', ";
    }
    if (!empty($gender)){
      $query .= "gender = '$gender', ";
    }
    if(!empty($email)){
      $query .= "email = '$email', ";
    }
    
    if (!empty($query)){
      $query = rtrim($query, ", ");
    }

    $query .= " WHERE user_id = '$currUserId'";
    
    if ($connection->query($query)) {
        $response = ["success" => true];
    } else {
        $response = ["success" => false, "error" => "Failed to update profile"];
    }
} else {
    $response = ["error" => "Invalid request method"];
}

header('Content-Type: application/json');
echo json_encode($response);

$connection->close();
?>
