<?php

namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;
use Discord\Parts\Channel\Message;

class MessageUpdate
{
    public function __invoke(Message $message, Discord $discord)
    {
        if ($this->isMessageFromBot($message, $discord)) {
            return;
        }
    }

    public function isMessageFromBot(Message $message, Discord $discord): bool
    {
        return $message->author->id === $discord->id;
    }
}
