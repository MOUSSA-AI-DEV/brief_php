<?php

function afficherAllDoctors($conn)
{
    $sql = "SELECT d.*, dep.department_name
            FROM doctors d
            LEFT JOIN departments dep ON d.department_id = dep.department_id";

    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getDoctorById($conn, $id)
{
    $sql = "SELECT * FROM doctors WHERE doctor_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    return mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
}

function insertDoctor($conn, $first, $last, $specialization, $phone, $email, $department_id)
{
    $sql = "INSERT INTO doctors
            (first_name, last_name, specialization, phone_number, email, department_id)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        "sssssi",
        $first,
        $last,
        $specialization,
        $phone,
        $email,
        $department_id
    );

    return mysqli_stmt_execute($stmt);
}

function updateDoctor($conn, $id, $first, $last, $specialization, $phone, $email, $department_id)
{
    $sql = "UPDATE doctors SET
            first_name = ?,
            last_name = ?,
            specialization = ?,
            phone_number = ?,
            email = ?,
            department_id = ?
            WHERE doctor_id = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        "sssssii",
        $first,
        $last,
        $specialization,
        $phone,
        $email,
        $department_id,
        $id
    );

    return mysqli_stmt_execute($stmt);
}

function deleteDoctor($conn, $id)
{
    $sql = "DELETE FROM doctors WHERE doctor_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    return mysqli_stmt_execute($stmt);
}
