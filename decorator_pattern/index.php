<?php

use Acme\PlainPizza;

require "vendor/autoload.php";

$plainPizza = new PlainPizza();

print "\n" . $plainPizza->getDescription().' - ' . $plainPizza->getCost() . "\n";

$mozarellaPizza = new \Acme\Mozarella($plainPizza);

print "\n" . $mozarellaPizza->getDescription().' - ' . $mozarellaPizza->getCost() . "\n";

$mozarellaPizzaWithSouce = new \Acme\TomatoSauce($mozarellaPizza);

print "\n" . $mozarellaPizzaWithSouce->getDescription().' - ' . $mozarellaPizzaWithSouce->getCost() . "\n";
