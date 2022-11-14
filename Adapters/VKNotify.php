<?php

namespace App\Adapters;

use App\API\SlackApi;
use App\API\VKAPI;
use Notification;

class VKNotify implements Notification
{
    private $vk;
    private $chatId;

    public function __construct(VKAPI $vk, string $chatId)
    {
        $this->vk = $vk;
        $this->chatId = $chatId;
    }

    public function send(string $title, string $message)
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->vk->logIn();
        $this->vk->sendMessage($this->chatId, $slackMessage);
    }
}