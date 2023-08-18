<?php

namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;

class GuildDelete
{
    public function __invoke(object $guild, Discord $discord, bool $unavailable)
    {
        if ($unavailable) {
            // the guild is unavailabe due to an outage, $guild is a stdClass
            // {
            //     "guild_id": "",
            //     "unavailable": "",
            // }
        } else {
            // the Bot has been kicked from the guild
        }
    }
}
