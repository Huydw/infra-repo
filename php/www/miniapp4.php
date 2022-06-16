<?php
$name = $_POST["name"];
$alter = $_POST["alter"];
file_put_contents("private/namen.txt",$name." ".$alter."\n",FILE_APPEND);
$eintraege=file("private/namen.txt");
for($i = 0;$i < count($eintraege);$i++) {
  echo $i.": ".$eintraege[$i]."<br>";
}
