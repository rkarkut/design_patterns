<?php

namespace Acme;

interface RobotBuilder
{
    public function buildRobotHead();

    public function buildRobotTorso();

    public function buildRobotArms();

    public function buildRobotLegs();

    public function getRobot();
}