<?php
  error_reporting(E_ERROR | E_PARSE);
  try {
    // prep DB
    $db = new PDO('sqlite:/var/www/html/database.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("INSERT INTO ContactInfo VALUES('$_POST[personID]', '$_POST[fname]', '$_POST[lname]', '$_POST[cellNum]', '$_POST[homeNum]', '$_POST[email]', '$_POST[street]', '$_POST[apartment]', '$_POST[city]', '$_POST[state]', '$_POST[zip]')");
    $db=null;

    header("Location: /index.html")
  }
  catch(PDOException $e) {
    echo 'Exception: ' .$e->getMessage();
  }
?>
