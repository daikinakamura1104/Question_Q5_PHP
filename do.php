<?php
require_once("Fruits.php");
require_once("Market.php");

$fruit = new Fruits();
$market = new Market();

$market->start($fruit);

?>