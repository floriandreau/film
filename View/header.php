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
   <link rel="stylesheet" href="asset/style_acteur.css">
    <link rel="stylesheet" href="asset/style_listact.css">
    <link rel="stylesheet" href="asset/style_listreal.css">
    <link rel="stylesheet" href="asset/style_real.css">
    <link rel="stylesheet" href="asset/style_film.css">
    <link rel="icon" href="asset/elements/logo_popficta.png" />
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/style_carousel.css">
    <link rel="stylesheet" href="asset/animpop.css">
    <link rel="stylesheet" href="asset/style_listfilm.css">
    <title>POP FICTA | <?php echo $title ?></title>
</head>

<body> 
<!-- <script>
        let gif = document.createElement("div");
        document.body.appendChild(gif);
        gif.style = "width: 100%; height: 100%; position: absolute; display: flex; justify-content: center; align-items: center; top: 0; left: 0; z-index: 9999; background-color: white; transition: all 0.5s ease-in-out; opacity: 0.1;"
        let image = document.createElement("img");
        gif.appendChild(image);
        image.src = "asset/elements/load.svg";
        image.style = "height: 126px; width: 229px;";
        window.addEventListener("load", function() {
            setTimeout(function(){
                gif.style.opacity = "0";
                setTimeout(function(){
                    document.body.removeChild(gif);
                },1000)
            }, 2000) 
        })
    </script> -->

    <header class="g-container grid-12 rows-3 m-a" id="blurHead">

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
                <div class="ticket space">

                    <p class="style_user"><?php echo $_SESSION['pseudo']; ?></p>
                </div>



                <!-- Code pour chnager le fond du pseudo en fonction du role utilisateur-->
                <? php/* if (isset($_SESSION["role"])) {
            if ($_SESSION["role"]==0) {
                echo "ticket";
            }
            if ($_SESSION["role"]==1) {
                echo "ticket_admin";
            }
            if ($_SESSION["role"]==2) {
                echo "ticket_supera";
            }
        } */ ?>



            <?php
                require('deconnection.php');
            } else {
                ?>
                <!-- <div class="c10-3 r2-1 gg"> -->
                <button onclick="popCo()" class="signup space style_btn">Connexion</button>
                <button onclick="popInsc()" class="signin style_btn">Inscription</button>
                <!-- </div> -->
            <?php
            }
            ?>
        </div>
    </header>

    <?php require('inscription.php') ?>
    <?php require('connection.php') ?>