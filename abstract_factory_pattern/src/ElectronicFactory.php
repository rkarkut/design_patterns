<?php

namespace Acme;

interface ElectronicFactory
{
    public function getComputer($type);

    public function getPrinter($type);
}