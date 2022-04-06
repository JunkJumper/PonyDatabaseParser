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
                <h2>Recherche par nom</h2>

                <form class="form-horizontal">
                    <fieldset>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-8 control-label" for="textinput">Nom poney</label>
                            <div class="col-md-8">
                                <input id="ponyName" name="ponyName" type="text" placeholder="nom" class="form-control input-md">
                            </div>
                        </div>
                        <br />
                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-md-6">
                                <button id="singlebutton" name="singlebutton" class="btn btn-info">Chercher</button>
                            </div>
                        </div>

                    </fieldset>
                </form>


                <table style="width: 100%;margin-top: 10px;">
                    <tbody>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Espèce</th>
                            <th>Genre</th>
                            <th>Lieu</th>
                            <th>Image</th>
                        </tr>
                        <tr>
                            <td>.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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