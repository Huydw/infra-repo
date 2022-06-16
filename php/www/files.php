<?php
$basename = basename($_FILES["diedatei"]["name"]);
$filename = str_replace("/","_",   $basename);
move_uploaded_file($_FILES["diedatei"]["tmp_name"],"private/phpupload/".$basename);
?>
