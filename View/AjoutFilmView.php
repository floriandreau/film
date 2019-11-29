<?php
$title = "";
include 'header.php';
?>

<form method="POST" enctype="multipart/form-data">

<input placeholder="titre" type="text" name="titre">
<input placeholder="duree heure" type="number" name="dureH">
<input placeholder="duree minute" type="number" name="dureM">
<input placeholder="Date de sortie (jour)" type="number" name="dateJ">
<input placeholder="Date de sortie (mois)" type="number" name="dateM">
<input placeholder="Date de sortie (année)" type="number" name="dateA">
<input placeholder="pegi" type="number" name="pegi">
<input placeholder="studio" type="text" name="studio">
<input placeholder="affiche" type="file" name="affiche">
<input placeholder="URL bande annonce" type="text" name="bande">
<textarea name="syno" id="" cols="30" rows="10" placeholder="Synopsis"></textarea>

<p>Choix Genre</p>
<select name="Genre" id="">
<?php
foreach ($listG as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_genre']; ?>"><?php echo $valuer['type_genre']; ?></option>
    <?php
}
?>
</select>
<button>Ajouter Genre</button>

<p>Choix acteur</p>
<select name="Act" id="">
<?php
foreach ($listA as $key => $value) {
    ?>
    <option value="<?php echo $value['id_acteur']; ?>"><?php echo $value['nom_acteur'].' '.$value['prenom_acteur']; ?></option>
    <?php
}
?>
</select>
<button>Ajouter Acteur</button>
<p>Choix Realisateur</p>
<select name="Rea" id="">
<?php
foreach ($listR as $key => $valuer) {
    ?>
    <option value="<?php echo $valuer['id_real']; ?>"><?php echo $valuer['nom_real'].' '.$valuer['prenom_real']; ?></option>
    <?php
}
?>
</select>
<button>Ajouter Realisateur</button>

<button type="submit" name="ajout">Ajouter</button>

<button type="submit" name="annul">Annuler</button>
</form>
<!-- Ajouter Acteur -->
<form method="POST">
<input placeholder="nom" type="text" name="nom_act">
<input placeholder="prenom" type="text" name="prenom_act">
<input placeholder="age" type="number" name="age_act">
<input placeholder="nationalite" type="text" name="nation_act">
<input placeholder="photo" type="text" name="photo_act">

<button type="submit" name="ajout_act">Ajouter</button>

<button type="submit" name="annul_act">Annuler</button>
</form>
<!-- ajout real -->
<form method="POST">
<input placeholder="nom" type="text" name="nom_real">
<input placeholder="prenom" type="text" name="prenom_real">
<input placeholder="age" type="number" name="age_real">
<input placeholder="nationalite" type="text" name="nation_real">
<input placeholder="photo" type="text" name="photo_real">

<button type="submit" name="ajout_real">Ajouter</button>

<button type="submit" name="annul_real">Annuler</button>
</form>

<!-- ajout genre -->
<form method="POST">
<input placeholder="nom" type="text" name="nom_real">


<button type="submit" name="ajout_genre">Ajouter</button>

<button type="submit" name="annul_genre">Annuler</button>
</form>

<?php
include 'footer.php';