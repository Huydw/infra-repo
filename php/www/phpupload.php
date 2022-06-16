<?php
$lockfile = fopen("lock","c");
$lock = flock($lockfile, LOCK_EX);
usleep(1000000); //microseconds
flock($lockfile, LOCK_UN);
fclose($lockfile);

$basename = basename($_FILES["diedatei"]["name"]);
$filename = str_replace("/","_",   $basename);
move_uploaded_file($_FILES["diedatei"]["tmp_name"],"private/phpupload/".$basename);

?>

