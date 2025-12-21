<?php
session_start();
require_once "../config/database.php";
require_once "../models/authModel.php";

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $admin = getAdmin($connection);
var_dump($admin["password"]);
var_dump($admin["email"]);

    if ($admin ) {
        $_SESSION['id'] = $admin['id'];
        $_SESSION['email'] = $admin['email'];
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid email or password";
    }
}

include "../views/auth/login.php";
