<?php

namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;
use Discord\Parts\Guild\Guild;

class GuildUpdate
{
    public function __invoke(Guild $guild, Discord $discord)
    {
    }
}
