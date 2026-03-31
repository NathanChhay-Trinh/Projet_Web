let currentMonday = null; // Stocke la date du lundi de la semaine actuelle

function update_date() {
    const date = new Date();
    const day = date.getDay(); // 0 = dimanche
    // Convertir dimanche (0) en 7 pour simplifier
    const adjustedDay = day === 0 ? 7 : day;
    currentMonday = new Date(date);

    // On recule jusqu'au lundi de la semaine
    currentMonday.setDate(date.getDate() - (adjustedDay - 1));

    // Met à jour l'affichage de la semaine
    update_week();
}

function update_week() {
    const month = currentMonday.getMonth();

    const year = currentMonday.getFullYear();

    const monday = new Date(currentMonday);


    const friday = new Date(currentMonday);
    friday.setDate(monday.getDate() + 4);
    const list_month = ["jan", "fev", "mar", "avr", "mai", "jun", "jul", "aou", "sep", "oct", "nov", "dec"];
    const real_month = list_month[month];
    const firstDay = monday.getDate();
    const lastDay = friday.getDate();



    update_calendar(real_month, firstDay, lastDay, year);
}


function update_calendar(real_month, firstDay, lastDay, year) {
    const calendar_header = document.querySelector(".calendar-header");

    // Effacer l'ancien calendrier
    calendar_header.innerHTML = "";

    const calendar = document.createElement('div');
    calendar.classList.add('calendar');

    const table = document.createElement('table');
    const thead = document.createElement('thead');
    const tbody = document.createElement('tbody');
    const jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    const heures = ["7h-8h", "8h-9h", "9h-10h", "10h-11h", "11h-12h", "12h-13h", "13h-14h", "14h-15h", "15h-16h", "17h-18h", "19h-20h"];
    /*Case vide*/
    const trHead = document.createElement('tr');
    const th = document.createElement('th');
    const caption = document.createElement('caption');

    caption.textContent = `${real_month} ${firstDay}-${lastDay} ${year}`;

    table.appendChild(caption);
    trHead.appendChild(th);

    jours.forEach(jour => {
        let th = document.createElement('th');
        th.setAttribute("scope", "col");
        th.textContent = jour;
        trHead.appendChild(th);
    });

    let IdCounter = 1;

    heures.forEach(heure => {
        let trBody = document.createElement('tr');
        let th = document.createElement('th');
        th.setAttribute("scope", "row");
        th.textContent = heure;
        trBody.appendChild(th);

        for (let i = 0; i < 7; i++) {
            let td = document.createElement('td');

            td.dataset.Id = IdCounter;
            IdCounter++;

            td.dataset.pris = "false";
            td.classList.add('creneau-libre');

            td.dataset.heure = heure;
            td.dataset.jour = jours[i];

            td.dataset.Date_Session = `${real_month} ${firstDay}-${lastDay} ${year}`;

            td.addEventListener('click', () => ouvrirPopup(td));
            trBody.appendChild(td);
        }
        tbody.appendChild(trBody);
    });

    thead.appendChild(trHead);

    table.appendChild(thead);
    table.appendChild(tbody);
    calendar.appendChild(table);


    calendar.classList.add('calendar');
    calendar_header.appendChild(calendar);
}

const next_week = document.querySelector('#next-week');
const prev_week = document.querySelector('#prev-week');

next_week.addEventListener('click', () => {
    currentMonday.setDate(currentMonday.getDate() + 7);

    update_week();
});

update_date();

function ouvrirPopup(td) {
    // Supprimer ancienne popup si elle existe
    const ancienne = document.querySelector('.popup-overlay');
    if (ancienne) ancienne.remove();

    const Id = td.dataset.Id;
    const Date_Session = td.dataset.Date_Session;

    const isPris = td.dataset.pris === "true";

    const heure = td.dataset.heure;
    const jour = td.dataset.jour;

    const overlay = document.createElement('div');
    overlay.classList.add('popup-overlay');

    overlay.innerHTML =
        `   
    <div class="popup">
      <button class="popup-close"> ✕ </button>
      <h3>Créneau : ${jour} ${heure}</h3>
      <p>Semaine : ${Date_Session}</p>
      <p class="${isPris ? 'pris' : 'libre'}">
        ${isPris ? 'Ce créneau est déjà pris.' : 'Ce créneau est disponible.'}
       </p>
    ${!isPris ? `
        <button class="btn-reserver" 
        onclick="reserver('${Id}','${Date_Session}')">
            Réserver ce créneau
        </button>
         ` : ''}
    </div>
    `;

    overlay.querySelector('.popup-close').addEventListener('click', () => overlay.remove());
    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) overlay.remove();
    });

    document.body.appendChild(overlay);
}

function reserver(Id, Date_Session) {
    window.location.href = 
        `ajoutsession.php?Id=${encodeURIComponent(Id)}&Date_Session=${encodeURIComponent(Date_Session)}`;
}