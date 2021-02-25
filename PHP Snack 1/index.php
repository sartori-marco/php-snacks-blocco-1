<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php

$matches = [
  [
    'squadraCasa' => 'Milano',
    'squadraOspite' => 'Cantù',
    'puntiCasa' => '50',
    'puntiOspite' => '52'
  ],
  [
    'squadraCasa' => 'Venezia',
    'squadraOspite' => 'Trieste',
    'puntiCasa' => '60',
    'puntiOspite' => '72'
  ],
  [
    'squadraCasa' => 'Sassari',
    'squadraOspite' => 'Bologna',
    'puntiCasa' => '80',
    'puntiOspite' => '92'
  ],
];

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>

   <?php

   for ($i=0; $i <count($matches) ; $i++) {
     $casa = $matches[$i]['squadraCasa'];
     $ospite = $matches[$i]['squadraOspite'];
     $puntiCasa = $matches[$i]['puntiCasa'];
     $puntiOspite = $matches[$i]['puntiOspite']

  ?>

     <h1> <?php echo $casa . ' - '.  $ospite . ' - ' . ' | ' . $puntiCasa . ' - ' . $puntiOspite ; } ?> </h1>






 </body>
 </html>
