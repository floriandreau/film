<?php

$title = "";
include 'header.php';


?>

<table id="blurBody">
    <tbody>
        <?php
        foreach ($film as $key => $value) :
            
        
        ?>
    <tr>
        
        
    <td><a href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <img class="imgfilm" src="<?php echo $cheminImg.$value['affiche_film'] ?>" alt=""> </a></td>
    <td><a class="titrefilm" href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value ['titre_film'] ?></a></td>
    <td><a class="studiofilm" href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value ['studio_film'] ?></a></td>
    <td><a class="datesortiefilm" href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value ['date_sortie_film'] ?></a></td>
    <td><a class="dureefilm" href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value['duree_film'] ?></a></td>
    
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
</table>
</p>

<?php

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
        ?>
<a href="index.php?page=AjoutFilm">Ajouter</a>
        <?php
    }
}

include 'footer.php';
