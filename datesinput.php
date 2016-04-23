<?php
  $db = new PDO('sqlite:/var/www/html/database.db');
  $db->exec("INSERT INTO RegistrationInfo VALUES('$_POST[programID]', '$_POST[personID]', '$_POST[numPeople]', '$_POST[startDay]', '$_POST[startTime]', '$_POST[endDay]', '$_POST[endTime]')");
?>
