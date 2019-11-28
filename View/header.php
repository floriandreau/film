<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/style_acteur.css">
    <link rel="stylesheet" href="asset/style_list.css">
    <title>POP FICTA <?php echo $title ?></title>
</head>
<body>

<header class="container">

<nav class="mynav">
<ul>
    <li><a href="index.php?page=ListFilm">Films</a></li>
    <li><a href="index.php?page=ListAct">Acteurs</a></li>
    <li><a href="index.php?page=ListReal">Réalisateurs</a></li>
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

<!-- <div class="center"> -->
<h1><a href="index.php"><img src="asset/elements/popficta.png" class="logo" alt="logo"></a></h1>
</div>



<?php
if (isset($_SESSION['pseudo'])) {
?>
<p><?php echo $_SESSION['pseudo'];?></p>
<?php
require('deconnection.php');
}
else{
?>
<!-- <div class="center"> -->
<button class="signup">Connection</button>
<button class="signin">Inscription</button>
</div>

<?php
}
?>

</header>

<?php require('inscription.php') ?>
<?php require('connection.php') ?>
