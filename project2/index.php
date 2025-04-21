<?php
require('./items/item1/books.php');
require('./items/item2/laptop.php');
require('./items/item2/mobile.php');


echo "this is difference betweeen PSR4 and ClassMap<br>";

$b= new Product\books\books();
$l = new laptop();
$m = new mobile();
?>