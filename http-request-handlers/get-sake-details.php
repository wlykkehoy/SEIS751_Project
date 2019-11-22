<?php
/* ============================================================
    This code is for retrieving the details for the name of
    the sake passsed in the request from our SQLite3 database.
    It returns a JSON structure with the info.
============================================================ */

  $sakeNameToLookup = $_REQUEST["sakeNameToLookup"];

  $db = new SQLite3("../sqlitedb/sake-data.db");
  if (!$db) {
    die("<h3> Fatal error: Connection to db failed <br></h3>");
  }

  $stmt = "SELECT * FROM sakeData where name = '" . $sakeNameToLookup . "'";
  $theResult = $db->querySingle($stmt, TRUE);
  if (!$theResult) {
    die("<h3> Fatal error: database record for $sakeNameToLookup was not found <br><h3>");
  }

  $theObj->name = $theResult["Name"];
  $theObj->overview = $theResult["Overview"];
  $theObj->tasting_notes = $theResult["TastingNotes"];
  $theObj->food_pairing = $theResult["FoodPairing"];
  $theObj->grade = $theResult["Grade"];
  $theObj->seimaibuai = $theResult["Seimaibuai"];
  $theObj->rice = $theResult["Rice"];
  $theObj->alcohol = $theResult["Alcohol"];
  $theObj->brewery_name = $theResult["BreweryName"];
  $theObj->brewery_location = $theResult["BreweryLocation"];

  $theJSON = json_encode($theObj);

  echo $theJSON;

?>
