<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php


$matches = [
  "matchOne" =>  [
  "casa" => "Olimpia Milano",
  "ospite" => "Cantu",
  "puntiCasa" => 30,
  "puntiOspite" => 40,
],
  "matchTwo"  =>[
 "casa" => "Olimpia Milano",
 "ospite" => "cantu",
 "puntiCasa" => 100,
 "puntiOspite" => 80,
],
   "matchThree" =>[
 "casa" => "cantu",
 "ospite" => "Olimpia Milano",
 "puntiCasa" => 3,
 "puntiOspite" => 200,
],

];
for ($i=0; $i < count($matches) ; $i++) {
  echo $matches[$i]["casa"] . '-' .  $matches[$i]["ospite"] . $matches[$i]["puntiCasa"] . '|'. $matches[$i]["puntiOspite"];
}



 ?>
