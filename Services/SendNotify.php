<?php

namespace App\Services;

use Notification;

class SendNotify
{
    private $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    public function sendNotify(Notification $notification)
    {
        $notification->send('Title', 'message');
    }
}