<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$name = "huy";
echo "Hello $name, ";

$zahlA = 5;
$zahlB = 7;
echo "$zahlA * $zahlB ergibt: " .($zahlB*$zahlA);

echo "\n";

$i = 0;
while ($i < 10) {
  echo "$i, ";
  $i++;
}

echo "\n";

for($i = 0;$i < 10;$i++) {
  echo "$i, ";
}

echo "\n";

$zahl = 8;
if($zahl >= 6) {
  echo "groesser gleich 6";
} else {
  echo "kleiner 6";
}

/*echo "\n";

$tage = ["montag","dienstag","mittwoch"];
echo "der 3.Tag : ".$tage[2];

echo "\n";

for($i = 0;$i < count($tage);$i++) {
  echo $tage[$i]." "; 
}
 */
echo "\n";

$tage = ["mo" => "montag","di" => "dienstag","mi" => "mittwoch"];
$tage["do"] = "donnerstag";
echo $tage["di"];
foreach ($tage as $key => $value) {
  echo "$key: $value\n";
}

echo "\n";

$f = fopen('php://stdin','r');
while(! feof($f)) {
  echo fgets($f);
}

echo "\n";

//https://informatik.hs-bremerhaven.de/phatran/php/miniapp2.php?name=huy
$name = $_GET["name"];
echo "Sie sind $name";

