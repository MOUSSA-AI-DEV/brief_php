<?php 
function afficherAllPatient($connection)
{
    $sql="SELECT *FROM patients ORDER BY patient_id DESC";
    $resul=mysqli_query($connection,$sql);
    return $resul ;
}



function getPatientbyId($connection,$id){
    $sql =" SELECT *FROM patients where patient_id=$id";
    $resul =mysqli_query($connection,$sql);
   return mysqli_fetch_assoc($resul);
}



 function insertPatient($connection,$first_n,$last_n,$gender,$date_of_birth,$phone_number,$email,$adress){
 $sql="INSERT INTO patients(first_name,last_name,gender,date_of_birth,phone_number,email,address) VALUES(?,?,?,?,?,?,?) ";
  $stmt = mysqli_prepare($connection, $sql);
  mysqli_stmt_bind_param($stmt, "sssssss",$first_n,$last_n,$gender,$date_of_birth,$phone_number,$email,$adress);
  return mysqli_stmt_execute($stmt);
 }

function updatePatient(
    $connection,
    $id,
    $first_n,
    $last_n,
    $gender,
    $date_of_birth,
    $phone_number,
    $email,
    $adress
) {
    $sql = "UPDATE patients SET
                first_name = ?,
                last_name = ?,
                gender = ?,
                date_of_birth = ?,
                phone_number = ?,
                email = ?,
                address = ?
            WHERE patient_id = ?";

    $stmt = mysqli_prepare($connection, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "sssssssi",
        $first_n,
        $last_n,
        $gender,
        $date_of_birth,
        $phone_number,
        $email,
        $adress,
        $id
    );

    return mysqli_stmt_execute($stmt);
}


 


  function deletePatients($connection,$id)
  {
    $sql="DELETE FROM patients WHERE patient_id=?";
    $stmt =mysqli_prepare($connection,$sql);
    mysqli_stmt_bind_param($stmt,"i",$id);
    return mysqli_stmt_execute($stmt);
  }



?>