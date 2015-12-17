<?php

namespace Acme;

class PdfReport extends Report
{
    public function generate()
    {
        print 'PDF report generated (' . $this->amountOfRecords() . ')';
    }
}