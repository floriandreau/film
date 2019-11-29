<?php

$title = "Liste Réalisateurs";
include 'header.php';


?>


<table> <div id="listfilm">
    <thead>

    <p class="topfilm">Le Top des films</p>

    <tbody>
        <?php
        foreach ($film as $key => $value):
            
        
        ?>
    <tr>
        
        
    <td><a class="imgfilm" href="index.php?page=film&id=<?php echo $value['id_film'];?>"><img class="imgfilm" src="<?php echo $cheminImg.$value ['affiche_film'] ?>" alt=""> </a></td>
    <div class="toto">
    <td ><a class="titrefilm" href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value ['titre_film'] ?></a></td>
    <td><a class="dureefilm" href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value['duree_film'] ?></a></td>
    <td><a class="studiofilm" href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value ['studio_film'] ?></a></td>
   </div>
    
    <td><a href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <img src="<?php echo $cheminImg.$value['affiche_film'] ?>" alt=""> </a></td>
    <td><a href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value ['titre_film'] ?></a></td>
    <td><a href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value ['studio_film'] ?></a></td>
    <td><a href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value ['date_sortie_film'] ?></a></td>
    <td><a href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value['duree_film'] ?></a></td>
    
    <?php
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
                ?>
    <td><a href="index.php?page=suppFilm&id=<?php echo $value['id_film'];?>">Supprimer</a></td>
                <?php
            }
        }
    ?>

    </tr>
    <?php
        endforeach;
    ?>
    </tbody>
    </div>
</table>


<?php

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
        ?>
<a href="index.php?page=AjoutFilm">Ajouter</a>
        <?php
    }
}

include 'footer.php';
