<?php

include('db_connect.php');


$query = "SELECT 
    COUNT(*) AS totalStudents,
    SUM(status = 'Enrolled') AS enrolledStudents,
    SUM(status = 'In Progress') AS inProgress,
    (ROUND((SUM(status = 'Enrolled') / COUNT(*)) * 100, 2)) AS enrollmentRate,
    SUM(gender = 'Male') AS maleStudents,
    SUM(gender = 'Female') AS femaleStudents
    FROM students";

$result = $connection->query($query);

if (!$result) {
    die("Query failed: " . $connection->error);
}


$data = $result->fetch_assoc();


$connection->close();


header('Content-Type: application/json');


echo json_encode($data);
?>
