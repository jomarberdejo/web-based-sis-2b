<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"));
    $username = $data->username;
    $password = $data->password;


    $checkUsernameQuery = "SELECT * FROM users WHERE username = '$username'";
    $result = $connection->query($checkUsernameQuery);

    if ($result->num_rows > 0) {
        $response = ["error" => "Username already exists"];
    } else {
        $insertUserQuery = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'Student')";

        if ($connection->query($insertUserQuery) === TRUE) {
            $newUserId = $connection->insert_id;  
            $insertStudentQuery = "INSERT INTO students (user_id, fullname) VALUES ('$newUserId', '$username')";

            if ($connection->query($insertStudentQuery) === TRUE) {
                $response = ["success" => true];
            } else {
                $response = ["error" => "Student registration failed"];
            }
        } else {
            $response = ["error" => "Registration failed"];
        }
    }
} else {
    $response = ["error" => "Invalid request"];
}

echo json_encode($response);

$connection->close();

?>