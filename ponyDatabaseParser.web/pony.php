<?php

function getPony(String $n) {
    include "database.env.php"; //cette instruction est necessaire pour obtenir la configuration que vous avez définie dans le fichier databases.php

    try {
    // Connection MySQL.
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    } catch(Exception $e) {
        // Si il y a une erreur, arret du script.
            die('Erreur : '.$e->getMessage());
    } // Récupération du contenu de la table "infos"

    
    $reponse = $bdd->query("SELECT * FROM allponies WHERE name = '$n' ;");
    return $reponse->fetchAll(PDO::FETCH_ASSOC);
}

$ponyName = "";
$ponyTab = array();
$arrayKind = array();
$arrayPlace = array();

if(isset($_GET['name'])) {
    $ponyName = str_replace("%20", " ", $_GET['name']);
    $ponyTab = getPony($ponyName);

    for ($i=0; $i < sizeof($ponyTab); ++$i) { 
        if(!in_array($ponyTab[$i]['kind'],$arrayKind, TRUE)) {
            array_push($arrayKind, $ponyTab[$i]['kind']);
        }
        if(!in_array($ponyTab[$i]['place'],$arrayPlace, TRUE)) {
            array_push($arrayPlace, $ponyTab[$i]['place']);
        }
    }
    
}


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
                <h2><?php echo $ponyTab[0]['name']?></h2>

                <div class="container">
                    <div class="row" style="display: table; height: 300px; overflow: hidden;">
                        <div class="col-md-8" style="display: table-cell; vertical-align: middle;">
                            <p class="ponyDescription">
                                <?php echo $ponyTab[0]['description']?>
                            </p>
                        </div>
                        <div class="col-md-4" style="display: table-cell; vertical-align: top;">
                            <?php 
                                if(str_contains($ponyTab[0]['image'], "https://")) {
                                    echo '<td>'
                                        .'<img src="' . explode(".png", $ponyTab[0]['image'])[0].'.png" alt="image du poney" width="100% />"'
                                    .'</td>';
                                } else {
                                    echo '<img src="./img/logo.png" alt="" width="100%" />';
                                }
                            ?>
                            <p style="text-align: center;"><?php echo $ponyTab[0]['name']?></p>
                        </div>
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col-md-4">
                            <p>Espèces :</p>
                            <?php
                                for ($i=0; $i < sizeof($arrayKind); ++$i) { 
                                    echo "<li>$arrayKind[$i]</li>";
                                }
                            ?>
                        </div>
                        <div class="col-md-4">
                            <p>Lieux :</p>
                            <?php
                                for ($i=0; $i < sizeof($arrayPlace); ++$i) { 
                                    echo "<li>$arrayPlace[$i]</li>";
                                }
                            ?>
                        </div>
                    </div>
                </div>

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