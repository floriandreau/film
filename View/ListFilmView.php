<?php

$title = "Liste Réalisateurs";
include 'header.php';


?>

<p>
    Liste films
</p>
<table>
    <thead>

    <th>titre</th>
    <th>durée</th>
    <th>studio</th>

    <tbody>
        <?php
        foreach ($film as $key => $value) :
            
        
        ?>
    <tr>
        
        
    
    <td><a href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value ['titre_film'] ?></a></td>
    <td><a href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value['duree_film'] ?></a></td>
    <td><a href="index.php?page=film&id=<?php echo $value['id_film'];?>"> <?php echo $value ['studio_film'] ?></a></td>
    
    
    </tr>
    <?php
        endforeach;
    ?>
    </tbody>
</table>


<?php
// var_dump($allreal);
include 'footer.php';
