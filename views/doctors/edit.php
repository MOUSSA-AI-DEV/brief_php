<h2>Edit Doctor</h2>

<form method="POST" action="doctors.php?action=update">

    <input type="hidden" name="doctor_id" value="<?= $doctor['doctor_id'] ?>">

    <input type="text" name="first_name" value="<?= $doctor['first_name'] ?>" required>
    <input type="text" name="last_name" value="<?= $doctor['last_name'] ?>" required>

    <input type="text" name="specialization" value="<?= $doctor['specialization'] ?>" required>

    <input type="text" name="phone_number" value="<?= $doctor['phone_number'] ?>">
    <input type="email" name="email" value="<?= $doctor['email'] ?>">

    <select name="department_id">
        <option value="">-- Select Department --</option>
        <?php foreach ($departments as $dep): ?>
            <option value="<?= $dep['department_id'] ?>"
                <?= ($dep['department_id'] == $doctor['department_id']) ? "selected" : "" ?>>
                <?= $dep['department_name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Update</button>
</form>
