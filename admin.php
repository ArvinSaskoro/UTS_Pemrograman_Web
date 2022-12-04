<?php
// if(isset($_SESSION['username'])) {
//     echo '<script>window.location.replace("./index1.php");</script>';
// } else { 
//     $username = "admin";
//     $password = "admin";
//     if(isset($_POST['username']) && isset($_POST['password'])) {
//         if($_POST['username'] == $username && $_POST['password'] == $password) {
//             session_start();
//             $_SESSION['username'] = $_POST['username'];
//             $_SESSION['password'] = $_POST['password'];
//             header("Location: admin.php");
//             exit();
//         } elseif($_POST['username'] != $username && $_POST['password'] == $password) {
//             header("Location: index.php");
//             exit();
//         } elseif($_POST['username'] == $username && $_POST['password'] != $password) {
//             header("Location: index.php");
//             exit();
//         } elseif($_POST['username'] != $username && $_POST['password'] != $password) {
//             header("Location: index.php");
//             exit();
//         } 
//     }
// }

if(isset($_POST['proseslog'])) {
    $username = "admin";
    $password = "admin";

    if(($_POST)['username'] == $username || ($_POST)['password'] == $password) {
        $_SESSION['useername'] = $_POST['username'];
        echo "<meta http-equiv=refresh content=0;URL='admin.php'>";
    } else {
        echo "<p align=center><b> Username dan Password salah ! </b></p>";
        echo "<meta http-equiv=refresh content=2;URL='admin.php'>";
    }
} 