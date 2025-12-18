<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Header avec navigation -->
<header class="bg-blue-600 text-white shadow-md">
    <div class="container mx-auto flex justify-between items-center p-4">
        <div class="text-2xl font-bold">Health Care</div>
        <nav class="space-x-4">
            <a href="index.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Dashboard</a>
            <a href="patients.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Patients</a>
            <a href="doctors.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Doctors</a>
            <a href="departements.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Departments</a>
            <a href="admissions.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Admissions</a>
        </nav>
    </div>
</header>

<!-- Contenu principal -->
<main class="container mx-auto mt-6 p-4">

    <!-- Titre + bouton Ajouter -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Liste des départements</h2>
        <a href="departements.php?action=add" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Ajouter un Département</a>
    </div>

    <!-- Tableau des départements -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Nom du Département</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Localisation</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($departements)) : ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-3"><?= htmlspecialchars($row['department_name']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($row['location']) ?></td>
                        <td class="px-6 py-3 space-x-2">
                            <a href="departements.php?action=edit&id=<?= $row['department_id'] ?>" class="text-yellow-600 hover:underline">Modifier</a>
                            <a href="departements.php?action=delete&id=<?= $row['department_id'] ?>" onclick="return confirm('Supprimer ce département ?')" class="text-red-600 hover:underline">Supprimer</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</main>

<!-- Footer -->
<footer class="bg-gray-200 text-center text-gray-600 py-4 mt-6">
    &copy; <?= date('Y') ?> Health Care. Tous droits réservés.
</footer>

</body>
</html>
