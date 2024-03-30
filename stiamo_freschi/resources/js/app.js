import './bootstrap';
import "bootstrap";

document.addEventListener('DOMContentLoaded', function() {
    // Il tuo codice JavaScript qui
    var isLoggedIn = false;
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
            popElement.style.display ='none';
        }

        popElement.onclick = function () {
            popElement.style.display='none';
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

        if (window.pageYOffset > 1000 && scrollTop) {
            scrollTop.style.display = 'block';
            scrollTop.style.transition = 'all 5s';
        } else if (scrollTop) {
            scrollTop.style.display = 'none';
        }
    }
});
