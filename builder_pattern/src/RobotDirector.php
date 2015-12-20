<?php

namespace Acme;

class RobotDirector
{
    private $robotBuilder;

    public function __construct(RobotBuilder $robotBuilder)
    {
        $this->robotBuilder = $robotBuilder;
    }

    public function getRobot()
    {
        return $this->robotBuilder->getRobot();
    }

    public function makeRobot()
    {
        $this->robotBuilder->buildRobotHead();
        $this->robotBuilder->buildRobotTorso();
        $this->robotBuilder->buildRobotArms();
        $this->robotBuilder->buildRobotLegs();
    }
}