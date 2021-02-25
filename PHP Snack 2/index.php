<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

<?php

$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$eta = $_GET['eta'];

$accesso = 'Inserisci un nome con più di 3 caratteri';

if (strlen($nome) >3) {
  $accesso = 'Inserisci un email corretta';

  elseif (condition) {
    // code...
  }
}


 ?>
