<?php
// Tableau indexé
$stagiairesWeb2025= [
    "Agim", 
    "Omer", 
    "Massine", 
    "Loukas", 
    "Soulaiman", 
    "Nordine", 
    "Vahagn", 
    "Daniel", 
    "Samuel", 
    "Sola",
    "Reda",
    "Jean-Michaël",
    "Saïd",
    "Géraldine",
    "Jeremy",
    "Mykyta",
    ];

// Pour compter les éléments d'un tableau, nous pouvons utiliser la fonction native count()
echo "<p>Il y a ".count($stagiairesWeb2025)." élèves dans la classe.</p>";

// Pour afficher un élément du tableau, nous utilisons l'index de l'élément,
// ici par exemple les premiers élèves :
// concaténation avec . et "
echo "<p>Les 3 premiers élèves sont : ".$stagiairesWeb2025[0].", ".$stagiairesWeb2025[1].",
 ".$stagiairesWeb2025[2]."</p>";

 // concaténation dans les "" avec interprétation des variables
 echo "<p>Les 3 premiers élèves sont : $stagiairesWeb2025[0], $stagiairesWeb2025[1], $stagiairesWeb2025[2]</p>";

  // concaténation dans les '' dans interprétation des variables
 echo '<p>Les 3 premiers élèves sont : $stagiairesWeb2025[0], $stagiairesWeb2025[1], $stagiairesWeb2025[2]</p>';

 // Ajoutez les 3 derniers de la classe
 echo "<p>Les 3 derniers élèves du tableau sont : $stagiairesWeb2025[13], $stagiairesWeb2025[14], $stagiairesWeb2025[15]</p>";

