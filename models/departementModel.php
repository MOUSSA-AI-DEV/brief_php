<?php 
function afficherAllDepartements($connection)
{
    $sql="SELECT *FROM departments ORDER BY department_id ";
    $resul=mysqli_query($connection,$sql);
    return $resul ;
}



function getDepartementbyId($connection,$id){
    $sql =" SELECT *FROM departments where department_id=$id";
    $resul =mysqli_query($connection,$sql);
   return mysqli_fetch_assoc($resul);
}



 function insertDepartement($connection,$first_n,$last_n){
 $sql="INSERT INTO departments(department_name,location) VALUES(?,?) ";
  $stmt = mysqli_prepare($connection, $sql);
  mysqli_stmt_bind_param($stmt, "ss",$first_n,$last_n);
  return mysqli_stmt_execute($stmt);
 }

function updateDepartement(
    $connection,

    $department_id,
    $departement_name,
    $location,
   
) {
    $sql = "UPDATE departments SET
                department_name = ?,
               location = ?
            WHERE department_id = ?";

    $stmt = mysqli_prepare($connection, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "ssi",

        $departement_name,
        $location,
        $department_id
    );

    return mysqli_stmt_execute($stmt);
}


 


  