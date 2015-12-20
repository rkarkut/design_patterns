<?php

namespace Acme;

class Robot implements RobotPlan
{
    private $robotHead;
    private $robotTorso;
    private $robotArms;
    private $robotLegs;

    public function setRobotHead($head)
    {
        $this->robotHead = $head;
    }

    public function setRobotTorso($torso)
    {
        $this->robotTorso = $torso;
    }

    public function setRobotArms($arms)
    {
        $this->robotArms = $arms;
    }

    public function setRobotLegs($legs)
    {
        $this->robotLegs = $legs;
    }

    /**
     * @return mixed
     */
    public function getRobotLegs()
    {
        return $this->robotLegs;
    }

    /**
     * @return mixed
     */
    public function getRobotTorso()
    {
        return $this->robotTorso;
    }

    /**
     * @return mixed
     */
    public function getRobotArms()
    {
        return $this->robotArms;
    }

    /**
     * @return mixed
     */
    public function getRobotHead()
    {
        return $this->robotHead;
    }

}