<?php
require_once "../config/database.php";
require_once "../models/doctorModel.php";
require_once "../models/departementModel.php";
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$action = $_GET['action'] ?? 'list';

switch ($action) {

    case "list":
        $doctors = afficherAllDoctors($connection);
        include "../views/doctors/afficher.php";
        break;

    case "add":
        $departments = afficherAllDepartements($connection);
        include "../views/doctors/ajouter.php";
        break;

    case "insert":
        insertDoctor(
            $connection,
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['specialization'],
            $_POST['phone_number'],
            $_POST['email'],
            $_POST['department_id']
        );
        header("Location: doctors.php");
        exit;

    case "edit":
        $doctor = getDoctorById($connection, $_GET['id']);
        $departments = afficherAllDepartements($connection);
        include "../views/doctors/edit.php";
        break;

    case "update":
        updateDoctor(
            $connection,
            $_POST['doctor_id'],
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['specialization'],
            $_POST['phone_number'],
            $_POST['email'],
            $_POST['department_id']
        );
        header("Location: doctors.php");
        exit;

    case "delete":
        deleteDoctor($connection, $_GET['id']);
        header("Location: doctors.php");
        exit;
}
