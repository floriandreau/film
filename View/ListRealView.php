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
    <?php
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
                ?>
    <th>Option</th>
                <?php
            }
        }
    ?>

    <tbody>
        <?php
        foreach ($allreal as $key => $value) :
        ?>
    <tr>
        
    <td><a href="index.php?page=real&id=<?php echo $value['id_real'];?>"><img src="<?php echo $cheminImg.$value ['photo_real'] ?>" alt=""> </a></td>
    <td><a href="index.php?page=real&id=<?php echo $value['id_real'];?>"> <?php echo $value ['nom_real'] ?></a></td>
    <td><a href="index.php?page=real&id=<?php echo $value['id_real'];?>"> <?php echo $value['prenom_real'] ?></a></td>
    <?php
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
                ?>
    <td><a href="index.php?page=suppReal&id=<?php echo $value['id_real'];?>">Supprimer</a></td>
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

<?php
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] = 1 || $_SESSION['role'] = 2) {
                ?>
    <a href="index.php?page=AjoutReal">Ajouter</a>
                <?php
            }
        }

include 'footer.php';
