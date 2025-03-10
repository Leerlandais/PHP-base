<?php
/*
 * Les opérateurs logiques
 * Les opérateurs logiques sont au nombre de 4: && (ET), || (OU), ^ (OU EXCLUSIF), ! (NON).
 * Ils permettent de combiner plusieurs conditions entre elles
 * Les opérateurs logiques sont souvent utilisés avec les opérateurs de comparaison
 * On les met dans des conditions (if, else, elseif)

and | &&  | ET
or  | ||  | OU
xor	| ^   | OU exclusif - peu utilisé
not	| !   |	Inverse la condition
 */

// Exercice avec l'opérateur ET (AND) &&
//EXERCICE 1
$age = 24;
$genre = "F";

if($age >= 18 && $genre === "F"){
    echo "1) Bienvenue sur le site <br>";
}
else{
    echo "1) Désolé, accès réservé aux femmes majeures uniquement<br>";
}

// Si l'âge est supérieur ou égal à 18 ET que le genre est F
// Alors, on affiche "1) Bienvenue sur le site<br>"
// Sinon on affiche "1) Désolé, accès réservé aux femmes majeures uniquement<br>"

// Exercice avec l'opérateur OU (OR) ||
//EXERCICE 2
$page = mt_rand(5, 25);

if($page < 10 || $page > 20){
    echo "2) La page $page est soit inférieure à 10, soit supérieure à 20<br>";
}
else{
    echo "2) La page $page est entre 10 et 20<br>";
}

// Si la page est plus petite que 10 OU que la page est plus grande que 20
// Alors, on affiche "2) La page $page est soit inférieure à 10, soit supérieure à 20<br>"
// Sinon on affiche "2) La page $page est entre 10 et 20<br>"


// Exercice avec l'opérateur OU exclusif (XOR) ^
//EXERCICE 3
$note = mt_rand(5, 15)  ;

if($note <= 10 ^ $note >= 10){
    echo "3) La note $note est soit inférieure à 10, soit supérieure à 10<br>";
}
else{
    echo "3) La note $note est 10<br>";
}

// Si la note est plus petite que 10 OU que la note est plus grande que 10
// Alors, on affiche "3) La $note est soit inférieure à 10, soit supérieure à 10<br>"
// Sinon on affiche "3) La $note est 10<br>"

// Exercice avec l'opérateur NON (NOT) !
//EXERCICE 4
$pageActu = 5;
$nbPage = 5;
if(!($pageActu === $nbPage)){
    echo "4) Nous ne sommes pas sur la dernière page $pageActu / $nbPage<br>";
}
else{
    echo "4) Nous sommes sur la dernière page $pageActu / $nbPage<br>";
}

// Si la page actuelle vaut le nombre de page
// On crée l'inverse de la condition avec l'opérateur NOT (!)
// Alors, on affiche "4) Nous ne sommes pas sur la dernière page $pageActu / $nbPage<br>"
// Sinon on affiche "4) Nous sommes sur la dernière page $pageActu / $nbPage<br>"