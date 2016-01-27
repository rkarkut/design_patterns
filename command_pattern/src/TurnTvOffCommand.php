<?php

namespace Acme;

class TurnTvOffCommand implements Command {

    private $device;

    public function __construct(ElectronicDevice $device)
    {
        $this->device = $device;
    }

    public function execute()
    {
        $this->device->off();
    }
}