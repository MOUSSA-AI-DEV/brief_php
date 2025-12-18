<?php
// models/statisticsModel.php

/**
 * Return total number of patients
 */
function countPatients(mysqli $conn): int {
    $sql = "SELECT COUNT(*) AS total FROM patients";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return (int)$row['total'];
}

/**
 * Return total number of doctors
 */
function countDoctors(mysqli $conn): int {
    $sql = "SELECT COUNT(*) AS total FROM doctors";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return (int)$row['total'];
}

/**
 * Return total number of departments
 */
function countDepartments(mysqli $conn): int {
    $sql = "SELECT COUNT(*) AS total FROM departments";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return (int)$row['total'];
}

/**
 * Return all doctors with their department
 */
function getDoctorsWithDepartments(mysqli $conn): array {
    $sql = "
        SELECT
            d.doctor_id,
            d.first_name AS doctor_name,
            dep.department_name AS department_name
        FROM doctors d
        INNER JOIN departments dep
            ON d.department_id = dep.department_id
        ORDER BY dep.department_name, d.first_name
    ";

    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

/**
 * (Optional) Doctors count per department
 */
function countDoctorsPerDepartment(mysqli $conn): array {
    $sql = "
        SELECT
            dep.name AS department_name,
            COUNT(d.doctor_id) AS total_doctors
        FROM departments dep
        LEFT JOIN doctors d
            ON d.department_id = dep.department_id
        GROUP BY dep.department_id
        ORDER BY dep.name
    ";

    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
