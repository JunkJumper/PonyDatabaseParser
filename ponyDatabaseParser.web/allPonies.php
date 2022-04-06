<?php

function getAllponies() {
    include "database.env.php"; //cette instruction est necessaire pour obtenir la configuration que vous avez définie dans le fichier databases.php

    try {
    // Connection MySQL.
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    } catch(Exception $e) {
        // Si il y a une erreur, arret du script.
            die('Erreur : '.$e->getMessage());
    } // Récupération du contenu de la table "infos"

    $reponse = $bdd->query('SELECT * FROM allponies');
    return $reponse->fetchAll(PDO::FETCH_ASSOC);
}

$allPoniesTab = getAllponies();
?>

<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pony Database</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/Bootstrap.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="wrapAll clearfix">
        <div class="sidebar">
            <div class="logo">
                <a href="index.php"><img src='img/logo.png' alt="logo"></a>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="index.php">Homepage</a></li>
                    <li><a href="allPonies.php">Afficher tous les poneys</a></li>
                </ul>
                <h3>Recherche</h3>
                <ul>
                    <li><a href="searchByName.php">Par nom</a></li>
                    <li><a href="searchByKind.php">Par espèce</a></li>
                    <li><a href="searchByLocation.php">Par lieu</a></li>
                </ul>
            </div>


        </div>
        <div class="mainsection">
            <div class="article">
                <h1>Pony database</h1>
                <h2>Tous les poneys</h2>
                <p>Cette base de données de poneys permet à n'importe qui d'accèder à des informations sur un ou plusieurs poneys. Il y a plusieurs moyens de recherche.
                </p>

                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Lieu</th>
                            <th>Espèce</th>
                            <th>Image</th>
                            <th>Voir fiche poney</th>
                        </tr>
                        <tr>
                        
                        <?php
                        foreach ($allPoniesTab as $var => $v) {
                            echo '<tr>';

                            foreach ($v as $object => $value) {
                                if(str_contains($value, "https://")) {
                                    echo '<td>'
                                        .'<img src="' . explode(".png", $value)[0].'.png" alt="image du poney" width="100% />"'
                                    .'</td>';
                                } else if(str_contains($value, "data:image")) {
                                    echo '<td>No displayable image</td>';
                                } else {
                                    echo "<td>$value</td>";
                                }
                            }

                            $ponyName = $v['name'];

                            echo '<td>'
                                .'<a href="./pony.php?name=' .$ponyName .'" class="btn btn-info">Voir fiche de '. $ponyName .'</a>'
                            .'</td>';
                            
                            echo '</tr>';
                        }
                        
                        ?>
                        
                        </tr>
                    </tbody>
                </table>


                <div class="middleButtons">
                    <a href="./allPonies.php" class="btn btn-primary">Afficher tous les poneys</a>
                    <a href="./searchByName.php" class="btn btn-primary">Recherche par nom</a>
                    <a href="./searchByKind.php" class="btn btn-primary">Recherche par espèce</a>
                    <a href="./searchByLocation.php" class="btn btn-primary">Recherche par lieu</a>
                </div>

            </div>



        </div>
    </div>


    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
    </script>
    <script src="script.js"></script>


</body>

</html>