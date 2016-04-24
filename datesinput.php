<?php
error_reporting{E_ERROR | E_PARSE}
try{
  $db = new PDO('sqlite:/var/www/html/ddl.sql');
  $db->exec("INSERT INTO RegistrationInfo' VALUES('$_POST[programID]', '$_POST[personID]', '$_POST[numPeople]', '$_POST[startDay]', '$_POST[startTime]', '$_POST[endDay]', '$_POST[endTime]')");
  if ($_POST[personID]>1) {
    //redirect to group page
    echo 'You are a group!';
  }

} catch (PDOException $e){
  echo 'Exception:' $e->getMessage();
}
?>
