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
</ul>
</nav>
<h1><a href="index.php">Logo</a></h1>

<button>Connection</button>
<button>Inscription</button>

</header>

<div>
<form action="Inscription.php">
<input name="Pseudo" type="text" placeholder="Pseudo">
<input name="Pass" type="password" placeholder="Mot de passe">
<input name="Comfpass" type="password" placeholder="Comfirmation mot de passe">
<input name="Insc" type="submit">
</form>
</div>

<div>
<form action="Connection.php">
<input name="Pseudo" type="text" placeholder="Pseudo">
<input name="Pass" type="password" placeholder="Mot de passe">
<input name="Co" type="submit">
</form>
</div>