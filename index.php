<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php





$matches = [
  "matchOne" =>  [
  "casa" => "milano",
  "ospite" => "bergamo",
  "puntiCasa" => 70,
  "puntiOspite" => 80,
],
  "matchTwo"  =>[
 "casa" => "milano",
 "ospite" => "bergamo",
 "puntiCasa" => 70,
 "puntiOspite" => 80,
],
   "matchThree" =>[
 "casa" => "milano",
 "ospite" => "bergamo",
 "puntiCasa" => 70,
 "puntiOspite" => 80,
],

];

echo $matches["matchOne"]["casa"];


 ?>
