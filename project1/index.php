<?php
// require_once('./realme/realme2.php');
// require_once('./realme/realme3.php');

// require_once('./redmi/redmi2.php');
// require_once('./redmi/redmi3.php');
// require_once('./redmi/redmi4.php');

require_once('./vendor/autoload.php');

displayModel1();
displayModel2();
displayModel3();

$obj1 = new RealmeMobile();
$obj2 = new RedmiMobile();


// new class


$c1 = new AnimeClass();
$c2 = new MangaClass();
?>