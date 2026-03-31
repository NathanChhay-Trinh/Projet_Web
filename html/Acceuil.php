<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/Acceuil.css">
    <link rel="stylesheet" href="../css/Interface_de_base.css">
    <title>Accueil</title>

</head>


<body>

    <?php include("menu.php"); ?>

    <picture class="hero">
        <div class="hero-contenu">
        <h1>Rejoignez l'Efrei</h1>
        <p>Une école d'ingénieur tournée vers le numérique</p>
    </div>
</picture>

    <section class="histoire-efrei">
        <h2>Histoire de l'Efrei</h2>

        <div class ="bandeau">
            
        <div class="bandeau-contenu">

        <div class="texte-descriptif">
        <p>
             Fondée en 1936 sous le nom d’École Française de Radioélectricité, EFREI Paris formait à l’origine des spécialistes des télécommunications et de l’électronique, des domaines alors en plein essor. Au fil des décennies, l’école a su évoluer avec les avancées technologiques en intégrant progressivement l’informatique, ce qui lui a permis d’obtenir la reconnaissance de la Commission des Titres d’Ingénieur et de s’imposer comme une école d’ingénieurs de référence. À partir des années 2000, elle opère un tournant vers le numérique en développant des formations en systèmes informatiques, réseaux et technologies innovantes, tout en s’ouvrant à l’international. Aujourd’hui, EFREI Paris est une grande école spécialisée dans le numérique, proposant des cursus variés en ingénierie, data, intelligence artificielle et cybersécurité, avec un fort lien avec les entreprises et l’innovation.
        </p>
        </div>
        <div class="image">
            <img src="..\img\Image_Efrei.png" alt="Efrei">
        </div>
</div>
</div>
</section>

<section class="chiffre-cle">

    <h2>L'Efrei en quelque chiffres</h2>

    <div class="bandeau-chiffres">

    <div class="stats-contenu">

    <div class="stats-cle">
    <p class="chiffre">
        1ère
    </p>
    <p class="texte">
        école privée au statut EESPIG
    </p>
    </div>
       <div class="stats-cle">
    <p class="chiffre">
        2000
    </p>
    <p class="texte">
        entreprises partenaires
    </p>
    </div>

    <div class="stats-cle">
    <p class="chiffre">
        16 000
    </p>
    <p class="texte">
        alumni
    </p>
    </div>
    <div class="stats-cle">
    <p class="chiffre">
        98%
    </p>
    <p class="texte">
        taux d'emplois après obtention du diplôme
        </p>
    </div>
    </div>
    </div>
</section>

<section class="actualites">
    <div class="header-actus">
        <h2>Actualités</h2>

        <div class="bouton-contenu">
            <a href="Actualite.php" class="bouton-actu">Voir toutes les actualités →</a>
        </div>
</div>
    <div class="actus-contenu">

        <div class="actu">
            <div class="image-actu">
            <img src="..\img\IMG_4822-1024x768.jpg" alt="">
            </div>
            <p class="date-actu">12 mars 2026</p>
            <h3 class="titre-actu">Engineering Projects : l’innovation</h3>
        </div>

        <div class="actu">
            <div class="image-actu">
            <img src="..\img\beasternchen-bees-8893198_1920-1024x796.jpg" alt="">
            </div>
            <p class="date-actu">9 mars 2026</p>
            <h3 class="titre-actu">L’IA au service de l’apiculture</h3>
        </div>

        <div class="actu">
            <div class="image-actu">
            <img src="..\img\Efrei-X-Stem4All-44-1024x683.jpg" alt="">
            </div>
            <p class="date-actu">18 février 2026</p>
            <h3 class="titre-actu">Parité dans le numérique</h3>
        </div>
        </div>
</section>

<section class="temoignage">

    <h2>Témoignage de nos clients</h2>

    <div class="carousel">

    <div class="carousel-track">
        
    <div class="card">
        <div class="gauche">
            <img src="https://randomuser.me/api/portraits/men/44.jpg" class="photo">
            <p class="nom">Maxime Sauvage</p>
            <p class="niveau">1ère année en Bachelor Ingénierie et Numérique</p>
        </div>

    <div class="droite">
            <p class="texte-temoignage">
                "Grâce à l'Efrei, j'ai progressé rapidement ."
            </p>
    </div>
</div>


    <div class="card">
        <div class="gauche">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="photo">
        <p class="nom">Nathan Chhay - - Trinh</p>
        <p class="niveau">1ère année en Cycle ingénieur</p>
    </div>

    <div class="droite">
        <p class="texte-temoignage">
            "Les projets sont très concrets et permettent vraiment de progresser rapidement ."
        </p>
    </div>
</div>

    <div class="card">
        <div class="gauche">
        <img src="https://randomuser.me/api/portraits/men/68.jpg" class="photo">
        <p class="nom">Kévin Kocoglu</p>
        <p class="niveau">2ème année en Bachelor Ingénierie et Cybersécurité</p>
    </div>

    <div class="droite">
        <p class="texte-temoignage">
            "Une école tournée vers l'avenir avec des formations en phase avec les besoins des entreprises."
        </p>
    </div>
</div>

    <div class="card">
        <div class="gauche">
        <img src="https://randomuser.me/api/portraits/men/75.jpg" class="photo">
        <p class="nom">Alexandre Dos Santos</p>
        <p class="niveau">1ère année en Bachelor Ethical Hacking</p>
    </div>

    <div class="droite">
        <p class="texte-temoignage">
            "L'ambiance est excellente et l'accompagnement des étudiants est vraiment un plus."
        </p>
    </div>
    </div>
</div>
    
    <div class="btn-container">
    <button class="btn prev">←</button>
    <button class="btn next">→</button>
</div>

</section>

<script>
const track = document.querySelector('.carousel-track');
const cards = document.querySelectorAll('.card');
const next = document.querySelector('.next');
const prev = document.querySelector('.prev');

let index = 0;

function updateCarousel() {
    track.style.transform = `translateX(-${index * 100}%)`;
}

next.addEventListener('click', () => {
    index++;
    if (index >= cards.length) {
        index = 0; // boucle
    }
    updateCarousel();
});

prev.addEventListener('click', () => {
    index--;
    if (index < 0) {
        index = cards.length - 1; // boucle inverse
    }
    updateCarousel();
});
</script>

  <?php include("Footer.php"); ?>

</body>

</html>