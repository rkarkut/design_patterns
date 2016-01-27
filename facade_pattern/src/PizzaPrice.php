<?php
/**
 * Created by PhpStorm.
 * User: rkarkut
 * Date: 27/01/16
 * Time: 18:39
 */

namespace Acme;


class PizzaPrice
{

    public function getPrice($nameOfPizza)
    {
        if ('Carbonara' === $nameOfPizza) {
            return 30;
        }

        if ('Margerita' === $nameOfPizza) {
            return 50;
        }
    }
}