<?php

namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;
use Discord\Parts\Guild\Role;

class RoleDelete
{
    public function __invoke(object $role, Discord $discord)
    {
        if ($role instanceof Role) {
            // $role was cached
        }
        // $role was not in cache:
        else {
            // {
            //     "guild_id": "" // role guild ID
            //     "role_id": "", // role ID,
            // }
        }
    }
}
