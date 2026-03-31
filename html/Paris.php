<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/Interface_de_base.css">
    <link rel="stylesheet" href="../css/vie_etudiante.css">
    <link rel="stylesheet" href="../css/campus.css">
    <title>Campus Paris – Efrei</title>
</head>

<body>
    <?php include("./menu.php"); ?>

    <div class="arborecense">
        <a href="./Acceuil.php">Accueil</a>
        <span>›</span>
        <a href="./VieEtudiante.php">Vie étudiante</a>
        <span>›</span>
        <span>Campus Paris</span>
    </div>


    <section class="campus-intro">
        <div class="campus-intro-text">
            <p class="campus-label">Nos Campus</p>
            <h1>Campus de Paris </h1>
            <p class="campus-desc">
                Situé dans le Grand Paris, le campus de l'Efrei à Villejuif offre aux étudiants 
                un environnement favorable à la pédagogie et à l'enseignement, avec des 
                infrastructures neuves, modernes et innovantes.
            </p>
            <div class="campus-adresse">
                 30-32 Av. de la République, 94800 Villejuif
            </div>
        </div>

        <div class="campus-intro-img">
            <img src="../img/paris-campus.png" alt="Campus Efrei Paris Villejuif">
        </div>
    </section>


    <section class="chiffres-section">
        <p class="campus-label">Chiffres clés</p>
        <h2>L'Efrei Paris en 4 chiffres clés</h2>
        <p class="chiffres-sous-titre">
            En 90 ans d'innovation et de formation, nous avons créé un cadre 
            d'apprentissage inspirant et à taille humaine.
        </p>

        <div class="chiffres-grid">
            <div class="chiffre-card">
                <span class="chiffre-nombre">5 000</span>
                <span class="chiffre-label">étudiants</span>
            </div>
            <div class="chiffre-card">
                <span class="chiffre-nombre">21 500</span>
                <span class="chiffre-label">m² de campus</span>
            </div>
            <div class="chiffre-card">
                <span class="chiffre-nombre">5</span>
                <span class="chiffre-label">Amphithéâtres</span>
            </div>
            <div class="chiffre-card">
                <span class="chiffre-nombre">1</span>
                <span class="chiffre-label">Restaurant universitaire (CROUS)</span>
            </div>
        </div>
    </section>

    <section class="map-section">
        <p class="campus-label">Nous trouver</p>
        <h2>Accès au Campus</h2>

        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d464.684259891203!2d2.3636001731749943!3d48.7885502427359!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673e24e04a9c3%3A0xc55cb3e676f95321!2sEfrei!5e0!3m2!1sfr!2sfr!4v1774994520348!5m2!1sfr!2sfr" 
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