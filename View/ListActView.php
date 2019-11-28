<?php

$title = "Liste Acteurs";
include 'header.php';


?>

<p>

</p>


<table>

    <thead>

    <p class="lesacteurs">Les Acteurs</p>
        
    </thead>

    <tbody>

    <?php
    foreach ($Acts as $key => $value) :
    ?>
    <tr>

        <td><a href="index.php?page=Act&id=<?php echo $value['id_acteur']; ?>"><img class="photoacteur" src="<?php echo $cheminImg.$value['photo_acteur']; ?>" alt=""></a></td>
        <td ><a class="nomacteur" href="index.php?page=Act&id=<?php echo $value['id_acteur']; ?>"><?php echo $value['nom_acteur']; ?></a></td>
        <td><a class="prenomacteur" href="index.php?page=Act&id=<?php echo $value['id_acteur']; ?>"><?php echo $value['prenom_acteur']; ?></a></td>

    </tr>
<?php
    endforeach;
?>

    </tbody>

</table>


<?php

include 'footer.php';