<?php 
require_once "../config/config.php"
require_once "../models/patientModel/Model.php"

$action=$GET['action']?? 'list';
switch($action)
{
    case "list":
    $patients=getAllPatients($connection)
    include "../views/patients/list.php"
    break;

    case "add":
        include "../views/patients/add.php"
        break;

        case "insert":
            if ($_SERVER["REQUEST_METHODE"]==='POST')
            {
                $first_n   =$_post['first_n']
                $last_n   =$_post['last_n']
                $gender   =$_post['gender']
                $date_of_birth   =$_post['date_of_birth']
                $phone_number   =$_post['phone_number']
                $email   =$_post['email']
                $adress   =$_post['adress']
               insertPatient(
                $connection,
                 $first_n,
                $last_n,
                $gender,
                $date_of_birth,
                $phone_number,
                $email,
                $adress
               );
               header("location:patients.php?action=list")
               exit;
            }
            break;
            case "edit"
            if(!isset($_GET['id']))
            {
                die(" manque id ")

            }
            $id=$_GET['id'];
            $patient=getPatientbyId($connection,$id)
            include "../views/patients/edit.php"
}           

?>