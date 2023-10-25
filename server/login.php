<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"));
    $username = $data->username;
    $password = $data->password;

    $loginQuery = "SELECT * FROM users WHERE BINARY username = '$username' AND password = '$password'";
    $result = $connection->query($loginQuery);

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();


        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_role'] = $user['role'];
        $_SESSION['logged-in'] = true;
        
        
        
        

        $response = ["success" => true];

    

       
    } else {
        $response = ["success" => false];
    }



}


header('Content-Type: application/json');
echo json_encode($response);

$connection->close();
?>
