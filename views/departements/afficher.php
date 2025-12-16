
<h2>Liste des departements</h2>

<a href="departements.php?action=add">Ajouter un Departement</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>deparetement_name</th>
        <th>location</th>
       
    </tr>

    <?php while ($row = mysqli_fetch_assoc($departements)) : ?>
        <tr>
            <td><?= $row['department_name'] ?></td>
            <td><?= $row['location'] ?></td>
            

            <td>
                <a href="departements.php?action=edit&id=<?=$row['department_id'] ?>">Modifier</a> |
                <a href="departements.php?action=delete&id=<?= $row['department_id'] ?>" 
                   onclick="return confirm('Supprimer ce patient ?')">Supprimer</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

