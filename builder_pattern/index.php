<?php

use Acme\OldRobotBuilder;
use Acme\RobotDirector;

require 'vendor/autoload.php';

$oldStyleRobot = new OldRobotBuilder();

$robotDirector = new RobotDirector($oldStyleRobot);

$robotDirector->makeRobot();

$firstRobot = $robotDirector->getRobot();

print_r($firstRobot);