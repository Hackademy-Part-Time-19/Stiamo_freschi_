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
        scrollPop()
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
    document.getElementById('close').onclick=function () {
        document.getElementById('pop').style.display ='none'
    }
    document.getElementById('pop').onclick=function () {
        document.getElementById('pop').style.display='none'
    }

    
    function scrollPop() {
        var scrollTop = document.getElementById('pop');

        if (window.pageYOffset>1000) {
            scrollTop.style.display='block'
            scrollTop.style.transition='all 5s'
        } else {
            scrollTop.style.display='none'
        }
    }