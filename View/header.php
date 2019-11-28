<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//developers.lucasvandenberg.fr/smaltify/import/css/smalt.css">
    <link rel="stylesheet" href="asset/style.css">
    <title>POP FICTA<?php echo $title ?></title>
</head>
<body>

<header class="g-container grid-12 rows-3 m-a">

    <nav class="c1-4 r2-1 gg">
    <ul class="ligne">
        <li class="none"><a href="index.php?page=ListFilm">Films</a></li>
        <li class="none"><a href="index.php?page=ListAct">Acteurs</a></li>
        <li class="none"><a href="index.php?page=ListReal">Réalisateurs</a></li>
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


    <h1 class="c6-3 r2-1 gg"><a href="index.php"><img src="asset/elements/popficta.png" class="logo" alt="logo"></a></h1>


    <div class="c10-3 r2-1 gg">

        <?php
            if (isset($_SESSION['pseudo'])) {
        ?>
            <p class="style_user space"><?php echo $_SESSION['pseudo'];?></p>
        <?php
            require('deconnection.php');
            }
            else{
        ?>
            <!-- <div class="c10-3 r2-1 gg"> -->
            <button class="signup space style_btn">Connection</button>
            <button class="signin style_btn">Inscription</button>
            <!-- </div> -->
        <?php
            }
        ?>
    </div>
</header>

<?php require('inscription.php') ?>
<?php require('connection.php') ?>
