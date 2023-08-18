<?php

namespace Xtrasmal\BotOne\Listeners;

use Discord\Discord;
use Discord\Parts\Thread\Member;

class MemberAdd
{
    public function __invoke(Member $member, Discord $discord)
    {
        $member->user->sendMessage('Welcome to the server!');
    }
}
