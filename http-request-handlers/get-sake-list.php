<?php
/* ============================================================
    This code is for retrieving the list of sake names
    from our SQLite3 database. It returns a JSON array
    containing the names.
============================================================ */

  $db = new SQLite3("../sqlitedb/sake-data.db");
  if (!$db) {
    die("<h3> Fatal error: Connection to db failed <br></h3>");
  }
  
  $result = $db->query("SELECT Name FROM sakeData;");

  $theList = array();
  while($row = $result->fetchArray()) { 
    $theList[] = $row["Name"];
  }

  $theJSON = json_encode($theList);

  echo $theJSON;

?>
