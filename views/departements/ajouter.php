
<h2>Ajouter un deparetements</h2>

<form action="departements.php?action=insert" method="POST">

    <label> departemnet_name :</label>
    <input type="text" name="department_name" required><br><br>

    <label> location :</label>
    <input type="text" name="location" required><br><br>

    <button type="submit">Ajouter</button>
</form>

<br>
<a href="departements.php?action=list">Retour à la liste</a>

