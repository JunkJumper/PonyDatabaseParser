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
                <h2>Nom Poney</h2>

                <div class="container">
                    <div class="row" style="display: table; height: 300px; overflow: hidden;">
                        <div class="col-md-8" style="display: table-cell; vertical-align: middle;">
                            <p class="ponyDescription">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas voluptatibus quos culpa architecto tenetur deleniti eligendi? Asperiores, error. Saepe nostrum nemo officiis ipsam accusamus rem libero necessitatibus, praesentium sapiente? Error.
                            </p>
                        </div>
                        <div class="col-md-4" style="display: table-cell; vertical-align: top;">
                            <img src="./img/logo.png" alt="" width="100%" />
                            <p style="text-align: center;">Pony Name</p>
                        </div>
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col-md-4">
                            <p>Espèces :</p>
                        </div>
                        <div class="col-md-4">
                            <p>Lieux :</p>
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