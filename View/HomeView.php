<?php

$title = "Accueil";
include 'header.php';
$num = 1;
foreach ($test as $key => $value) {
    if ($num < 6) {
        $date = $value['date_sortie_film'];
    $date = explode("-", $date);
    $newDate = $date[2]."/".$date[1]."/".$date[0];
        ?>

<div>
    <div>
        <img src="<?php echo $cheminImg.$value['affiche_film']; ?>" alt="">
    </div>
    <div>
        <h2><?php echo $value['titre_film']." ".$newDate; ?></h2>
        <p><?php echo $value['nom_real']." ".$value['prenom_real']; ?></p>
    </div>
</div>

<?php
    }
$num ++;
}
include 'footer.php';