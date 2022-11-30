<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        unset($_SESSION['username']);
    }
    // Redirect
    header('Location: login.php');
    die;