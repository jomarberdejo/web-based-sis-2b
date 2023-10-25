<?php
include('db_connect.php');

$query = "SELECT
    (SELECT COUNT(*) FROM students) AS totalStudents,
    (SELECT COUNT(*) FROM students WHERE status = 'Enrolled') AS enrolledStudents,
    (SELECT COUNT(*) FROM students WHERE status = 'In Progress') AS inProgress,
    (SELECT COUNT(*) FROM students WHERE gender = 'Male') AS maleStudents,
    (SELECT COUNT(*) FROM students WHERE gender = 'Female') AS femaleStudents";

$result = $connection->query($query);

if (!$result) {
    die("Query failed: " . $connection->error);
}

$data = $result->fetch_assoc();

$response = [
    "totalStudents" => $data["totalStudents"],
    "enrolledStudents" => $data["enrolledStudents"],
    "inProgress" => $data["inProgress"],
    "maleStudents" => $data["maleStudents"],
    "femaleStudents" => $data["femaleStudents"]
];

header('Content-Type: application/json');


echo json_encode($response);

$connection->close();
?>
