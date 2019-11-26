<?php

$title = "Liste Réalisateurs";
include 'header.php';


?>

<p>
    Liste Reals
</p>
<table>
    <thead>

    <th>Nom</th>
    <th>Prénom</th>
    <th>Age</th>

    <tbody>
        <?php
        foreach ($allreal as $key => $value) :
            
        
        ?>
    <tr>
        
        
    
    <td><a href="index.php?page=real&id=<?php echo $value['id_real'];?>"> <?php echo $value ['nom_real'] ?></a></td>
    <td><a href="index.php?page=real&id=<?php echo $value['id_real'];?>"> <?php echo $value['prenom_real'] ?></a></td>
    <td><a href="index.php?page=real&id=<?php echo $value['id_real'];?>"> <?php echo $value ['age_real'] ?></a></td>
    
    
    </tr>
    <?php
        endforeach;
    ?>
    </tbody>
</table>


<?php
// var_dump($allreal);
include 'footer.php';
