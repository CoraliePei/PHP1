<?php

// Afficher une chaîne de caractères qui contient du HTML
$toto = "<h1>12</h1>";
echo $toto;

// Affichage de variables
$jour = "lundi";
//echo 'Nous sommes ' . $jour . '.';

// Avec guillemets doubles, la variable est évaluée
echo "Nous sommes $jour";
echo "<br />";
// Avec guillemets simples, la variable ne l'est pas
echo 'Nous sommes $jour';
echo "<br />";

// Obtenir le type d'une variable
echo gettype($jour);
echo "<br />";

// Afficher des informations sur le type de la variable et son contenu
var_dump($jour);
// La fonction print_r() retour un résultat similaire, mais sans mentionner le type

/*
Quelques règles :
- toutes les variables commencent par le signe $
- toutes les variables commencent par une lettre ou '_'
- le nom d'une variable contient, des chiffres, des underscores et c'est tout
- le nom d'une variable ne contient pas d'espace.
*/

$jour = "mardi";
// echo "Nous sommes $jour";
$jourTest = $jour = "mercredi";
// echo "Nous sommes $jourTest";
// Passage par référence
$a = 1;
$b = &$a;
$b = 2;
echo $a;

/* Les différents types de variables
- String
- Integer
- Float
- Boolean
- NULL
- Array
- Object
- Resource
- Enumerations ou Enums
*/


// Opérateurs de comparaison
// - == compare la valeur
// - === compare la valeur et le type
// - != ou <> différent en valeurs
// - !== différent en valeurs et en types
// - <
// - >
// - <=
// - =>
// */

// Exemple de vérification d'opérateur de comparaison avec la fonction var_dump()
$x = 42;
var_dump($x == "42");
$x = 210;

// Selon PSR-12 : mettre des espaces après if et elseif
if ($x > 0) {
    echo '$x est positif';
} elseif ($x < 0) {
    echo '$x est negatif';
} else {
    echo '$x est nul';
}


$truc = 20;
echo $truc++;
echo "<br />";
echo $truc;
echo "<br />";

$x = 210;

// Selon PSR-12 : mettre des espaces après if et elseif
if ($x > 0) {
    echo '$x est positif';
} elseif ($x < 0) {
    echo '$x est negatif';
}

// if ($x)
if (isset($x) && is_numeric($x)) {
    if ($x > 0) {
        echo '$x est positif';
    } elseif ($x < 0) {
        echo '$x est negatif';
    } else {
        echo '$x est nul';
    }
} else {
    echo '$x est nul';
    echo '$x n\'esiste pas';
}


$resultat = "<ul>";
for ($i = 0; $i <= 100; $i++) {
    $resultat .= "<li>";
    $resultat .= $i;
    $resultat .= "</li>";
}
$resultat .= "<ul>";

echo $resultat;

$compteur = 0;
$resultat = "<ul>";
for ($i = -17627; $i <= 14256; $i++) {
    if ($i % 7 === 0) {
        $resultat .= "<li>";
        $resultat .= $i;
        $resultat .= "</li>";
        $compteur++;
    }
}
$resultat .= "</ul>";
$resultat .= "<p>Il y a $compteur resultats</p>";

echo $resultat;


$compteur = 0;
$i = -17627;
$resultat = "<ul>";
for ($i = -17627; $i <= 14256; $i++) {

    while ($i <= 14256) {
        if ($i % 7 === 0) {
            $resultat .= "<li>";
            $resultat .= $i;
            $resultat .= "</li>";
            $compteur++;
        }
        $i++;
    }
}
$resultat .= "</ul>";
$resultat .= "<p>Il y a $compteur resultats</p>";

echo $resultat;

$compteur = 0;
$i = -17627;
$toto = 0;
$resultat = "<ul>";

while ($i <= 14256) {
    if ($i % 7 === 0) {
        $resultat .= "<li>";
        $resultat .= $i;
        $resultat .= "</li>";
        $compteur++;
    }
    $i++;
}
do {
    $resultat .= "<li>";
    $resultat .= $toto;
    $resultat .= "</li>";
    $toto++;
} while ($toto < 10);

$resultat .= "</ul>";
$resultat .= "<p>Il y a $compteur resultats</p>";

echo $resultat;
