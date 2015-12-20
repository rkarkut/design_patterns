<?php

namespace Acme;

class DesktopComputer extends Computer
{
    public function turnOn()
    {
        print "\n".$this->companyName." - Desktop computer is turning on...";
    }

}