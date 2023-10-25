<?php
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents("php://input"));

  if (isset($data->id)) {
    $studentId = $data->id;


    $deleteStudentQuery = "DELETE FROM students WHERE user_id = $studentId";
    $result = $connection->query($deleteStudentQuery);


    $deleteUserQuery = "DELETE FROM users WHERE user_id = $studentId";
    $result = $connection->query($deleteUserQuery);

    if ($result) {
      $response = ["success" => true];
    } else {
      $response = ["success" => false, "error" => "Student not found or removal failed"];
    }
  } else {
    $response = ["success" => false, "error" => "Student ID not provided"];
  }

  $connection->close();
} else {
  $response = ["error" => "Invalid request method"];
}

header('Content-Type: application/json');
echo json_encode($response);

?>