<!-- CONSEGNA -->
<!-- Partiamo dal diagramma della tabella stanze nel db hotel
(usate phpmyadmin per vedere le caratteristiche della tabella) e
creiamo una classe che rifletta la tabella stanze,
 poi la usiamo per stampare in pagina i dati.
I dati anche qui non arrivano da db ma da un array. -->

<?php

  // Includo i files neccessari per l'esecuzione del programma
  require_once(__DIR__ . '/database_stanze.php');
  require_once(__DIR__ . '/stanza.php');

  foreach ( $rooms as $room) {
    $stanza = new Room($room['id'], $room['room_number']);

    var_dump($stanza);
  }
?>
