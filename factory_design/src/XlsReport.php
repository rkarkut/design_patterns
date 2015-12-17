<?php

namespace Acme;

class XlsReport extends Report {

    public function generate()
    {
        print 'XLS report generated ('.$this->amountOfRecords().')';
    }
}