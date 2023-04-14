<script type="text/javascript"><!--

function init() {

    numeroteElement('p','question','Question no.# ');
    tdm('tdm',2,2,2);
}

function numeroteElement(theTagName, theClass, masque) {

//  ==================================================
//  fonction numeroteElement
//  version: 1.0
//  modification: 2003-01-07
//  auteur: Christian Rémillard <christian.remillard@umontreal.ca>
//          Groupe de Recherche sur les Documents Structurés <GRDS>
//          http://grds.ebsi.umontreal.ca
//          Université de Montréal

    var elNode;
    var compteur = 1;
    var puce = '';
    var puceNode;
    masque = masque.split('#');

    // On crée une puce générique sous la forme <span class="compteur"><\/span>
    var compteurNode = document.createElement('span');
    compteurNode.className = 'compteur';

    // On crée une collection de tous les éléments ayant le nom 'theTagName'
    var qs = document.getElementsByTagName(theTagName);
    
    for (i=0; i<qs.length; i++) {
        elNode = qs.item(i);
        var classAttribute = elNode.className;

        // Y a-t-il la classe 'theClass'?
        if ( classAttribute.indexOf(theClass) != -1 ) {
            // Contenu textuel du compteur
            puce = masque.join(compteur);

            // Création de l'élément pour cette puce à partir de la copie générique
            puceNode = compteurNode.cloneNode(false);

            // On y ajoute le contenu textuel
            puceNode.appendChild(document.createTextNode(puce));

            // Ajout du noeud compteur
            elNode.insertBefore(puceNode, elNode.firstChild);

            // Incrémentation du compteur
            compteur ++;
        }
    }
}


--></script>