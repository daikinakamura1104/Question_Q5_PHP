<?php
require_once("Strawberry.php");
require_once("Peach.php");
require_once("Market.php");


$strawberry = new Strawberry();
$peach = new Peach();
$market = new Market();

$market->start($strawberry,$peach);

?>