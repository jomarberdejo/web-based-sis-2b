<?php

include('db_connect.php');


if (isset($_GET['id'])) {
    $studentId = $_GET['id'];


    $query = "SELECT * FROM students WHERE user_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $studentId);


    $stmt->execute();


    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();
        echo json_encode($student);
    } else {

        echo json_encode(["error" => "Student not found"]);
    }
} else {

    echo json_encode(["error" => "Student ID not provided"]);
}


$connection->close();
?>
