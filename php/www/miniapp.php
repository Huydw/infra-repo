<?php
echo "moin\n";
$var=7;

function doSomething($upto) {
  for($i=0;$i < 8;++$i) {
    echo "ich bin bei ".$i."\n";
  } 
}
doSomething(3);

$arr=["eins","zwei","drei"];
for($i=0;$i<$arr.length;++$i) {
  echo "bin im Array bei $i mit Wert:" .$arr[$i];
}
 
$map=["Mo"=>"Montag","Di"=>"Dienstag"];
echo $map["Mo"];

foreach($map as $key => $value) {
  echo $key." = " .$value."\n";
}

?>
