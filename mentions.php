<?php
include("menu.php");

?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">

    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- bootstrap link  -->
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <!-- font awesome script link  -->
        <script src="https://kit.fontawesome.com/0a6d56343f.js" crossorigin="anonymous"></script>
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.css" integrity="sha512-hksROWRSWPuYnv0z5vhyUwobZ49ZBxzhsCdXhwFy9ZDFFMS2UOg1DgCKphTlWkibm7p3Fp6Vq6GffbNDd+tOgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="mentions.css">
</head>
<?php  echo $_Menu ; ?>
<body>
  <div class="mention">
    <h1>Mentions légales</h1>
  <p>
La loi pour la confiance de l’économie numérique du 21 juin 2004 (Articles 6-III et 19 de la Loi n°2004-575) stipule que ces mentions contiennent :
pour un entrepreneur individuel : nom, prénom, domicile
pour une société : raison sociale, forme juridique, adresse de l’établissement ou du siège social (et non pas une simple boîte postale), montant du capital social
adresse de courrier électronique et numéro de téléphone

pour une activité commerciale : numéro d’inscription au registre du commerce et des sociétés (RCS)

pour une activité artisanale : numéro d’immatriculation au répertoire des métiers (RM)

en cas d’activité commerciale : numéro individuel d’identification fiscale numéro de TVA intracommunautaire

pour une profession réglementée : référence aux règles professionnelles applicables et au titre professionnel

nom et adresse de l’autorité ayant délivré l’autorisation d’exercer quand celle-ci est nécessaire

nom du responsable de la publication

coordonnées de l’hébergeur du site : nom, dénomination ou raison sociale, adresse et numéro de téléphone

pour un site marchand, conditions générales de vente (CGV) : prix (exprimé en euros et TTC), frais et date de livraison, modalité de paiement, service après-vente, droit de rétractation, durée de l’offre, coût de la technique de communication à distance

numéro de déclaration simplifiée Cnil, dans le cas de collecte de données sur les clients (non obligatoire, mais recommandé).

Avant de déposer ou lire un cookie, les éditeurs de sites ou d’applications doivent :
informer les internautes de la finalité des cookies,
obtenir leur consentement,
fournir aux internautes un moyen de les refuser.
    </p> 
    </div>

    
</body>
<footer class="foot">
<?php  echo $_Footer ; ?>
    
</footer>
</html>