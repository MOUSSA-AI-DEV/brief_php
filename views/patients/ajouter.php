
<h2>Ajouter un Patient</h2>

<form action="patients.php?action=insert" method="POST">

    <label>Prénom :</label>
    <input type="text" name="first_name" required><br><br>

    <label>Nom :</label>
    <input type="text" name="last_name" required><br><br>

    <label>Sexe :</label>
    <select name="gender" required>
        <option value="Male">Homme</option>
        <option value="Female">Femme</option>
        <option value="Other">Autre</option>
    </select><br><br>

    <label>Date de Naissance :</label>
    <input type="date" name="date_of_birth" required><br><br>

    <label>Téléphone :</label>
    <input type="text" name="phone_number" required><br><br>

    <label>Email :</label>
    <input type="email" name="email" required><br><br>

    <label>Adresse :</label>
    <input type="text" name="address" required><br><br>

    <button type="submit">Ajouter</button>
</form>

<br>
<a href="patients.php?action=list">Retour à la liste</a>

