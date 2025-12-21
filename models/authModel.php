<?php
// function getUserByEmail($connection, $email) {
//     $sql = "SELECT * FROM admin WHERE email = ?";
//     $stmt = mysqli_prepare($connection, $sql);
//     mysqli_stmt_bind_param($stmt, "s", $email);
//     mysqli_stmt_execute($stmt);
//     return mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
// }
//     $sql = "SELECT * FROM admin WHERE email = ?"; // <-- table correcte
//     $stmt = mysqli_prepare($connection, $sql);
//     mysqli_stmt_bind_param($stmt, "s", $email);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);
//     return mysqli_fetch_assoc($result); // retourne un tableau ou null
// }



function getAdmin($connection) {
    $sql = "SELECT * FROM admin LIMIT 1";
    $result = mysqli_query($connection, $sql);
    return mysqli_fetch_assoc($result); // returns single admin as array
}


?>