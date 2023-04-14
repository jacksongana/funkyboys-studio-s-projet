// Exemple de fonctionnalité gérée par JS : Modifications sur la page lorsque le scroll a dépassé une hauteur de fenêtre (on donne la classe "scrolled" au corps de page lorsque c'est le cas, afin que certaines règles CSS spécifiques s'appliquent à ce moment)

window.onscroll = surveiller_defilement; // Événement déclenché dès qu'un défilement (scroll) a lieu
    
function surveiller_defilement() {
    
    if (window.scrollY >= window.innerHeight / 4) {
        // Si nombre de pixels défilés a atteint 1/4 de hauteur fenêtre
        
        document.body.classList.add("scrolled");
        
    } else {
        
        document.body.classList.remove("scrolled");
    }
    
}

