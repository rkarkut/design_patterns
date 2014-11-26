<?php

// observer - subscriber
// subject - publisher

interface Subject
{
    public function attach(Observer $observer);

    public function detach($index);

    public function notify();
}

interface Observer
{
    public function handle();
}

class Login implements Subject
{

    protected $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }
}

class LogHandler implements Observer
{

    public function handle()
    {
        var_dump('log something important');
    }
}

class EmailHandler implements Observer
{

    public function handle()
    {
        var_dump('fire on an email');
    }
}

class SmsHandler implements Observer
{

    public function handle()
    {
        var_dump('send sms');
    }
}

$login = new Login;
$login->attach(new LogHandler);
$login->attach(new EmailHandler);
$login->attach(new SmsHandler);
$login->notify();