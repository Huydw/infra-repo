<?php
include("private/funktion.inc.php");

$name = $_POST["name"];
$alter = $_POST["alter"];

if(isValid($name,$alter)) {
  echo "Das ist in Ordnung...";
} else {
  echo "Das wird nichts...";
}
?>
