<h2>Doctors</h2>
<a href="doctors.php?action=add">+ Add Doctor</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Specialization</th>
        <th>phone_number</th>

        <th>Department</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($doctors as $doc): ?>
    <tr>
        <td><?= $doc['doctor_id'] ?></td>
        <td><?= $doc['first_name'] ?> <?= $doc['last_name'] ?></td>
        <td><?= $doc['specialization'] ?></td>
        <td><?= $doc['phone_number'] ?></td>
        
        <td><?= $doc['department_name'] ?? '-' ?></td>
        <td>
            <a href="doctors.php?action=edit&id=<?= $doc['doctor_id'] ?>">Edit</a> |
            <a href="doctors.php?action=delete&id=<?= $doc['doctor_id'] ?>"
               onclick="return confirm('Delete this doctor?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
