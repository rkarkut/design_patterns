<?php

namespace Acme;

class LaptopComputer extends Computer
{
    public function turnOn()
    {
        print "\n".$this->companyName." - Laptop computer is turning on...";
    }

}