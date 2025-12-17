<?php
require_once "../config/database.php";
require_once "../config/config.php";
require_once "../models/departementModel.php";

$action = $_GET['action'] ?? 'list';

switch ($action) {

    case "list":
        $departements = afficherAllDepartements($connection);
        include "../views/departements/afficher.php";
        break;

    case "add":
        include "../views/departements/ajouter.php";
        break;

    case "insert":
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {

            insertDepartement(
                $connection,
                 $_POST['department_name'],
                 $_POST['location']
               
            );

            header("Location: departements.php?action=list");
            exit;
        }
        break;

    case "edit":
        if (!isset($_GET['id'])) {
            die("Manque id");
        }

        $id = $_GET['id'];
        $departements = getDepartementbyId($connection, $id);
        include "../views/departements/edit.php";
        break;

    case "update":
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   updateDepartement(
    $connection,
    $_POST['department_id'],
      $_POST['department_name'],
      $_POST['location']
);

        }

        header("Location: departements.php?action=list");
        exit;

    case "delete":
        if (!isset($_GET['id'])) {
            die("Manque id");
        }

        deleteDepartement($connection, $_GET['id']);
        header("Location: departements.php?action=list");
        exit;

    default:
        echo "Action inconnue.";
        break;
}
