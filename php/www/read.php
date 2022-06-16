<?php
$f = fopen( 'php://stdin', 'r');
while (! feof($f)) {
  echo fgets($f);
}
