<?php
namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;
use Discord\Parts\Channel\Message;

class MessageCreate
{
    public function __invoke(Message $message, Discord $discord)
    {
        if ($this->isMessageFromBot($message, $discord)) {
            return;
        }

        // next
        $message->react('👍')->done(
            function () use ($message) {
                $message->channel->sendMessage('Reacted with 👍');
            }
        );

    }

    public function isMessageFromBot(Message $message, Discord $discord): bool
    {
        return $message->author->id === $discord->id;
    }
}
