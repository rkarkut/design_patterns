<?php

require 'vendor/autoload.php';

// demo example

$shop = new \Acme\ShopFactory();

$acer = $shop->getCompany('acer');

$laptop = $acer->getComputer('laptop');

$laptop->turnOn();

$lenovo = $shop->getCompany('lenovo');

$printer = $lenovo->getPrinter('laser');

$printer->printOut('simple page');