<?php
if(isset($_SESSION['username'])) {
    echo '<script>window.location.replace("./index1.php");</script>';
} else { 
$username = "arvin";
$password = "048";
    if(isset($_POST['username']) && isset($_POST['password'])) {
        if($_POST['username'] == $username && $_POST['password'] == $password) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header("Location: user.html");
            exit();
        } elseif($_POST['username'] != $username && $_POST['password'] == $password) {
            header("Location: index.php");
            exit();
        } elseif($_POST['username'] == $username && $_POST['password'] != $password) {
            header("Location: index.php");
            exit();
        } elseif($_POST['username'] != $username && $_POST['password'] != $password) {
            header("Location: index.php");
            exit();
        } 
    }
}
