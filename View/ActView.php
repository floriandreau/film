<?php

$title = "Variable nom Acteur";
include 'header.php';

var_dump($ActFilm);
foreach ($ActFilm as $key => $value) {
?>


<div>
<img src="<?php echo $cheminImg.$value['photo_acteur'];?>" alt="Photo de <?php echo $value['nom_acteur'].$value['prenom_acteur']; ?>">

<p>
<?php echo $value['nom_acteur']." ". $value['prenom_acteur'];?>
</p>

<p>
<?php echo $value['age_acteur']; ?>
</p>

<p>
<?php echo $value['nationalite_acteur']; ?>
</p>

<div>
<p>Liste de ses films : </p>

</div>

</div>


<?php
}
include 'footer.php';