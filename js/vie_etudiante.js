document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".asso-card");
    const cardsPerPage = 6;
    let currentPage = 0;

    function showPage(page) {
        cards.forEach((card) => {
            card.style.display = "none";
        });

        let start = page * cardsPerPage;
        let end = start + cardsPerPage;

        for (let i = start; i < end && i < cards.length; i++) {
            cards[i].style.display = "block";
        }
    }

    document.getElementById("next").addEventListener("click", () => {
        if ((currentPage + 1) * cardsPerPage < cards.length) {
            currentPage++;
            showPage(currentPage);
        }
    });

    document.getElementById("prev").addEventListener("click", () => {
        if (currentPage > 0) {
            currentPage--;
            showPage(currentPage);
        }
    });

    showPage(0);
});