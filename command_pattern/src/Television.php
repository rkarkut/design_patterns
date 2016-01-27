<?php

namespace Acme;

class Television implements ElectronicDevice
{
    private $volume = 0;

    public function on()
    {
        print 'Television is on';
    }

    public function off()
    {
        print 'Television is off';
    }

    public function volumeUp()
    {
        $this->volume++;
        print 'Television volume up ' . $this->volume;
    }

    public function volumeDown()
    {
        $this->volume--;
        print 'Television volume down ' . $this->volume;
    }
}