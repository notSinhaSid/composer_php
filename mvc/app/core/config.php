<?php

if($_SERVER['SERVER_NAME']=='localhost')
{
    define ('ROOT','http://localhost/composer_php/mvc/public');
}
else
{
    define('ROOT', 'https://www.yourwebsite.com');
}