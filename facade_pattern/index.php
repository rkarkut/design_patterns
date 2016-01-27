<?php

require 'vendor/autoload.php';

$pizzaServiceFacade = new Acme\PizzaServiceFacade();

$typesOfPizza = $pizzaServiceFacade->getPizzaTypes();

print_r($typesOfPizza);

$priceOfPizza = $pizzaServiceFacade->getPizzaPrice('Carbonara');

print "\nMargerita costs: " . $priceOfPizza . "\n";

$deliveryTime = $pizzaServiceFacade->getDeliveryTime('ABC');

print "Delivery time: " . $deliveryTime . "\n";