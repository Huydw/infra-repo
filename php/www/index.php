<?php
include("utils.php");
writehead();
if(! isset($_GET["name"])) {
  echo "<h1>ich will deinen Namen!</h1>";
  exit;
}
$name=$_GET["name"];
echo "<h1>Du bist also $name\n</h1>"
?>
