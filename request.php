<?php
    require_once 'PDO.php';

    if ($NbreData != 0) {
        ?>
        <table>
        <thead>
            <tr>
                <th>memid</th>
                <th>surname</th>
                <th>firstname</th>
                <th>address</th>
                <th>zipcode</th>
                <th>telephone</th>
                <th>recommendedby</th>
                <th>joindate</th>
            </tr>
        </thead>
        <tbody>
    <?php
    // pour chaque ligne (chaque enregistrement)
        foreach ($select as $row) {
            // DONNEES A AFFICHER dans chaque cellule de la ligne
            ?>
            <tr>
                <td><?php echo $row['memid']; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['zipcode']; ?></td>
                <td><?php echo $row['telephone']; ?></td>
                <td><?php echo $row['recommendedby']; ?></td>
                <td><?php echo $row['joindate']; ?></td>
            </tr>
    <?php
    } // fin foreach
        ?>
        </tbody>
        </table>
    <!-- la reponse en dessous  -->
    <?php
    } else {
        if ($username === $_POST['identifiant']) {
            ?>
            <button >Insérer des données</button>
            <?php
        } else {
            ?>
            pas de données à afficher
            <?php
        }
        ?>
    <?php
    }
    ?>