<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Département</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<header class="bg-blue-600 text-white shadow-md">
    <div class="container mx-auto flex justify-between items-center p-4">
        <div class="text-2xl font-bold">Health Care</div>
        <nav class="space-x-4">
            <a href="index.php" class="hover:bg-blue-700 px-3 py-2 rounded transition">Dashboard</a>
            <a href="departements.php?action=list" class="hover:bg-blue-700 px-3 py-2 rounded transition">Departments</a>
        </nav>
    </div>
</header>

<main class="container mx-auto mt-6 p-4">
    <h2 class="text-2xl font-bold mb-6">Ajouter un Département</h2>

    <form action="departements.php?action=insert" method="POST" class="bg-white shadow-md rounded-lg p-6 max-w-md mx-auto space-y-4">
        <div>
            <label for="department_name" class="block text-gray-700 font-medium mb-2">Nom du Departement</label>
            <input type="text" name="department_name" id="department_name"
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   placeholder="Ex: Cardiologie" required>
        </div>

        <div>
            <label for="location" class="block text-gray-700 font-medium mb-2">Localisation</label>
            <input type="text" name="location" id="location"
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   placeholder="Ex: Bâtiment A, étage 2" required>
        </div>

        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-2 rounded hover:bg-blue-700 transition">
                Ajouter
            </button>
        </div>
    </form>

    <div class="mt-4 text-center">
        <a href="departements.php?action=list" class="text-blue-600 hover:underline">Retour a la liste</a>
    </div>
</main>

<footer class="bg-gray-200 text-center text-gray-600 py-4 mt-6">
    &copy; <?= date('Y') ?> Health Care. Tous droits reserves.
</footer>

</body>
</html>
