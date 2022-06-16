<?php
header("Content-type: image/png");
$client = stream_socket_client("tcp://194.94.217.97:15100",$errno,$errorMessage);
fwrite($client,$_GET['doc']."\n");
fwrite($client,"\\\\renewcommand{\\\\slogan}{".$_GET['val']."}\n"};

echo stream_get_contents($client);
fclose($client);
