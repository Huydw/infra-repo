<?php
include "private/dbconnection.inc.php";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from demo";
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result)) {
  echo $row['demo_id']." ". $row['name']."\n";
}

mysqli_close($conn);
?>
