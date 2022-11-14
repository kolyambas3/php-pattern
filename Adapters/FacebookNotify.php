<?php

namespace App\Adapters;

use App\API\FacebookApi;
use Notification;

class FacebookNotify implements Notification
{
    private $facebook;
    private $chatId;

    public function __construct(FacebookApi $facebook, string $chatId)
    {
        $this->facebook = $facebook;
        $this->chatId = $chatId;
    }

    public function send(string $title, string $message)
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->facebook->logIn();
        $this->facebook->sendMessage($this->chatId, $slackMessage);
    }
}