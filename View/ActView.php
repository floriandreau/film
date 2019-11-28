<?php

$title = "";
include 'header.php';

foreach ($ActFilm as $key => $value) {

    /* Mise en ordre de la date au bon format (jj/mm/aaaa) */
    $date = $value['date_sortie_film'];
    $date = explode("-", $date);
    $newDate = $date[2] ."/". $date[1] ."/". $date[0];


    ?>


    <div id="acteurm">
        <img class="imgacteurm" src="<?php echo $cheminImg . $value['photo_acteur']; ?>" alt="Photo de <?php echo $value['nom_acteur'] . $value['prenom_acteur']; ?>">
<div id="infoacteurm">
        <p>
            
                <h3><?php echo $value['nom_acteur'] . " " . $value['prenom_acteur']; ?></h3>
        </p>

        <h2>Age : <?php echo $value['age_acteur']." "; ?> ans</h2>
       
            
       

        <h2>Nationalité : <?php echo $value['nationalite_acteur']; ?></h2>
        <p>
            
        </p>

        <div>
            <h2>Filmographie : </h2>
            <a href="index.php?page=film&id=<?php echo $value['id_film']; ?>">
            <img class="affichefilmm" src="<?php echo $cheminImg . $value['affiche_film']; ?>" alt="Affiche du film <?php echo $value['titre_film']; ?>">
            </a>
<div id="titrefilmm">
            <p><a class="titrefilmm" href="index.php?page=film&id=<?php echo $value['id_film']; ?>">
            <?php echo $value['titre_film']  ?></a></p>
         
                  </div>                                                                     
          

            <p><?php echo $newDate; ?></p>
        </div>
        </div>
    </div>
    


<?php
}
include 'footer.php';
