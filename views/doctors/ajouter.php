<h2>Add Doctor</h2>

<form method="POST" action="doctors.php?action=insert">

    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" placeholder="Last Name" required>

    <input type="text" name="specialization" placeholder="Specialization" required>

    <input type="text" name="phone_number" placeholder="Phone_number">

    <input type="email" name="email" placeholder="Email">

    <select name="department_id">
        <option value="">-- Select Department --</option>
        <?php foreach ($departments as $dep): ?>
            <option value="<?= $dep['department_id'] ?>">
                <?= $dep['department_name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Save</button>
</form>
