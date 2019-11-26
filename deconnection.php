<?php
if (isset($_POST['deconnection'])) {
    session_destroy();
    header('location: index.php'); // Ici il faut mettre la page sur lequel l'utilisateur sera redirigé.
    exit;
}
?>

<form method="POST">
<button name="deconnection">Déconnecté</button>
</form>
