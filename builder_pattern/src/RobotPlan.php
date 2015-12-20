<?php

namespace Acme;

interface RobotPlan
{
    public function setRobotHead($header);
    public function setRobotTorso($torso);
    public function setRobotArms($arms);
    public function setRobotLegs($legs);
}