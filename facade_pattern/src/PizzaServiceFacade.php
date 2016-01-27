<?php

namespace Acme;

class PizzaServiceFacade {

    private $pizzaPrice;
    private $deliveryTime;
    private $pizzaType;

    public function __construct()
    {
        $this->pizzaPrice = new PizzaPrice();
        $this->deliveryTime = new DeliveryTime();
        $this->pizzaType = new PizzaType();
    }

    public function getPizzaPrice($nameOfPizza)
    {
        if (empty($nameOfPizza)) {
            return 0;
        }

        return $this->pizzaPrice->getPrice($nameOfPizza);
    }

    public function getDeliveryTime($address)
    {
        return $this->deliveryTime->getTime($address);
    }

    public function getPizzaTypes()
    {
        return $this->pizzaType->getTypes();
    }
}