<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
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
    <h2 class="text-2xl font-bold mb-6">Add Doctor</h2>

    <form method="POST" action="doctors.php?action=insert" class="bg-white shadow-md rounded-lg p-6 max-w-md mx-auto space-y-4">

        <!-- First Name -->
        <div>
            <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name</label>
            <input type="text" name="first_name" id="first_name" placeholder="First Name"
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Last Name -->
        <div>
            <label for="last_name" class="block text-gray-700 font-medium mb-2">Last Name</label>
            <input type="text" name="last_name" id="last_name" placeholder="Last Name"
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Specialization -->
        <div>
            <label for="specialization" class="block text-gray-700 font-medium mb-2">Specialization</label>
            <input type="text" name="specialization" id="specialization" placeholder="Specialization"
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Phone Number -->
        <div>
            <label for="phone_number" class="block text-gray-700 font-medium mb-2">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number"
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" name="email" id="email" placeholder="Email"
                   class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Department -->
        <div>
            <label for="department_id" class="block text-gray-700 font-medium mb-2">Department</label>
            <select name="department_id" id="department_id"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">-- Select Department --</option>
                <?php foreach ($departments as $dep): ?>
                    <option value="<?= htmlspecialchars($dep['department_id']) ?>"><?= htmlspecialchars($dep['department_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="text-right">
            <button type="submit" class="bg-green-600 text-white font-semibold px-6 py-2 rounded hover:bg-green-700 transition">
                Save
            </button>
        </div>

    </form>

    <div class="mt-4 text-center">
        <a href="doctors.php" class="text-blue-600 hover:underline">Back to list</a>
    </div>
</main>

<footer class="bg-gray-200 text-center text-gray-600 py-4 mt-6">
    &copy; <?= date('Y') ?> Health Care. Tous droits réservés.
</footer>

</body>
</html>
