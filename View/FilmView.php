<?php
$title= "variable titre film";
include 'header.php';

foreach ($film as $key => $value) {

    /* Mise en ordre de la date au bon format (jj/mm/aaaa) */
    $date = $value['date_sortie_film'];
    $date = explode("-", $date);
    $newDate = $date[2]."/".$date[1]."/".$date[0];
    

?>


<div>
<p>
<?php echo $value['titre_film']?>
</p>
<img src="<?php echo $cheminImg.$value['affiche_film'];?>" alt="Affiche du film ">

<p><?php echo $value['titre_film'];?></p>

<p><?php echo $newDate; ?></p>
<?php 
     $i=1;
     foreach ($genre as $key_genre => $value_genre) {
         $megagenre = $value_genre['type_genre'];
         if ($i<count($genre)) {
             echo $megagenre.", ";
            }
            else {
                echo $megagenre;
            }
            $i++;
        

    }
    ?>
    
     
         
        <p>
            <?php
            $i=1;
             foreach ($act as $key_act => $value_act) {
                 $acteur = $value_act['prenom_acteur']." ".$value_act['nom_acteur'];
                 if ($i<count($act)) {
                     echo $acteur.", ";
                    }
                    else {
                        echo $acteur;
                    }
                    $i++;
            }

    ?>
        </p>

        <?php
            $i=1;
             foreach ($real as $key_real => $value_real) {
                 $realisateur = $value_real['prenom_real']." ".$value_real['nom_real'];
                 if ($i<count($real)) {
                     echo $realisateur.", ";
                    }
                    else {
                        echo $realisateur;
                    }
                    $i++;
            }
            
    ?>
        </p>

<p><?php echo $value['duree_film'];



?></p>

<p>
<?php echo $value['pegi_film']; ?> ans et +
</p>

<h2>Synopsis</h2>
<p>
<?php echo $value['synopsis_film']; ?>
</p>

<div>


</div>

</div>



<?php
}
include 'footer.php';
?>