<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/Interface_de_base.css">
    <link rel="stylesheet" href="../css/Formations.css">
    <title>Formations</title>

</head>

<body>

    <?php include("menu.php"); ?>
    <div id="Nos_formations"><h1>Nos formations</h1></div>
    <div class="presentation_formation"><strong>Découvrez</strong> nos formations pour construire un <strong>parcours</strong> qui vous ressemble!
    <br>L'Efrei propose une multitude de formations <strong>variées</strong> et <strong>adaptées</strong> aux enjeux technologiques actuels, permettant à chaque étudiant de construire un parcours en phase avec ses <strong>ambitions</strong>.
    <br><br>
    <strong>Prog. Grande École:</strong> Des formations généralistes alliant connaissances scientifiques et les compétences techniques nécessaires à l’intégration du cycle ingénieur
    <br><br>
    <strong>Prog. Technologie & Numérique:</strong> Une spécialisation professionnelle solide, tout en leur permettant d’acquérir les bases théoriques indispensables à leur domaine.

    </div>
    
    <div id="formation_container">
        <div class="formation">
            <a href="./Formation/Grande_ecole.php">
            <img src="../img/Grande_ecole.jpg" class="Grande_ecole" alt="Logo Grande Ecole">
            Prog. Grande École</a>
        </div>
        <div class="formation">
            <a href="./Formation/Technologie&Numerique.php">
            <img src="../img/Technologie&Numerique.jpg" class="Technologie&Numerique" alt="Logo Technologie & Numerique">
            Prog. Technologie & Numérique</a>
        </div>
        </div>

    <?php include("Footer.php"); ?>

</body>


</html>