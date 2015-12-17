<?php

use Acme\ReportFactory;

require 'vendor/autoload.php';

$data = [1,2];

$financialReport = ReportFactory::generate('XLS');
$financialReport->setData($data);

$financialReport->generate();


$financialReport = ReportFactory::generate('PDF');
$financialReport->setData($data);

$financialReport->generate();