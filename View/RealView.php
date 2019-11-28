<?php
$title= "variable nom realisateur";
include 'header.php';


foreach ($real as $key => $value) {
    $title="";
    $date=$value['date_sortie_film'];
    $date=explode("-",$date);
    $newDate = $date[2].'/'.$date[1].'/'.$date[0];
    
?>
<div>
<img src="<?php echo $cheminImg.$value['photo_real'];?>" alt="photo de <?php echo $value['nom_real']. $value['prenom_real']; ?>">

<p>
    <?php
    echo $value['nom_real'].$value['prenom_real'];
    ?>
</p>
<p>
<?php
echo $value['age_real'];

?>
</p>
<p>
<?php
echo $value['nationalite_real'];
?>
</p>
<div>
    <p>Filmographie</p>
<img src="<?php echo $cheminImg.$value['affiche_film'];?>" alt="affiche du film <?php echo $value['titre_film']; ?>">
<p>  <a href="index.php?page=film&id=<?php echo $value['id_film'];?>"><?php
                     echo $value ['titre_film']  ?></a></p>
<p><?php
 echo $newDate;?></p> 
<?php

?></p>
</div>
</div>
<?php


}
include 'footer.php';
?>