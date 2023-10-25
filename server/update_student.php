<?php
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updatedStudent = json_decode(file_get_contents('php://input'));

    if (!empty($updatedStudent->id)) {
        $updateQuery = "UPDATE students SET ";

        if (!empty($updatedStudent->studentId)) {
            $updateQuery .= "student_id = '$updatedStudent->studentId', ";
        }
        if (!empty($updatedStudent->fullName)) {
            $updateQuery .= "fullname = '$updatedStudent->fullName', ";
        }
        if (!empty($updatedStudent->age)) {
            $updateQuery .= "age = '$updatedStudent->age', ";
        }
        if (!empty($updatedStudent->gender)) {
            $updateQuery .= "gender = '$updatedStudent->gender', ";
        }
        if (!empty($updatedStudent->email)) {
            $updateQuery .= "email = '$updatedStudent->email', ";
        }
        if (!empty($updatedStudent->section)) {
            $updateQuery .= "section = '$updatedStudent->section', ";
        }
        if (!empty($updatedStudent->status)) {
            $updateQuery .= "status = '$updatedStudent->status', ";
        }
        if (!empty($updatedStudent->grade)) {
            $updateQuery .= "grade = '$updatedStudent->grade', ";
        }
        if (!empty($updatedStudent->remarks)) {
            $updateQuery .= "remarks = '$updatedStudent->remarks', ";
        }

        if (!empty($updateQuery)) {
            $updateQuery = rtrim($updateQuery, ', ');

            $updateQuery .= " WHERE user_id = '$updatedStudent->id'";

            if ($connection->query($updateQuery) === TRUE) {
                $response = ["success" => true];
            } else {
                $response = ["error" => "Update failed: " . $connection->error];
            }
        } else {
            $response = ["error" => "No data to update"];
        }
    } else {
        $response = ["error" => "Invalid data received"];
    }

    echo json_encode($response);
}

$connection->close();
?>
