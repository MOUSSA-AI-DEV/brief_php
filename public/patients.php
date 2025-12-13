<?php
require_once "../config/database.php";
require_once "../config/config.php";
require_once "../models/patientModel.php";

$action = $_GET['action'] ?? 'list';

switch ($action) {

    case "list":
        $patients = afficherAllPatient($connection);
        include "../views/patients/afficher.php";
        break;

    case "add":
        include "../views/patients/ajouter.php";
        break;

    case "insert":
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {

            insertPatient(
                $connection,
                $_POST['first_name'],
                $_POST['last_name'],
                $_POST['gender'],
                $_POST['date_of_birth'],
                $_POST['phone_number'],
                $_POST['email'],
                $_POST['address']
            );

            header("Location: patients.php?action=list");
            exit;
        }
        break;

    case "edit":
        if (!isset($_GET['id'])) {
            die("Manque id");
        }

        $id = $_GET['id'];
        $patient = getPatientbyId($connection, $id);
        include "../views/patients/edit.php";
        break;

    case "update":
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   updatePatient(
    $connection,
    $_POST['patient_id'],
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['gender'],
    $_POST['date_of_birth'],
    $_POST['phone_number'],
    $_POST['email'],
    $_POST['address']
);

        }

        header("Location: patients.php?action=list");
        exit;

    case "delete":
        if (!isset($_GET['id'])) {
            die("Manque id");
        }

        deletePatients($connection, $_GET['id']);
        header("Location: patients.php?action=list");
        exit;

    default:
        echo "Action inconnue.";
        break;
}
