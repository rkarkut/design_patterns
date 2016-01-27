<?php

require "vendor/autoload.php";

$television = new \Acme\Television();

$turnTvOnCommand = new \Acme\TurnTvOnCommand($television);

$turnTvOnCommand->execute();

$turnTvOffCommand = new \Acme\TurnTvOffCommand($television);

$turnTvOffCommand->execute();