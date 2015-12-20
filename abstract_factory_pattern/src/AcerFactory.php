<?php

namespace Acme;

class AcerFactory implements ElectronicFactory
{
    public function getPrinter($type)
    {
        if ('laser' === $type) {
            return new LaserPrinter('ACER');
        }

        if ('toner' === $type) {
            return new TonerBasedPrinter('ACER');
        }
    }

    public function getComputer($type)
    {
        if ('laptop' === $type) {
            return new LaptopComputer('ACER');
        }

        if ('desktop' === $type) {
            return new DesktopComputer('ACER');
        }
    }
}