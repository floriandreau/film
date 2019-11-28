<?php

$title = "";
include 'header.php';

foreach ($ActFilm as $key => $value) {

    /* Mise en ordre de la date au bon format (jj/mm/aaaa) */
    $date = $value['date_sortie_film'];
    $date = explode("-", $date);
    $newDate = $date[2]."/".$date[1]."/".$date[0];
    

?>


<div>
<img src="<?php echo $cheminImg.$value['photo_acteur'];?>" alt="Photo de <?php echo $value['nom_acteur'].$value['prenom_acteur']; ?>">

<p>
<?php echo $value['nom_acteur']." ". $value['prenom_acteur'];?>
</p>

<h2>Age : </h2>
<p>
<?php echo $value['age_acteur']; ?> ans
</p>

<h2>Nationalité : </h2>
<p>
<?php echo $value['nationalite_acteur']; ?>
</p>

<div>
<h2>Filmographie : </h2>

<img src="<?php echo $cheminImg.$value['affiche_film']; ?>" alt="Affiche du film <?php echo $value['titre_film']; ?>">

<p><?php echo $value['titre_film']; ?></p>

<p><?php echo $newDate; ?></p>

</div>
<?php
    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
            ?>
            <a href="index.php?page=ModifAct&id=<?php echo $value['id_acteur'];?>">Modifier</a>
            <a href="index.php?page=ModifAct&id=<?php echo $value['id_acteur'];?>">Supprimer</a>
            <?php
        }
    }
    ?>
</div>


<?php
}
include 'footer.php';