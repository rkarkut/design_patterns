<?php

namespace Acme;

class ReportFactory
{
    /**
     * @param string $type
     *
     * @return Report
     */
    public static function generate($type)
    {
        if ('XLS' === $type) {
            return new XlsReport();
        }

        if ('PDF' === $type) {
            return new PdfReport();
        }
    }
}