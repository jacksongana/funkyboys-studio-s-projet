<?php
include("menu.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
                                    <meta charset="UTF-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunkyCreat@Com</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- bootstrap cdn link  -->
    
            <!-- bootstrap link  -->
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

            <link rel="stylesheet" href="autel.css">
        

</head>

    <body>

        <?php  echo $_Menu  ; ?>

        <h1>Actualités</h1>

<div id="actualités">
    <div id="saga">
    <div class="latest_posts">
            <h2>Articles James Bond</h2>
        </div>
        <p><hr noshade></p>
        <div id="conteneur">
            <div class="flex">
                <p class="title">Documentaire Sean Connery vs James Bond</p>
                <img src="image/connery.jpg">
                <p class="details">03/11/2022</p>
                <button onclick="window.location.href = 'https://www.lefigaro.fr/cinema/notre-critique-du-documentaire-sean-connery-vs-james-bond-un-espion-malgre-lui-sur-arte-tv-20221102';">Voir article</button>
            </div>  
            <div class="flex">
                <p class="title">Quel est l'acteur préféré des fans pour reprendre le rôle de James Bond ?</p>
                <img src="image/acteurbond.jpg">
                <p class="details">03/11/2022</p>
                <button onclick="window.location.href = 'https://www.ladepeche.fr/2022/11/03/quel-est-lacteur-prefere-des-fans-pour-reprendre-le-role-de-james-bond-10780096.php';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">"Nous vous attendions" : Daniel Craig reçoit la même décoration que 007</p>
                <img src="image/bondrecompense.jpg">
                <p class="details">18/10/2022</p>
                <button onclick="window.location.href = 'https://www.francetvinfo.fr/culture/cinema/james-bond/nous-vous-attendions-daniel-craig-recoit-la-meme-decoration-que-james-bond-007_5425651.html';">Voir article</button>
            </div>  
        </div>
    </div>
    <br>
    <div id="saga">
        <div class="latest_posts">
            <h2>Articles Harry Potter</h2>
        </div>
        <p><hr noshade></p>
        <div id="conteneur">
            <div class="flex">
                <p class="title">Le jeune acteur le mieux payé de la saga n'est pas Daniel Radcliffe !</p>
                <img src="image/tomfelton.jpg">
                <p class="details">31/10/2022</p>
                <button onclick="window.location.href = 'https://www.allocine.fr/article/fichearticle_gen_carticle=1000001150.html';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">Harry Potter : pourquoi Daniel Radcliffe a pris position contre J.K. Rowling</p>
                <img src="image/radcliffecontrerowling.jpg">
                <p class="details">02/11/2022</p>
                <button onclick="window.location.href = 'https://www.elle.fr/People/La-vie-des-people/News/Harry-Potter-pourquoi-Daniel-Radcliffe-a-pris-position-contre-J-K-Rowling-4074584';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">Rennes : un cinéma organise un marathon Harry Potter de quatre jours</p>
                <img src="image/marathonpotter.jpg">
                <p class="details">02/11/2022</p>
                <button onclick="window.location.href = 'https://actu.fr/bretagne/rennes_35238/rennes-un-cinema-organise-un-marathon-harry-potter-de-quatre-jours_54923034.html';">Voir article</button>
            </div>  
        </div>
    </div>
    <br>
    <div id="saga">
        <div class="latest_posts">
            <h2>Articles Star Wars</h2>
        </div>
        <p><hr noshade></p>
        <div id="conteneur">
            <div class="flex">
                <p class="title">Découvrez le superbe Sabre Laser de Dark Vador plus réaliste que jamais !</p>
                <img src="image/laser.jpg">
                <p class="details">02/11/2022</p>
                <button onclick="window.location.href = 'https://www.allocine.fr/article/fichearticle_gen_carticle=1000001131.html';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">Star Wars : Lucasfilm a très peur pour le prochain film</p>
                <img src="image/lucasfilmpeur.jpg">
                <p class="details">03/11/2022</p>
                <button onclick="window.location.href = 'https://www.gameblog.fr/geek/ed/news/star-wars-lucasfilm-a-tres-peur-pour-le-prochain-film-409146';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">Critique Série : “Andor” la nouvelle série de la franchise Star Wars</p>
                <img src="image/andor.jpg">
                <p class="details">03/11/2022</p>
                <button onclick="window.location.href = 'https://www.radiofrance.fr/franceculture/podcasts/affaire-critique/critique-serie-andor-la-nouvelle-serie-de-la-franchise-star-wars-5076122';">Voir article</button>
            </div>  
        </div>
    </div>
    <br>
    <div id="saga">
        <div class="latest_posts">
            <h2>Articles Fast & Furious</h2>
        </div>
        <p><hr noshade></p>
        <div id="conteneur">
            <div class="flex">
                <p class="title">Des voitures électriques dans le prochain Fast and Furious</p>
                <img src="image/voiture.jpg">
                <p class="details">31/10/2022</p>
                <button onclick="window.location.href = 'https://fr.motor1.com/news/616747/fast-and-furious-voitures-electriques/';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">Top 10 films Fast & Furious : classement du pire au meilleur !</p>
                <img src="image/topf&f.jpg">
                <p class="details">10/10/2022</p>
                <button onclick="window.location.href = 'https://www.buzzwebzine.fr/fast-furious-classement-films/';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">Le film préféré de Vin Diesel ? L'acteur est un grand sentimental !</p>
                <img src="image/vindiesel.jpg">
                <p class="details">03/11/2022</p>
                <button onclick="window.location.href = 'https://www.allocine.fr/diaporamas/cinema/diaporama-1000000928/';">Voir article</button>
            </div>  
        </div>
    </div>
    <br>
    <div id="saga">
        <div class="latest_posts">
            <h2>Articles MC vs DC</h2>
        </div>
        <p><hr noshade></p>
        <div id="conteneur">
            <div class="flex">
                <p class="title">James Gunn, réalisateur de Marvel Studios, rejoint l’écurie DC Comics</p>
                <img src="image/jamesgunn.jpg">
                <p class="details">03/11/2022</p>
                <button onclick="window.location.href = 'https://www.sitegeek.fr/films-series/james-gunn-un-des-realisateurs-phares-de-marvel-studios-rejoint-lecurie-dc-comics/';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">Hugh Jackman dévoile son film de superhéros préféré</p>
                <img src="image/wolverine.jpg">
                <p class="details">03/11/2022</p>
                <button onclick="window.location.href = 'https://hitek.fr/actualite/wolverine-hugh-jackman-devoile-son-film-de-super-heros-prefere--et-non--ce-n-est-pas-un-marvel_38416';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">Quelles sont les différences entre Marvel et DC ?</p>
                <img src="image/mcvsdc.jpg">
                <p class="details">05/06/2022</p>
                <button onclick="window.location.href = 'https://www.buzzwebzine.fr/differences-entre-marvel-dc-comics/';">Voir article</button>
            </div>  
        </div>
    </div>
    <br>
    <div id="saga">
        <div class="latest_posts">
            <h2>Articles Pirates des Caraïbes</h2>
        </div>
        <p><hr noshade></p>
        <div id="conteneur">
            <div class="flex">
                <p class="title">Pirates des Caraïbes 6 : le prochain film devrait plus ressembler aux premiers</p>
                <img src="image/pirates6.jpg">
                <p class="details">22/08/2022</p>
                <button onclick="window.location.href = 'https://www.ecranlarge.com/films/news/1444953-pirates-des-caraibes-6-le-prochain-film-devrait-plus-ressembler-aux-premiers';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">Pirates des Caraïbes : notre classement de la saga, du pire au meilleur</p>
                <img src="image/toppirates.jpg">
                <p class="details">08/08/2022</p>
                <button onclick="window.location.href = 'https://www.ecranlarge.com/films/dossier/1439448-pirates-des-caraibes-notre-classement-de-la-saga-du-pire-au-meilleur';">Voir article</button>
            </div>
            <div class="flex">
                <p class="title">Cet ennemi de Jack Sparrow a bien existé et était pire dans la réalité</p>
                <img src="image/ennemijacksparrow.jpg">
                <p class="details">24/10/2022</p>
                <button onclick="window.location.href = 'https://hitek.fr/actualite/pirates-des-caraibes-cet-ennemi-de-jack-sparrow-a-bien-existe--et-etait-bien-pire-dans-la-realite_38235';">Voir article</button>
            </div>  
        </div>
    </div>

</div>
 

    </body>

</html>
