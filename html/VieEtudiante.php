<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/vie_etudiante.css">
    <link rel="stylesheet" href="../css/Interface_de_base.css">

    <script src="../js/vie_etudiante.js"></script>

    <title>Vie VieEtudiante</title>

</head>


<body>
    <?php include("menu.php"); ?>

    <div class="arborecense">
        <a href="./Acceuil.php">Accueil</a>
        <span>›</span>
        <span>Vie étudiante</span>
    </div>

    <section id="text-intro">

        <h2 class="h2_titre_vie_etudiant">Une vie etudiant pour tous </h2>

        <div class="intro-container">

            <div class="intro-text">
                <p>
                    À l’Efrei, la vie étudiante rime avec <b>engagement</b>, <b>créativité</b> et <b>réussite</b>.
                    Au sein de campus dynamiques, les étudiants profitent d’une <b>pédagogie innovante</b>,
                    d’une <b>vie associative riche</b> et d’un <b>accompagnement complet</b> :
                    logement, aides financières, infrastructures modernes et événements étudiants.
                </p>
            </div>

            <div class="intro-image">
                <img src="../img/intro-vie-etudiant.png" alt="Vie étudiante">
            </div>

        </div>

    </section>



    <section class="Les_campus">
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
            <a href="./Paris.php">
                ➾ - 1 Information du Campus Paris
            </a>
        </div>

        <div class="redirection-campus">
            <a href="./Bordeaux.php">
                ➾ - 2 Information du Campus Bordeaux
            </a>
        </div>

        <div>
            <a href="./Paris.php/">
                <img src="../img/Paris_Campus_img1.png" id="Paris_Campus_img1">
            </a>
        </div>
    </section>

    <section class="section-crous">

        <h2>Restauration</h2>

        <h3>le CROUSS est la pour vous</h3>

        <p>
            le Crouss est un restaurant universitaire qui peux compter jusuqu'a 300 personne ,
            situer au -1 du batiment " la maison " , il est ouvert du lundi au vendredi et 11h45 à 14h30.
        </p>

        <img src="../img/cours-efrei.png" id="img_crouss">

    </section>

    <section class="associations-section">

        <div>

            <h2>Associations étudiantes</h2>

            <div class="associations-container" id="assoContainer">
                <div class="asso-card">
                    <h3>4eSport</h3>
                    <h4>Paris • Culture & Loisirs</h4>
                    <p>Association e-sport avec compétitions et événements.</p>
                    <img src="../img/asso/asso_esport.png" class="img_asso">

                </div>

                <div class="asso-card">
                    <h3>4L & Faons</h3>
                    <h4>Humanitaire</h4>
                    <p>Participation au 4L Trophy et projets solidaires.</p>
                    <img src="../img/asso/asso_4L.png" class="img_asso">

                </div>

                <div class="asso-card">
                    <h3>Aero Efrei</h3>
                    <h4>Technologique</h4>
                    <p>Passion aéronautique, simulateur de vol.</p>
                    <img src="../img/asso/asso_aero.png" class="img_asso">
                </div>

                <div class="asso-card">
                    <h3>Art’Efrei</h3>
                    <h4>Paris Artistiques</h4>
                    <p>L'association de photographie et de vidéo de l'école.</p>
                    <img src="../img/asso/asso_art.png" class="img_asso">

                </div>

                <div class="asso-card">
                    <h3>Asian Efrei</h3>
                    <h4>Paris Internationales</h4>
                    <p>Asian Efrei promeut les cultures asiatiques : initiation aux jeux traditionnels,
                        concours de cosplay, jeux musicaux… et beaucoup de fun !</p>
                    <img src="../img/asso/asso_asian.png" class="img_asso">
                </div>

                <div class="asso-card">
                    <h3>Bureau Des Arts</h3>
                    <h4>Paris Artistiques</h4>
                    <p>Le BDA est l’association de promotion des différents domaines artistiques.
                        Elle travail avec les autre association pour proposer des beau événements</p>
                    <img src="../img/asso/asso_bureau_des_art.png" class="img_asso">
                </div>

                <div class="asso-card">
                    <h3>Bureau Des Arts</h3>
                    <h4>Paris Artistiques</h4>
                    <p>Le BDA est l’association de promotion des différents domaines artistiques.
                        Elle travail avec les autre association pour proposer des beau événements</p>
                    <img src="../img/asso/asso_bureau_des_art.png" class="img_asso">
                </div>

            </div>
        </div>

        <div class="pagination">
            <button id="prev">⬅</button>
            <button id="next">➡</button>
        </div>

    </section>





    <?php include("Footer.php"); ?>

</body>

</html>