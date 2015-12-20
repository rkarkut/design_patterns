<?php

namespace Acme;

abstract class ToppingDecorator implements  Pizza {

    protected $basePizza;

    function __construct(Pizza $pizza)
    {
        $this->basePizza = $pizza;
    }


    public function getDescription()
    {

    }

    public function getCost()
    {

    }
}