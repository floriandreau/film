<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IPSA FICTA <?php echo $title ?></title>
</head>
<body>

<header>

<nav>
<ul>
    <li><a href="index.php?page=ListFilm">Films</a></li>
    <li><a href="index.php?page=ListReal">Réalisateurs</a></li>
    <li><a href="index.php?page=ListAct">Acteurs</a></li>
<?php

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
        
?>
<li>
<a href="index.php?page=ListUser">User</a>
</li>
<?php
    }
}

?>
</ul>
</nav>
<h1><a href="index.php">Logo</a></h1>


<?php
if (isset($_SESSION['pseudo'])) {
?>
<p><?php echo $_SESSION['pseudo'];?></p>
<?php
require('deconnection.php');
}
else{
?>
<button>Connection</button>
<button>Inscription</button>
<?php
}
?>

</header>

<?php require('inscription.php') ?>
<?php require('connection.php') ?>
