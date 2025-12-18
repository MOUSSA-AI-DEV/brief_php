<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Patient</title>
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
    <h2 class="text-2xl font-bold mb-6">Modifier un Patient</h2>

    <form action="patients.php?action=update" method="POST" class="bg-white shadow-md rounded-lg p-6 max-w-md mx-auto space-y-4">

        <input type="hidden" name="patient_id" value="<?= htmlspecialchars($patient['patient_id']) ?>">

        <div>
            <label for="first_name" class="block text-gray-700 font-medium mb-2">Prénom</label>
            <input type="text" name="first_name" id="first_name" 
                   value="<?= htmlspecialchars($patient['first_name']) ?>" required
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="last_name" class="block text-gray-700 font-medium mb-2">Nom</label>
            <input type="text" name="last_name" id="last_name" 
                   value="<?= htmlspecialchars($patient['last_name']) ?>" required
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="gender" class="block text-gray-700 font-medium mb-2">Sexe</label>
            <select name="gender" id="gender"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="Male" <?= ($patient['gender'] == "Male") ? "selected" : "" ?>>Homme</option>
                <option value="Female" <?= ($patient['gender'] == "Female") ? "selected" : "" ?>>Femme</option>
                <option value="Other" <?= ($patient['gender'] == "Other") ? "selected" : "" ?>>Autre</option>
            </select>
        </div>

        <div>
            <label for="date_of_birth" class="block text-gray-700 font-medium mb-2">Date de Naissance</label>
            <input type="date" name="date_of_birth" id="date_of_birth"
                   value="<?= htmlspecialchars($patient['date_of_birth']) ?>" required
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="phone_number" class="block text-gray-700 font-medium mb-2">Téléphone</label>
            <input type="text" name="phone_number" id="phone_number"
                   value="<?= htmlspecialchars($patient['phone_number']) ?>" required
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" name="email" id="email"
                   value="<?= htmlspecialchars($patient['email']) ?>" required
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="address" class="block text-gray-700 font-medium mb-2">Adresse</label>
            <input type="text" name="address" id="address"
                   value="<?= htmlspecialchars($patient['address']) ?>" required
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="text-right">
            <button type="submit" class="bg-yellow-500 text-white font-semibold px-6 py-2 rounded hover:bg-yellow-600 transition">
                Mettre à jour
            </button>
        </div>

    </form>

    <div class="mt-4 text-center">
        <a href="patients.php?action=list" class="text-blue-600 hover:underline">Retour à la liste</a>
    </div>
</main>

<footer class="bg-gray-200 text-center text-gray-600 py-4 mt-6">
    &copy; <?= date('Y') ?> Health Care. Tous droits réservés.
</footer>

</body>
</html>
