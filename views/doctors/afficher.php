<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<header class="bg-blue-600 text-white shadow-md">
    <div class="container mx-auto flex justify-between items-center p-4">
        <div class="text-2xl font-bold">Health Care</div>
        <nav class="space-x-4">
            <a href="index.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Dashboard</a>
            <a href="doctors.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Doctors</a>
            <a href="patients.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Patients</a>
        </nav>
    </div>
</header>

<main class="container mx-auto mt-6 p-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Doctors</h2>
        <a href="doctors.php?action=add" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">+ Add Doctor</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">ID</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Name</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Specialization</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Phone Number</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Department</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doctors as $doc): ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-3"><?= htmlspecialchars($doc['doctor_id']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($doc['first_name'] . ' ' . $doc['last_name']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($doc['specialization']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($doc['phone_number']) ?></td>
                        <td class="px-6 py-3"><?= htmlspecialchars($doc['department_name'] ?? '-') ?></td>
                        <td class="px-6 py-3 space-x-2">
                            <a href="doctors.php?action=edit&id=<?= $doc['doctor_id'] ?>" class="text-yellow-600 hover:underline">Edit</a>
                            <a href="doctors.php?action=delete&id=<?= $doc['doctor_id'] ?>" onclick="return confirm('Delete this doctor?')" class="text-red-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<footer class="bg-gray-200 text-center text-gray-600 py-4 mt-6">
    &copy; <?= date('Y') ?> Health Care. Tous droits réservés.
</footer>

</body>
</html>
