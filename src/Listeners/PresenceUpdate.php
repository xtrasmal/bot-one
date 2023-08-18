<?php

namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;
use Discord\Parts\WebSockets\PresenceUpdate as PresenceUpdatePart;

class PresenceUpdate
{
    public function __invoke(PresenceUpdatePart $presence, Discord $discord)
    {
        //
    }
}
