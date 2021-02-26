<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php


$matches = [
  [
  "casa" => "Olimpia Milano",
  "ospite" => "Cantu",
  "puntiCasa" => 30,
  "puntiOspite" => 40,
],
[
 "casa" => "Olimpia Milano",
 "ospite" => "cantu",
 "puntiCasa" => 100,
 "puntiOspite" => 80,
],
[
 "casa" => "cantu",
 "ospite" => "Olimpia Milano",
 "puntiCasa" => 3,
 "puntiOspite" => 200,
],

];
for ($i=0; $i < count($matches); $i++) {
  echo $matches[$i]["casa"] . '-' .  $matches[$i]["ospite"] . $matches[$i]["puntiCasa"] . '|'. $matches[$i]["puntiOspite"];
}

 ?>

 <br><br><br>

<!--
 Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
 conosciamo nella documentazione) che:
 1. name sia più lungo di 3 caratteri,
 2. mail contenga un punto e una chiocciola
 3. age sia un numero.
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

 <?php

 $name = $_GET["name"];
 $mail = $_GET["mail"];
 $age = $_GET["age"];


 if (strpos($mail, '.') && strpos($mail, '@') && strlen($name) > 3  && is_numeric($age))  {
   echo "Accesso consentito";
 }
 else {
   echo "accesso negato";
 }



  ?>
