<?php

// Afficher toutes les réponses

/** Exercice 1 : Boucle while basique
 * 
 *  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20
 * 
 */



$nombre = 0; 

while ($nombre <= 20) {
    echo $nombre . "<br>";
    $nombre += 2;
}

echo "<br> <br>";

/** Exercice 2 : Générer une liste d'années avec une boucle while
 * 
 *  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>)
 * 
 */



$annee = 2000;
$anneeActu = date("Y");

echo "<ul>";

while ($annee <= $anneeActu) {
    echo "<li>$annee</li>";
    $annee++;
}

echo "</ul>";

echo "<br> <br>";
/** Exercice 3 : Boucle do...while
 * 
 *  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. La variable de départ équivaut à 3
 * 
 * 
 */

$nombre = 3;

do {
    echo $nombre . "<br>";
    $nombre += 3;
}while ($nombre < 30);



echo "<br> <br>";
/** Exercice 4 : Boucle for
 * 
 *  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné
 * 
 */

$nombre = 10;

echo "<h1>Table de $nombre :</h1>";

for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    echo "$nombre x $i = $resultat <br>";
}


echo "<br> <br>";
/** Exercice 5 : Boucles imbriquées pour créer une grille
 * 
 *  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
 *             Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule)
 * 1,1  1,2  1,3  1,4  1,5
 * 2,1  2,2  2,3 ...
 * ...
 * ...
 * ...
 * 5,1  5,2 ...
 */


echo "<table border='1' cellspacing='0' cellpadding='8'>";

for ($ligne = 1; $ligne <= 5; $ligne++) { 
    echo "<tr>"; 
    for ($colonne = 1; $colonne <= 5; $colonne++) { 
        echo "<td>($ligne, $colonne)</td>";
    }
    echo "</tr>";
}

echo "</table>"; 



echo "<br> <br>";

/** Exercice 6 : foreach pour un tableau associatif
 * 
 *  Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
 *             Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>)
 * 
 */

$user = [
    "prenom" => "maitre",
    "nom" => "Gims",
    "email" => "gims@gmail.com",
    "age" => 40
];

foreach ($user as $cle => $valeur) {
    if ($cle == "email") {
        echo "<p>$cle : <a href='mailto:$valeur'>$valeur</a></p>";
    } else {
        echo "<p>$cle : $valeur</p>";
    }
}

echo "<br> <br>";
/** Exercice 7 : Foreach avec des clés personnalisées
 *  
 *  Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
 * 
 * Afficher chaque element du menu sous forme de liens (<a>)
 * 
 * 
 */


$menu = [
    "Accueil" => "accueil.php",
    "Produits" => "produits.php",
    "Contact" => "contact.php"
];

echo "<ul>"; 

foreach ($menu as $titre => $lien) {
    echo "<li><a href='$lien'>$titre</a></li>";
}

echo "</ul>"; 


echo "<br> <br>";
/** Exercice 8 : Boucles imbriquées et conditions
 * 
 *  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
 * Regarder random_int pour la génération des nombres aléatoires 
 * 
 * 
 */


echo "<table border='1' cellspacing='0' cellpadding='8'>";

for ($ligne = 1; $ligne <= 10; $ligne++) {
    echo "<tr>"; 
    for ($colonne = 1; $colonne <= 10; $colonne++) {
        $nombreAltr = random_int(1, 100); 
        echo "<td>$nombreAltr</td>";
    }
    echo "</tr>"; 
}

echo "</table>";

echo "<br> <br>";

/** Exercice 9 : Tableau de tableaux avec foreach
 * 
 *  Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
 * 
 *  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
 * 
 *  Résultat attendu : 
 * 
 *  <ol> 
 *  <li> Personne 1 </li>
 *  <ul> 
 *  <li> prénom : prenom </li>
 *  <li> nom : nom </li>
 *  <li> age: age </li>
 *  </ul>
 *  <li> Personne 2 </li>
 * 
 */

$prsn = [
    [
        "prenom" => "sdm",
        "nom" => "sdm",
        "age" => 40
    ],
    [
        "prenom" => "aya",
        "nom" => "nakamoura",
        "age" => 45
    ],
    [
        "prenom" => "sch",
        "nom" => "sch",
        "age" => 35
    ]
];

echo "<ol>";

foreach ($prsn as $idk => $prsn) {
    $num = $idk + 1;
    echo "<li>Personne $num</li>";

    echo "<ul>";
    foreach ($prsn as $cle => $valeur) {
        echo "<li>$cle : $valeur</li>";
    }
    echo "</ul>";
}

echo "</ol>";

// AHMED 

// $info = [
//     "person1"=> [
//         "Prénom"=> "ahmed",
//         "nom"=> "abir",
//         "age"=> "20",
//     ],
//     "person2" => [
//          "Prénom"=> "issa",
//         "nom"=> "issadi",
//         "age"=> "20",
//     ],
//     "person3" => [
//          "Prénom"=> "mael",
//         "nom"=> "flament",
//         "age"=> "22",
//     ],
// ];
 
 
 
// foreach ($info as $k => $val) {
//     echo "<li>$k</li>";
//     foreach ($val as $k2 => $v2) {
//         echo "
//             <ol>
//                 <ul><li> $k2 : $v2 </li></ul>
//             </ol>";
//     }
// }

?>
