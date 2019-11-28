<?php
$title = "Liste Réalisateurs";
include 'header.php';

if (isset($_POST['ajout'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $nation = $_POST['nation'];
    $photo = $_POST['photo'];

    $ajout = $dbh->prepare("INSERT INTO realisateur (nom_real, prenom_real, age_real, nationalite_real, photo_real) VALUES (?, ?, ?, ?, ?)");
    $ajout->execute(array($nom, $prenom, $age, $nation, $photo));
    header('Location: index.php?page=ListReal');
}
if (isset($_POST['annul'])) {
    header('Location: index.php?page=ListReal');
}

?>

<form method="POST">

<input placeholder="nom" type="text" name="nom">
<input placeholder="prenom" type="text" name="prenom">
<input placeholder="age" type="number" name="age">
<input placeholder="nationalite" type="text" name="nation">
<input placeholder="photo" type="text" name="photo">

<button type="submit" name="ajout">Ajouter</button>

<button type="submit" name="annul">Annuler</button>
</form>

<?php
include 'footer.php';