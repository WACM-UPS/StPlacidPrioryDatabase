<?php
  error_reporting(E_ERROR | E_PARSE);
  class MyDB extends SQLite3 {
    function __construct() {
      $this->open('database.db');
    }
  }

  try {
    // prep DB
    $db = new MyDB();
    if (!$db) {
      echo $db->lastErrorMsg();
    }
    else {
      echo "Opened DB successfully\n";
    }

    $sql = file_get_contents('ddl.sql');

    echo "Got file contents\n";

    $db = new PDO('sqlite:/var/www/html/database.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $s = "INSERT INTO ContactInfo VALUES('$_POST[personID]', '$_POST[fname]', '$_POST[lname]', '$_POST[cellNum]', '$_POST[homeNum]', '$_POST[email]', '$_POST[street]', '$_POST[apartment]', '$_POST[city]', '$_POST[state]', '$_POST[zip]')";
    $db->exec($s);
    echo($s);
    $db=null;

    echo "Put info in table\n";

    header('Location: index.html');
  }
  catch(PDOException $e) {
    echo 'Exception: ' .$e->getMessage();
  }
?>
