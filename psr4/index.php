<?php
require('./vendor/autoload.php');

use Product\item1\Books;
use Product\item2\Laptop;
use Product\item2\Mobile;
use Product\item3\subitem\tv;

echo "Testing the PSR-4 concept <br>";

$b = new Books;
$l = new Laptop;
$m = new Mobile;
$t = new tv;
?>