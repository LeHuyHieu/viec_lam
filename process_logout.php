<?php 
    session_start();

    if (isset($_SESSION['user_email'])) {
        unset($_SESSION['user_email']);
    }

    header('location:index.php');
?>