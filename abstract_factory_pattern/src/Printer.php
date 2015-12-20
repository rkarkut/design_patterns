<?php

namespace Acme;

abstract class Printer
{
    protected $companyName;

    public function __construct($companyName)
    {
        $this->companyName = $companyName;
    }


    public function printOut($text) {}
}