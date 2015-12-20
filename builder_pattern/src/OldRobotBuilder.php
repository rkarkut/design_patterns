<?php

namespace Acme;

class OldRobotBuilder implements RobotBuilder
{
    private $robot;

    public function __construct()
    {
        $this->robot = new Robot();
    }

    public function buildRobotHead()
    {
        $this->robot->setRobotHead('robot head');
    }

    public function buildRobotTorso()
    {
        $this->robot->setRobotTorso('robot torso');
    }

    public function buildRobotArms()
    {
        $this->robot->setRobotArms('robot arms');
    }

    public function buildRobotLegs()
    {
        $this->robot->setRobotLegs('robot leds');
    }

    public function getRobot()
    {
        return $this->robot;
    }
}