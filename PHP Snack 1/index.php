<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali
rappresentano delle partite di basket di un’ipotetica tappa
del calendario. Ogni array della partita avrà una squadra di
casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
  $arrayRisultati = [
      [
        'casa' => 'Reggiana',
        'ospite' => 'Virtus Bologna',
        'puntiCasa' => 62,
        'puntiOspite' => 89,
      ],
      [
        'casa' => 'Treviso',
        'ospite' => 'Brindisi',
        'puntiCasa' => 90,
        'puntiOspite' => 108,
      ],
      [
        'casa' => 'Venezia',
        'ospite' => 'Cantù',
        'puntiCasa' => 80,
        'puntiOspite' => 75,
      ],
      [
        'casa' => 'Trento',
        'ospite' => 'Pesaro',
        'puntiCasa' => 70,
        'puntiOspite' => 81,
      ],
      [
        'casa' => 'Varese',
        'ospite' => 'Cremona',
        'puntiCasa' => 110,
        'puntiOspite' => 105,
      ],
      [
        'casa' => 'Trieste',
        'ospite' => 'Brescia',
        'puntiCasa' => 78,
        'puntiOspite' => 81,
      ],
      [
        'casa' => 'Fortitudo Bologna',
        'ospite' => 'Sassari',
        'puntiCasa' => 79,
        'puntiOspite' => 89,
      ],
  ];

  // var_dump($arrayRisultati);
  $lunghezzaArrayRisultati = count($arrayRisultati);
  // var_dump($lunghezzaArrayRisultati);
  // echo $lunghezzaArrayRisultati;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Snack 1</title>
</head>
<body>

  <h1>Risultati Giornata 17</h1>
  <h3>Italia : Lega A</h3>

  <?php for($i = 0; $i < $lunghezzaArrayRisultati; $i++) {
       $casa = $arrayRisultati[$i]['casa'];
       $ospite = $arrayRisultati[$i]['ospite'];
       $puntiCasa = $arrayRisultati[$i]['puntiCasa'];
       $puntiOspite = $arrayRisultati[$i]['puntiOspite']; ?>

      <h2><?php echo $casa . ' - ' . $ospite . ' | ' . $puntiCasa . ' - ' . $puntiOspite?></h2>
  <?php  }   ?>


</body>
</html>
