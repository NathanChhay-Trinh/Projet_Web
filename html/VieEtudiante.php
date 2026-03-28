<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/vie_etudiante.css">
    <link rel="stylesheet" href="../css/Interface_de_base.css">
    <title>Vie VieEtudiante</title>

</head>


<body>
    <?php include("menu.php"); ?>

    <div class="arborecense">
        <a href="./Acceuil.php">Accueil</a>
        <span>›</span>
        <span>Vie étudiante</span>
    </div>

    <div class="Les_campus">
        <p>Nos Campus</p>
        <h2 class="h2_titre_campus"> Paris & Bordeaux , deux campus au cœur de la création numérique </h2>
        <div id="text_campus">

            • Installés au coeur de grandes villes dynamiques, les campus de ISART Digital offrent un environnement
            moderne
            et
            stimulant, entièrement dédié aux métiers du jeu vidéo et de l’animation 3D. Pensés comme de véritables
            studios de
            création, ils permettent aux étudiants d’évoluer dans des conditions proches de l’industrie. <br>

            • Salles informatiques équipées, espaces de travail collaboratif, zones de prototypage et de production :
            tout
            est conçu
            pour favoriser l’apprentissage par la pratique, l’échange et l’innovation.<br>


        </div>

        <div class="redirection-campus">
            <a href=".\Campus\Paris.php">
                ➾ - 1 Information du Campus Paris
            </a>
        </div>

        <div class="redirection-campus">
            <a href="./Campus/Bordeaux.php">
                ➾ - 2 Information du Campus Bordeaux
            </a>
        </div>

        <div><a href="./Campus/Paris.php/">
                <img src="../img/Paris_Campus_img1.png" id="Paris_Campus_img1">
            </a></div>

        <?php include("Footer.php"); ?>

</body>

</html>