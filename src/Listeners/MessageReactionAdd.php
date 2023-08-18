<?php

namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;
use Discord\Parts\WebSockets\MessageReaction;

class MessageReactionAdd
{
    public function __invoke(MessageReaction $message, Discord $discord)
    {
    }
}
