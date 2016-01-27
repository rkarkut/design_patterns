<?php

namespace Acme;

class DeviceButton {
    
    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function press()
    {
        $this->command->execute();
    }
}