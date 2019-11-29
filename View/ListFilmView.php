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
    
    </tr>
    <?php
        endforeach;
    ?>
    </tbody>
    </div>
</table>


<?php
// var_dump($allreal);
include 'footer.php';
