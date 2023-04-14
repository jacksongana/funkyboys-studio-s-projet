<?php
include("menu2.php");

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">

        <title>La saga Mission Impossible</title>
       
        <link rel="stylesheet" href="mission_impossible.css">
        <script type="text/javascript" src="mi.js" charset="iso-8859-1"></script>
    </head>
    
    <body>
    <?php  echo $_Menu ; ?>
      <header id="intro">
        <img src="image/mi_img.jpg"/>
        <h1>Saga Mission Impossible</h1>
      </header>
        
        <nav>
            <ul>
              <li class="deroulant"><a href="Accueil_Mission_Impossible.php">La saga Mission Impossible &ensp;</a>
                <ul class="sous">
                  <li><a href="Mission_Impossible_1.html">Mission Impossible (1996)</a></li>
                  <li><a href="Mission_Impossible_2.html">Mission Impossible 2 (2000)</a></li>
                  <li><a href="Mission_Impossible_3.html">Mission Impossible 3 (2006)</a></li>
                  <li><a href="Mission_Impossible_4.html">Mission Impossible: Protocole Fantôme (2011)</a></li>
                  <li><a href="Mission_Impossible_5.html">Mission Impossible: Rogue Nation (2015)</a></li>
                  <li><a href="Mission_Impossible_6.html">Mission Impossible: Fallout (2018)</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        
        <h2><span class="section-no">Introduction</span></h2>
         
        <img src=""><br><em></em>
        
        
<p></p>
        
    <div id="tdm">
        <h2 id="tdm-titre">Table des matières</h2>
        <div id="tdm-corps">
            <div class="tdm-item tdm-niveau-1"><span class="tdm-item-no">1. </span><span class="tdm-item-texte"><a href="Mission_Impossible_1.php">Mission Impossible (1996)</a></span></div>
            <div class="tdm-item tdm-niveau-1"><span class="tdm-item-no">2. </span><span class="tdm-item-texte"><a href="Mission_Impossible_2.php">Mission Impossible 2 (2000)</a></span></div>
            <div class="tdm-item tdm-niveau-1"><span class="tdm-item-no">3. </span><span class="tdm-item-texte"><a href="Mission_Impossible_3.php">Mission Impossible 3 (2006)</a></span></div>
            <div class="tdm-item tdm-niveau-1"><span class="tdm-item-no">4. </span><span class="tdm-item-texte"><a href="Mission_Impossible_4.php">Mission Impossible: Protocole Fantôme (2011)</a></span></div>
            <div class="tdm-item tdm-niveau-1"><span class="tdm-item-no">5. </span><span class="tdm-item-texte"><a href="Mission_Impossible_5.php">Mission Impossible: Rogue Nation (2015)</a></span></div>
            <div class="tdm-item tdm-niveau-1"><span class="tdm-item-no">6. </span><span class="tdm-item-texte"><a href="Mission_Impossible_6.php">Mission Impossible: Fallout (2018)</a></span></div>
            </div>
        </div>
    </div>       
    

        
    </body>
    <script>
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
    </script>
</html>












