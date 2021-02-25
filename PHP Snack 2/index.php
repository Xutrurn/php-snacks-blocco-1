<!-- PHP Snack 2:

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
Consigli del giorno :nerd_face:
Leggete bene la consegna prima di sviluppare il codice
Procedete sempre a piccoli passi, suddividendo il problema in sotto-problemi
Utilizzate il var_dump e poi toglietelo o commentatelo -->

<!-- Accesso riuscito esempio -> .../index.php?name=aaaa&mail=@.&age=00 -->

<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if (strlen($name) > 3 && strpos($mail, "@") !== false && strpos($mail, ".") !== false && is_numeric($age)) {
$verifica = "Accesso riuscito";
} else {
$verifica = "Accesso negato";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Snack 2</title>
</head>
<body>

  <h1><?php echo $verifica ?></h1>

</body>
</html>
