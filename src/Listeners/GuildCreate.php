<?php

namespace Xtrasmal\BotOne\Listeners;

//When the Bot is first starting and the guilds are becoming available. (unless the listener is put inside after 'ready' event)
//When a guild was unavailable and is now available due to an outage.
//When the Bot joins a new guild.
use Discord\Discord;
use Discord\Parts\Guild\Guild;

class GuildCreate
{
    public function __invoke(object $guild, Discord $discord)
    {
        if (! ($guild instanceof Guild)) {
            // the guild is unavailable due to an outage, $guild is a stdClass
            // {
            //     "id": "",
            //     "unavailable": true,
            // }
            return;
        }

        // the Bot has joined the guild
    }
}
