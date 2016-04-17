<?php
  $db = new PDO('sqlite:/var/www/html/ddl.sql');
  $db->exec('INSERT INTO RegistrationInfo' VALUES(programID, personID, numPeople, startDay, startTime, endDay, endTime));
?>
