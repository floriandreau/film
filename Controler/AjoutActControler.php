<?php

require('Model/AjoutAct.php');
$cheminImg = "asset/img/";

if (isset($_POST['ajout'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $nation = $_POST['nation'];
    $photo = $_POST['photo'];

    $creaReal = ajoutReal($nom, $prenom, $age, $nation, $photo);

    header('Location: index.php?page=ListAct');
}
if (isset($_POST['annul'])) {
    header('Location: index.php?page=ListAct');
}

require('View/AjoutActView.php');