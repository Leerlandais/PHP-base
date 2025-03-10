<?php
/*
 * Les boucles for
 */

/*
 * 1) Affichez les nombres de 10 à 1 avec une boucle for
 */
echo "<p>1) Affichez les nombres de 10 à 1 avec une boucle for<br>";
for($i=10; $i > 0; $i--){
   echo "$i ";
}
echo "</p>";

/*
 * 2) Affichez les nombres pairs de 0 à 20 avec une boucle for
 */

echo "<p>2) Affichez les nombres pairs de 0 à 20 avec une boucle for<br>";
for( $i = 0; $i <= 20;$i+=2 )
echo "$i ";
echo "</p>";

/*
 * 3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 */

echo "<p>3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres<br>";
$somme=0;
for($i=1;$i <=20; $i++){
   $somme = $somme + $i;echo "$i ";
   //ou  $somme += $i;
}

echo " <br>- La somme des nombres de 1 à 20 est : ".$somme;
echo "</p>";

/*
 * 4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 * et en affichant à chaque tour si le nombre est pair ou impair (utilisez l'opérateur modulo %)
 */

echo "<p>4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres et en affichant à chaque tour si le nombre est pair ou impair<br>";
$somme=0;
for($i=1;$i <=20; $i++){
   if ($i %2==0) echo "<span style='color: blue;'>$i - pair | </span>";
   else echo "$i -inpair | ";
   
   $somme += $i;
}


echo " - La somme des nombres de 1 à 20 est : ".$somme;
echo "</p>";

/*
 * 5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for
 * et en affichant à chaque tour si la somme est pair ou impair
 */

echo "<p>5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for et en affichant à chaque tour si la somme est pair ou impair<br>";
$somme=0;
for($i=1;$i <=20; $i++){
   $somme += $i;
   if ($i %2==0) echo "<span style='color: blue;'>$i -la somme est : $somme - pair | </span>";
   else echo "-la somme est : $somme - pair | ";
  
}
echo "</p>";

/*
 * 6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.
 * La table doit être formatée de manière lisible, par exemple :
    // 1 x 1 = 1   1 x 2 = 2   ...   1 x 5 = 5
    // 2 x 1 = 2   2 x 2 = 4   ...   2 x 5 = 10
    // ...
    // 5 x 1 = 5   5 x 2 = 10  ...   5 x 5 = 25
 * Vous aurez besoin de concaténer des chaînes de caractères avec l'opérateur .
 * Vous obtiendrez 5 lignes de 5 multiplications chacune.
 */

echo "<p>6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.<br>";
for($i=1;$i<=5;$i++){
   for($g=1;$g<=5;$g++){
      $seb = $g*$i;
      echo "$g x $i = $seb |  ";
   } echo "</br>";
}
 "</p>";