

const prof_container = document.getElementById('prof-container');

// Récupérer le JSON à partir de l'URL fournie
fetch("../json/Enseignant.json")
//then est une méthode qui retourne une promesse et prend en paramètre une 
//fonction callback qui sera exécutée une fois la promesse résolue
.then(response => {
// Vérifier si la réponse est correcte
if (!response.ok) {
// Si la réponse n'est pas correcte, lancer une erreur
throw new Error('Network response was not ok');
}
// Si la réponse est correcte, retourner le JSON
return response.json();
})
.then(items => {
items.forEach((item, index) => {
    const profItem = document.createElement('div');
    profItem.classList.add('item');
    profItem.innerHTML = `
        <div class="prof-card" data-prof-id="${index}">
            <img src="${item.image}" alt="${item.titre}">
            <h2>${item.titre}</h2>
            <p>${item.description}</p>
            
        </div>
    `;

    prof_container.appendChild(profItem);
});
    InitCarousel();
})
.catch(error => console.error("Erreur JSON :", error));


function InitCarousel() {
let currentIndex = 0;

const cards = document.querySelectorAll('.prof-card');
const nextBtn = document.querySelector('.next-btn');
const prevBtn = document.querySelector('.prev-btn');


nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % cards.length;
    updateCarousel();
});

prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + cards.length) % cards.length;
    updateCarousel();
});

function updateCarousel() {
    for(let i = 0; i < cards.length; i++) {
        if (i === currentIndex) {
            cards[i].classList.add("active");
        } else {
            cards[i].classList.remove("active");
        }

    }

}

updateCarousel();
}