<?php

namespace Acme;

class TonerBasedPrinter extends Printer
{
    public function printOut($text)
    {
        print "\n".$this->companyName." - Toner based printer is printing out text: " . $text;
    }

}