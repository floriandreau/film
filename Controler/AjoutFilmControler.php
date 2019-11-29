<?php

require('Model/AjoutFilm.php');
$cheminImg = "asset/img/";

$listA = listeAct();
$listR = listeReal();
$listG = listeGenre();
$idfilm = idFilm();

foreach ($idfilm as $key => $value) {
    $id_Film = $value['id_film'];
}

if (isset($_POST['ajout'])) {

    $titre = $_POST['titre'];
    $dureH = $_POST['dureH'];
    $dureM = $_POST['dureM'];
    $dateJ = $_POST['dateJ'];
    $dateM = $_POST['dateM'];
    $dateA = $_POST['dateA'];
    $pegi = $_POST['pegi'];
    $studio = $_POST['studio'];
    // $affiche = $_POST['affiche'];
    $bande = $_POST['bande'];
    $syno = $_POST['syno'];

    $date = $dateA.'/'.$dateM.'/'.$dateJ;
    $dure = $dureH.'h'.$dureM;

    $image = $_FILES['affiche']['name'];

    if (move_uploaded_file($_FILES['affiche']['tmp_name'], $cheminImg.$image)) {
        
        $creaReal = ajoutFilm($titre,  $dure, $date, $pegi, $studio, $image, $bande,$syno);
        
        $idFILM = $id_Film + 1;
        
        $idReal = $_POST['Rea'];
        $ajoutReal = lienFR($idReal, $idFILM);
        
        $idAct = $_POST['Act'];
        $ajoutAct = lienFA($idAct, $idFILM);

        // lien genre film
        $idAct = $_POST['Genre'];
        $ajoutGenre = lienFG($idGenre, $idFILM);
        
    }
    

}
if (isset($_POST['annul'])) {
    header('Location: index.php?page=ListFilm');
}

if (isset($_POST['ajout_act'])) {
    $nomA = $_POST['nom_act'];
    $prenomA = $_POST['prenom_act'];
    $ageA = $_POST['age_act'];
    $nationA = $_POST['nation_act'];
    $photoA = $_POST['photo_act'];

    $creaAct = ajoutAct($nomA, $prenomA, $ageA, $nationA, $photoA);


}

if (isset($_POST['ajout_real'])) {
    $nomR = $_POST['nom_real'];
    $prenomR = $_POST['prenom_real'];
    $ageR = $_POST['age_real'];
    $nationR = $_POST['nation_real'];
    $photoR = $_POST['photo_real'];

    $creaAct = ajoutReal($nomR, $prenomR, $ageR, $nationR, $photoR);


}

if (isset($_POST['ajout_genre'])) {
    $nomG = $_POST['nom_genre'];


    $creaAct = ajoutGenre($nomG);


}

require('View/AjoutFilmView.php');