<?php
$to = $_GET["to"];
$from = $_GET["from"];
$sbj = $_GET["sbj"];
$msg = $_GET["msg"];
$msg = wordwrap($msg, 70, "\r\n");
$msg = str_replace("\n.", "\n..", $msg);
$headers = "From:" . $from;

mail($to, $sbj, $msg, $headers);

echo "<h1>Your message has been sent!</h1>";

?>
