<?php
$title= "variable nom realisateur";
include 'header.php';


foreach ($real as $key => $value) {
    $title="";
    $date=$value['date_sortie_film'];
    $date=explode("-",$date);
    $newDate = $date[2].'/'.$date[1].'/'.$date[0];
    
?>
<div id="realm">
    <img class="imagerealm"src="<?php echo $cheminImg.$value['photo_real'];?>" alt="photo de <?php echo $value['nom_real']. $value['prenom_real']; ?>">
<div id="inforealm">
    
       <h3><?php
     echo $value['nom_real'].'   '.$value['prenom_real'];
        ?></h3> <br>
    
    <h2>Age : <?php echo $value['age_real']." "; ?> ans</h2>
    <br>
    
    <h2>Nationalité : <?php echo $value['nationalite_real']; ?></h2>
    <br><br>
    
    <div>
        <h2>Filmographie : </h2><br><div id="titrefilmm">
            <p><?php echo $value ['titre_film']?>
        </div><br>
        <a href="index.php?page=film&id=<?php echo $value['id_film']; ?>">
        <img class="affichefilmm" src="<?php echo $cheminImg.$value['affiche_film'];?>" alt="affiche du film <?php echo $value['titre_film']; ?>">
        <br><br>
    Date de sortie : <?php
    echo $newDate;?>
 </div>  </div>





<?php


}
include 'footer.php';
?>