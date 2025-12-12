<?php 



function afficherAllPatient($connection)
{
    $sql="SELECT *FROM patients order by asc";
    $resul=mysqli_query($connection,$sql);
    return $result ;
}



function getPatientbyId($connection,$id){
    $sql ="SELECT *FROM patients where id=$id";
    $resul =mysqli_query($connection,$sql)
   return mysqli_fetch_assoc($resul);
}



 function insertPatient($conn,$first_n,$last_n,$gender,$date_of_birth,$phone_number,$email,$adress)
 $sql="INSERT INTO patients(first_name,last_name,gender,date_of_birth,phone_number,email,adress) VALUES(?,?,?,?,?,?,?) "
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ssss",$first_n,$last_n,$gender,$date_of_birth,$phone_number,$email,$adress);
  return mysqli_stmt_execute($stmt)

  function updatePatient($connection,$id,$first_n,$last_n,$gender,$date_of_birth,$phone_number,$email,$adress){
$sql ="UPDATE  patients SET $first_n=?,$last_n=?,$gender=?,$date_of_birth=?,$phone_number=?,$email=?,$adress=?,where id=?"
$stmt=mysqli_prepare($connection,$sql)
    mysqli_stmt_bind_param($stmt, "ssssi",$first_n,$last_n,$gender,$date_of_birth,$phone_number,$email,$adress,$id);

return mysqli_stmt_execute($stmt)
   
  }



  function deletePatients($connection,$id)
  {
    $sql="DELETE FROM patients WHERE id=?"
    $stmt =mysqli_prepare($connection,$sql)
    mysqli_stmt_bind_param($stmt,"i",$id)
    return mysqli_stmt_execute($stmt)
  }



?>