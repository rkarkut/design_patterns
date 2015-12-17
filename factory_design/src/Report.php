<?php

namespace Acme;

abstract class Report
{
    private $data;

    public function setData($data)
    {
        $this->data = $data;
    }

    public function amountOfRecords()
    {
        return count($this->data);
    }
}