<?php
session_start();
if(!isset($_SESSION['number'])) {
  $_SESSION['number'] = 0;
}

$_SESSION['number']++;
echo $_SESSION['number']." Zugriffe in dieser Session\n";
?>
