<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="main.js"></script>
</head>
<body>
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
        if ($username === 'userinsertonly') {
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
</body>
</html>