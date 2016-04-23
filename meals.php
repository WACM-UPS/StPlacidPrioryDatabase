<?php
  $db = new PDO('sqlite:/var/www/html/database.db');
  $db->exec("INSERT INTO MealInfo VALUES('$_POST[programID]', '$_POST[singleDate]', '$_POST[mealNum]')");
?>
