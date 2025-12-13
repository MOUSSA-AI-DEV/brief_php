<?php


$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "health_care";

$connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($connection, "utf8");
?>
