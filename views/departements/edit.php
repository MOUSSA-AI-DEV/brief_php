
<h2>Modifier un deparetements</h2>

 <form action="departements.php?action=update" method="POST">

    <input type="hidden" name="department_id" value="<?= $departements['department_id'] ?>">

    <label>deparetement_name :</label>
    <input type="text" name="department_name" value="<?= $departements['department_name'] ?>" required><br><br>

    <label>location :</label>
    <input type="text" name="location" value="<?= $departements['location'] ?>" required><br><br>

   <br><br>

   

    <button type="submit">Mettre à jour</button>
</form>

<br>
<a href="departements.php?action=list">Retour à la liste</a>

