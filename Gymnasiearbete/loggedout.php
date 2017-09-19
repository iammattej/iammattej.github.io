<?php
    error_reporting (E_ALL ^ E_NOTICE^ E_DEPRECATED); 
    session_start();
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
?>