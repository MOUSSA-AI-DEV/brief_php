<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Patients</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<header class="bg-blue-600 text-white shadow-md">
    <div class="container mx-auto flex justify-between items-center p-4">
        <div class="text-2xl font-bold">Health Care</div>
        <nav class="space-x-4">
            <a href="index.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Dashboard</a>
            <a href="patients.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Patients</a>
            <a href="doctors.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Doctors</a>
            <a href="departements.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Departments</a>
        </nav>
    </div>
</header>

<main class="container mx-auto mt-6 p-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Liste des Patients</h2>
        <a href="patients.php?action=add" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Ajouter un Patient</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">ID</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Prénom</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Nom</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Sexe</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Date de Naissance</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Téléphone</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Email</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Adresse</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($patients)) : ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-3"><?= htmlspecialchars($row['patient_id']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($row['first_name']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($row['last_name']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($row['gender']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($row['date_of_birth']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($row['phone_number']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($row['email']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($row['address']) ?></td>
                        <td class="px-6 py-3 space-x-2">
                            <a href="patients.php?action=edit&id=<?= $row['patient_id'] ?>" class="text-yellow-600 hover:underline">Modifier</a>
                            <a href="patients.php?action=delete&id=<?= $row['patient_id'] ?>" class="text-red-600 hover:underline" onclick="return confirm('Supprimer ce patient ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</main>

<footer class="bg-gray-200 text-center text-gray-600 py-4 mt-6">
    &copy; <?= date('Y') ?> Health Care. Tous droits réservés.
</footer>

</body>
</html>
