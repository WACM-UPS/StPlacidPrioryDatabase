<?php
  $db = new PDO('sqlite:/var/www/html/database.db');
  $db->exec('INSERT INTO RegistrationInfo' VALUES(programID, personID, numPeople, startDay, startTime, endDay, endTime));
?>
