<?php
if(isset($_SESSION['username'])) {
    echo '<script>window.location.replace("./index1.php");</script>';
} else {
$username = "admin";
$password = "admin123";
    if(isset($_POST['username']) && isset($_POST['password'])) {
        if($_POST['username'] == $username && $_POST['password'] == $password) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header("Location: admin.html");
            exit();
        } elseif($_POST['username'] != $username && $_POST['password'] == $password) {
            header("Location: login.html");
            exit();
        } elseif($_POST['username'] == $username && $_POST['password'] != $password) {
            header("Location: login.html");
            exit();
        } elseif($_POST['username'] != $username && $_POST['password'] != $password) {
            header("Location: login.html");
            exit();
        } 
    }
}