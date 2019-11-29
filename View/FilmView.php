<?php
$title= "variable titre film";
include 'header.php';

foreach ($film as $key => $value) {

    /* Mise en ordre de la date au bon format (jj/mm/aaaa) */
    $date = $value['date_sortie_film'];
    $date = explode("-", $date);
    $newDate = $date[2]."/".$date[1]."/".$date[0];
    

?>




<div class="filmm">
<img class="imagefilmm" src="<?php echo $cheminImg.$value['affiche_film'];?>" alt="Affiche du film ">

<div id="synopsisfilm">
<p id="titrefilmm">
<?php echo $value['titre_film']?></p>
<br>

<p><?php echo $newDate; ?></p>
<br>
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
    
    <br>
    <br>
         
        <p>
            <?php
            $i=1;
             foreach ($act as $key_act => $value_act) {
                 $acteur = $value_act['prenom_acteur']." ".$value_act['nom_acteur'];
                 if ($i<count($act)) {
                     ?>
                     <a href="index.php?page=Act&id=<?php echo $value_act['id_acteur'];?>">Acteur : <?php
                     echo $acteur.", ";?></a>
                   <?php }
                    else {
                      ?>  <a href="index.php?page=Act&id=<?php echo $value_act['id_acteur'];?>"> <?php
                     echo $acteur;?></a><?php
                    }
                    $i++;
           }?> 

  
        </p>
        <br>
        <?php
            $i=1;
             foreach ($real as $key_real => $value_real) {
                 $realisateur = $value_real['prenom_real']." ".$value_real['nom_real'];
                 if ($i<count($real)) {
                     ?> 
                  <a href="index.php?page=real&id=<?php echo $value_real['id_real'];?>"> <?php echo $realisateur.", ";?></a> 
                     <?php
                  }
                    else {
                        ?> 
                        <a href="index.php?page=real&id=<?php echo $value_real['id_real'];?>">Réalisateur : <?php echo $realisateur;?></a>
                        <?php                    }
                    $i++;
            }
            
    ?>
    
        <br>
    
<p>Durée : <?php echo $value['duree_film'];



?></p>

<p>
Age conseillé : <?php echo $value['pegi_film']; ?> ans et +
</p>
<br>
<p class="syno">Synopsis</p><br>
<p>
<?php echo $value['synopsis_film']; ?>
</p>

<div>


</div>

</div>
</div>
<?php 
$video = explode('/', $value['bande_film']);
$watch = explode('=', $video[3]);
$newVideo = $video[0]."//".$video[2]."/embed"."/".$watch[1];
?>

<iframe src="<?php echo $newVideo; ?>"></iframe>
<?php
}
include 'footer.php';
?>