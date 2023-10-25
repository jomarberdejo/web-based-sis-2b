<?php
session_start();

if (isset($_SESSION['logged-in']) && $_SESSION['logged-in'] === true) {

    $_SESSION = array();


    session_destroy();


    echo json_encode(['success' => true]);
} else {

    echo json_encode(['success' => false]);
}
