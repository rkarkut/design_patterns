<?php

namespace Acme;

class LaserPrinter extends Printer
{
    public function printOut($text)
    {
        print "\n".$this->companyName." - Laser printer is printing out text: " . $text;
    }

}