<?php
// public/index.php
require_once "../config/database.php";
require_once "../models/statisticsModel.php";

// Statistics
$totalPatients    = countPatients($connection);
$totalDoctors     = countDoctors($connection);
$totalDepartments = countDepartments($connection);
$doctorsByDept    = getDoctorsWithDepartments($connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Care Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial, sans-serif; margin:0; background:#f4f6f9; }
        header { background:#0f172a; color:#fff; padding:20px; }
        .container { padding:24px; }
        .cards { display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:20px; }
        .card { background:#fff; border-radius:12px; padding:20px; box-shadow:0 6px 16px rgba(0,0,0,.08); }
        .card h3 { margin:0 0 10px; }
        .card .count { font-size:32px; font-weight:bold; }
        .card a { display:inline-block; margin-top:12px; color:#2563eb; text-decoration:none; }
        h2 { margin-top:40px; }
        table { width:100%; border-collapse:collapse; background:#fff; margin-top:16px; }
        th, td { padding:12px; border:1px solid #ddd; }
        th { background:#2563eb; color:#fff; }
        .chart-container { background:#fff; padding:20px; border-radius:12px; box-shadow:0 6px 16px rgba(0,0,0,.08); margin-top:40px; max-width:400px; margin-left:auto; margin-right:auto; }
        .chart-container h3 { margin-bottom:20px; }
    </style>
</head>
<body>
<header>
    <h1>Health Care Application Dashboard</h1>
</header>

<div class="container">

    <div class="cards">
        <div class="card">
            <h3>Patients</h3>
            <div class="count"><?= $totalPatients ?></div>
            <a href="patients.php">Manage Patients</a>
        </div>
        <div class="card">
            <h3>Doctors</h3>
            <div class="count"><?= $totalDoctors ?></div>
            <a href="doctors.php">Manage Doctors</a>
        </div>
        <div class="card">
            <h3>Departments</h3>
            <div class="count"><?= $totalDepartments ?></div>
            <a href="departements.php">Manage Departments</a>
        </div>
    </div>

    <h2>Doctors by Department</h2>
    <table>
        <tr>
            <th>Doctor</th>
            <th>Department</th>
        </tr>
        <?php foreach ($doctorsByDept as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['doctor_name']) ?></td>
                <td><?= htmlspecialchars($row['department_name']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="chart-container">
        <h3>Statistiques Globales</h3>
        <canvas id="myPolarChart" width="300" height="300"></canvas>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const chartData = {
    labels: ['Patients', 'Doctors', 'Departments'],
    datasets: [{
        label: 'Count',
        data: [<?= $totalPatients ?>, <?= $totalDoctors ?>, <?= $totalDepartments ?>],
        backgroundColor: [
            'rgba(255, 99, 132, 0.5)',  
            'rgba(54, 162, 235, 0.5)',  
            'rgba(75, 192, 192, 0.5)'   
        ]
    }]
};

const config = {
    type: 'polarArea',
    data: chartData,
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'top' },
            title: { display: true, text: 'Statistiques des Patients, Doctors et Départements' }
        }
    }
};

const myPolarChart = new Chart(
    document.getElementById('myPolarChart'),
    config
);
</script>

</body>
</html>
