<?php
  $db = new PDO('sqlite:/var/www/html/database.db');
  $db->exec('INSERT INTO ContactInfo' VALUES(personID, fname, lname, cellNum, homeNum, email, street, city, state, zip));
?>
