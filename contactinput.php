<?php
  $db = new SQLite3('ddl.sql');
  $db->exec('INSERT INTO ContactInfo' VALUES(personID, fName, lName, cellNum, homeNum, email, street, city, state, zip));
?>
