import './bootstrap';
import "bootstrap";

document.addEventListener('DOMContentLoaded', function() {
    // Il tuo codice JavaScript qui
    var isLoggedIn = false;
    var isPopClosedManually = false;
    window.onscroll = function() {
        scrollPop()
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
 
   
    var closeBtn = document.getElementById('close');
    var popElement = document.getElementById('pop');
    if (closeBtn && popElement) {
        closeBtn.onclick = function () {
            popElement.style.display = 'none';
            isPopClosedManually = true; // Imposta il flag quando l'utente chiude manualmente l'elemento pop
        }
    
        popElement.onclick = function () {
            popElement.style.display = 'none';
            isPopClosedManually = true; // Imposta il flag quando l'utente chiude manualmente l'elemento pop
        }
    }

  

    function scrollPop() {
     
        if (!isLoggedIn) {
            var popElement = document.getElementById('pop');
            if (popElement) {
                popElement.style.display = 'block';
            }
        }
        var scrollTop = document.getElementById('pop');

        if (!isPopClosedManually && window.pageYOffset > 1000)  {
            scrollTop.style.display = 'block';
            scrollTop.style.transition = 'all 5s';
        } else if (scrollTop) {
            scrollTop.style.display = 'none';
        }
    }

    const gridContainer = document.getElementById("grid-container");

  /*  // Array di oggetti contenenti informazioni sull'immagine e il collegamento
    const images = [
        { src: '/img/pexels-photo-4397840.webp', alt: "Categoria 1", link: "categoria1.html" },
        { src: "categoria2.jpg", alt: "Categoria 2", link: "categoria2.html" },
        // Aggiungi altri oggetti per altre categorie
    ];

    // Creazione dinamica degli elementi della griglia
    images.forEach(image => {
        const gridItem = document.createElement("div");
        gridItem.classList.add("grid-item");

        const link = document.createElement("a");
        link.href = image.link;

        const img = document.createElement("img");
        img.src = image.src;
        img.alt = image.alt;

        link.appendChild(img);
        gridItem.appendChild(link);
        gridContainer.appendChild(gridItem);
    });*/

 
   
});
