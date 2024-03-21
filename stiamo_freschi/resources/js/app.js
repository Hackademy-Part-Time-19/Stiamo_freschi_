import './bootstrap';
import "bootstrap";

const bannerCatElements = document.querySelectorAll('.banner-cat');

    // Definisci la funzione handleClick
    function handleClick() {
        console.log("Div cliccato!");
    }

    // Aggiungi l'evento onclick a ciascun elemento con classe "banner-cat"
    bannerCatElements.forEach(function(element) {
        element.addEventListener('click', handleClick);
    });