<?php
require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function ajoutFilm($titre, $dure, $date, $pegi, $studio, $affiche, $bande, $syno){
    global $dbh;

    $ajout = $dbh->prepare("INSERT INTO film (titre_film, duree_film, date_sortie_film, pegi_film, studio_film, affiche_film, bande_film, synopsis_film) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $ajout->execute(array($titre, $dure, $date, $pegi, $studio, $affiche, $bande, $syno));
    
    return $ajout;
}

function lienFR($idReal, $idFILM){
    global $dbh;

    $ajout = $dbh->prepare("INSERT INTO realiser (id_real, id_film) VALUES (?, ?)");
    $ajout->execute(array($idReal, $idFILM));
    
    return $ajout;
}

function lienFA($idAct, $idFILM){
    global $dbh;

    $ajout = $dbh->prepare("INSERT INTO jouer (id_acteur, id_film) VALUES (?, ?)");
    $ajout->execute(array($idAct, $idFILM));
    
    return $ajout;
}

function listeAct(){
    global $dbh;

    $LA = $dbh->prepare("SELECT * FROM acteur");
    $LA->execute();
    $LA = $LA->fetchAll(PDO::FETCH_ASSOC);

    return $LA;
}

function listeReal(){
    global $dbh;

    $LR = $dbh->prepare("SELECT * FROM realisateur");
    $LR->execute();
    $LR = $LR->fetchAll(PDO::FETCH_ASSOC);

    return $LR;
}

function ajoutAct($nomA, $prenomA, $ageA, $nationA, $photoA){
    global $dbh;

    $ajout = $dbh->prepare("INSERT INTO acteur (nom_acteur, prenom_acteur, age_acteur, nationalite_acteur, photo_acteur) VALUES (?, ?, ?, ?, ?)");
    $ajout->execute(array($nomA, $prenomA, $ageA, $nationA, $photoA));
    
    return $ajout;
}

function ajoutReal($nomR, $prenomR, $ageR, $nationR, $photoR){
    global $dbh;

    $ajoutR = $dbh->prepare("INSERT INTO realisateur (nom_real, prenom_real, age_real, nationalite_real, photo_real) VALUES (?, ?, ?, ?, ?)");
    $ajoutR->execute(array($nomR, $prenomR, $ageR, $nationR, $photoR));
    
    return $ajoutR;
}

function idFilm(){
    global $dbh;

    $idf = $dbh->prepare("SELECT id_film FROM film");
    $idf->execute();
    $idf = $idf->fetchAll(PDO::FETCH_ASSOC);

    return $idf;
}