<?php

namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;
use Discord\Parts\Interactions\Interaction;

class InteractionCreate
{
    public function __invoke(Interaction $interaction, Discord $discord)
    {
        // $interaction->acknowledge();
        // $interaction->reply('Hello World!');
    }
}
