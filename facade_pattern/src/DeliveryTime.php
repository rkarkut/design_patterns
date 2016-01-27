<?php
/**
 * Created by PhpStorm.
 * User: rkarkut
 * Date: 27/01/16
 * Time: 18:40
 */

namespace Acme;


class DeliveryTime
{

    public function getTime($address)
    {
        if ('ABC' === $address) {
            return 30;
        }

        return 60;
    }
}