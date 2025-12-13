
<h2>Modifier un Patient</h2>

<form action="patients.php?action=update" method="POST">

    <input type="hidden" name="patient_id" value="<?= $patient['patient_id'] ?>">

    <label>Prenom :</label>
    <input type="text" name="first_name" value="<?= $patient['first_name'] ?>" required><br><br>

    <label>Nom :</label>
    <input type="text" name="last_name" value="<?= $patient['last_name'] ?>" required><br><br>

    <label>Sexe :</label>
    <select name="gender">
        <option value="Male"   <?= ($patient['gender'] == "Male") ? "selected" : "" ?>>Homme</option>
        <option value="Female" <?= ($patient['gender'] == "Female") ? "selected" : "" ?>>Femme</option>
        <option value="Other"  <?= ($patient['gender'] == "Other") ? "selected" : "" ?>>Autre</option>
    </select><br><br>

    <label>Date de Naissance :</label>
    <input type="date" name="date_of_birth" value="<?= $patient['date_of_birth'] ?>" required><br><br>

    <label>Téléphone :</label>
    <input type="text" name="phone_number" value="<?= $patient['phone_number'] ?>" required><br><br>

    <label>Email :</label>
    <input type="email" name="email" value="<?= $patient['email'] ?>" required><br><br>

    <label>Adresse :</label>
    <input type="text" name="address" value="<?= $patient['address'] ?>" required><br><br>

    <button type="submit">Mettre à jour</button>
</form>

<br>
<a href="patients.php?action=list">Retour à la liste</a>

