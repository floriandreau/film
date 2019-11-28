<?php
require('env.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);

function supprReal($id){
    global $dbh;
    $suppr = $dbh->prepare("DELETE FROM realisateur INNER JOIN realiser ON realisateur.id_real=realiser.id_real WHERE id_real={$id}");
    $suppr->execute();
    return $suppr;
}