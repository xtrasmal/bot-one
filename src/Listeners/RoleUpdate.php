<?php

namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;
use Discord\Parts\Guild\Role;

class RoleUpdate
{
    public function __invoke(Role $role, Discord $discord, ?Role $oldRole)
    {
    }
}
