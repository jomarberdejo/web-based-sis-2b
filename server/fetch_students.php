<?php 

include('db_connect.php');

$query = "SELECT user_id, student_id, fullname, age, gender, email, section, status, grade, remarks
          FROM students
          ORDER BY CAST(SUBSTRING_INDEX(student_id, '-', -1) AS SIGNED) ASC";

$result = $connection->query($query);

if (!$result) {
    die("Query failed: " . $connection->error);
}

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);

$connection->close();

?>