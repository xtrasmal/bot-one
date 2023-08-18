<?php

namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;
use Discord\Parts\Channel\Channel;
use Discord\Parts\Guild\Guild;

class WebhooksUpdate
{
    public function __invoke(object $guild, Discord $discord, object $channel)
    {
        if ($guild instanceof Guild && $channel instanceof Channel) {
            // $guild and $channel was cached
        } else {
            // $guild and/or $channel was not in cache:
        }
            // {
            //     "guild_id": "" // webhook guild ID
            //     "channel_id": "", // webhook channel ID,
            // }
    }
}
