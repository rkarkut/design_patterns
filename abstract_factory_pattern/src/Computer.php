<?php

namespace Acme;

abstract class Computer
{
    protected $companyName;

    public function __construct($companyName)
    {
        $this->companyName = $companyName;
    }

    public function turnOn(){}
}