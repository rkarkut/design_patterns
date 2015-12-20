<?php

namespace Acme;

class LenovoFactory implements ElectronicFactory
{
    public function getComputer($type)
    {
        if ('laptop' === $type) {
            return new LaptopComputer('Lenovo');
        }

        if ('desktop' === $type) {
            return new DesktopComputer('Lenovo');
        }
    }

    public function getPrinter($type)
    {
        if ('laser' === $type) {
            return new LaserPrinter('Lenovo');
        }

        if ('toner' === $type) {
            return new TonerBasedPrinter('Lenovo');
        }
    }
}