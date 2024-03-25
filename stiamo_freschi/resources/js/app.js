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
    window.onscroll = function() {
        scrollFunction();
    };
    
    function scrollFunction() {
        var scrollToTopBtn = document.getElementById("scrollToTopBtn");
        
        // Mostra il bottone quando si scende di una certa altezza dalla cima della pagina
        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
            scrollToTopBtn.style.display = "flex"; // Mostra il bottone
        } else {
            scrollToTopBtn.style.display = "none"; // Nascondi il bottone
        }
    }