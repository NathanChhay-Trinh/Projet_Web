<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/Interface_de_base.css">
    <link rel="stylesheet" href="../css/vie_etudiante.css">
    <link rel="stylesheet" href="../css/campus.css">

    <title>Bordeaux Campus</title>

</head>

<body>

    <?php include("./menu.php"); ?>

    <div class="arborecense">
        <a href="./Acceuil.php">Accueil</a>
        <span>›</span>
        <a href="./VieEtudiante.php">Vie étudiante</a>
        <span>›</span>
        <span>Campus Bordeaux</span>
    </div>

    <section class="campus-intro">
        <div class="campus-intro-text">
            <p class="campus-label">Nos Campus</p>
            <h1>Campus de Bordeaux </h1>
            <p class="campus-desc">
                L’Efrei, Grande école généraliste et numérique à Bordeaux, offre à ses étudiants un cadre de vie idéal et un environnement 
                propice à l’apprentissage et à l’enseignement. Découvrez nos formations ingénieur informatique habilitées par la CTI, 
                nos Bachelors et Mastères accessible sur Parcoursup dès le post-bac jusqu’au Bac+5.
            </p>
            <div class="campus-adresse">
                83 Rue Lucien Faure, 33000 Bordeaux
            </div>
        </div>

        <div class="campus-intro-img">
            <img src="../img/campus-bordeau.png" alt="Campus Bordeaux image">
        </div>
    </section>


    <section class="chiffres-section">
        <p class="campus-label">Chiffres clés</p>
        <h2>Efrei Bordeaux en 4 chiffres clés</h2>


        <div class="chiffres-grid">
            <div class="chiffre-card">
                <span class="chiffre-nombre">500</span>
                <span class="chiffre-label">étudiants</span>
            </div>
            <div class="chiffre-card">
                <span class="chiffre-nombre">3 500</span>
                <span class="chiffre-label">m²</span>
            </div>
            <div class="chiffre-card">
                <span class="chiffre-nombre">3</span>
                <span class="chiffre-label">Cursus</span>
            </div>
            <div class="chiffre-card">
                <span class="chiffre-nombre">17</span>
                <span class="chiffre-label">salles de cours</span>
            </div>
        </div>
    </section>


    <section class="map-section">
        <p class="campus-label">Nous trouver</p>
        <h2>Accès au Campus</h2>

        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d999.7840466304627!2d-0.560332358127241!3d44.86603405985982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527262e930981%3A0xf0bb43d82fd2d407!2sEfrei%20%E2%80%94%20%C3%89cole%20d&#39;ing%C3%A9nieurs%20g%C3%A9n%C3%A9raliste%20et%20experts%20du%20num%C3%A9rique%20%7C%20Campus%20de%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1774998028230!5m2!1sfr!2sfr" 
                width="100%"
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>


    <?php include("./Footer.php"); ?>


</body>

</html>