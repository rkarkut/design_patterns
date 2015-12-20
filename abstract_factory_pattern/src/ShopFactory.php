<?php

namespace Acme;

class ShopFactory {

    public function getCompany($type)
    {
        if ('acer' === $type) {
            return new AcerFactory();
        }

        if ('lenovo' === $type) {
            return new LenovoFactory();
        }
    }
}