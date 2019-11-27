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
    <title>POP FICTA <?php echo $title ?></title>
</head>
<body>

<header class="container">

<nav class="mynav">
<ul>
    <li><a href="index.php?page=ListFilm">Films</a></li>
    <li><a href="index.php?page=ListAct">Acteurs</a></li>
    <li><a href="index.php?page=ListReal">Réalisateurs</a></li>
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

<!-- <div>
<form action="inscription.php" method="POST">
<input name="Pseudo" type="text" placeholder="Pseudo">
<input name="Pass" type="password" placeholder="Mot de passe">
<input name="Comfpass" type="password" placeholder="Comfirmation mot de passe">
<input name="inscription" type="submit">
</form>
</div> -->

<?php require('inscription.php') ?>
<?php require('connection.php') ?>

<!-- <div>
<form action="connection.php" method="POST">
<input name="Pseudo" type="text" placeholder="Pseudo">
<input name="Pass" type="password" placeholder="Mot de passe">
<input name="Co" type="submit">
</form>
</div> -->