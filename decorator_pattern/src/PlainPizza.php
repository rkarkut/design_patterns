<?php

namespace Acme;

class PlainPizza implements Pizza
{

    public function getDescription()
    {
        return 'Middle pizza';
    }

    public function getCost()
    {
        return 24.99;
    }
}