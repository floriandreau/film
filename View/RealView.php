<?php
$title= "variablr nom realisateur";
include 'header.php';

var_dump($real);
foreach ($real as $key => $value) {
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
<div>Liste des films</div>
</div>
<?php
}
include 'footer.php';
?>