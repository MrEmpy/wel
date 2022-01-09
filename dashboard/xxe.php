<?php
$name = $_GET['name'];

$string = $name;

$xml = simplexml_load_string($string);

echo $xml->asXml(). "\n\n";
?>