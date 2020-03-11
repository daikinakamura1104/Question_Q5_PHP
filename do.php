<?php
require_once("Fruit.php");
require_once("Market.php");

$fruit = new Fruit();
$market = new Market();

$market->start($fruit);

?>