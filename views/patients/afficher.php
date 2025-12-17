
<h2>Liste des Patients</h2>

<a href="patients.php?action=add">Ajouter un Patient</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Sexe</th>
        <th>Date de Naissance</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Adresse</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($patients)) : ?>
        <tr>
            <td><?= $row['patient_id'] ?></td>
            <td><?= $row['first_name'] ?></td>
            <td><?= $row['last_name'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['date_of_birth'] ?></td>
            <td><?= $row['phone_number'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['address'] ?></td>

            <td>
                <a href="patients.php?action=edit&id=<?=$row['patient_id'] ?>">Modifier</a> |
                <a href="patients.php?action=delete&id=<?= $row['patient_id'] ?>" 
                   >Supprimer</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

