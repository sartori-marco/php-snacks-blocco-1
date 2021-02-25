<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

<?php

$nome = $_GET['nome'];
$mail = $_GET['mail'];
$eta = $_GET['eta'];

$accesso = '';



if (strlen($nome) > 3 && strpos($mail, '@') && strpos($mail, '.') && isnumeric($eta)) {
  $accesso = 'Accesso riuscito';
}
else {
  $accesso = 'Accesso negato';
}


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

   <h1> <?php echo $accesso; ?> </h1>

 </body>
 </html>
