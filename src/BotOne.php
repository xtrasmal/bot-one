<?php

namespace Xtrasmal\BotOne;

use Discord\Discord;
use Discord\Exceptions\IntentException;
use Discord\WebSockets\Event;
use Discord\WebSockets\Intents;

class BotOne
{
    public static function run(string|null $token = null): void
    {
        $token = $token ?? getenv('DISCORD_API_BOT_TOKEN');
        (new self())->letsGo($token);
    }

    private function letsGo(string $token): void
    {
        try {
            $discord = new Discord([
                'token' => $token,
                'intents' => Intents::getAllIntents(),
                'loadAllMembers' => true,
            ]);
        } catch (IntentException $exeption) {
            echo $exeption->getMessage();
            exit;
        }

        $discord->on('ready', function (Discord $discord) {

            echo "Bot is ready!", PHP_EOL;

            $this->setupEvents($discord);

        });

        $discord->run();
    }

    private function setupEvents(Discord $discord): void
    {
        // Messages
        $discord->on(Event::MESSAGE_CREATE, (new Listeners\MessageCreate())(...));
        $discord->on(Event::MESSAGE_UPDATE, (new Listeners\MessageUpdate())(...));
        // Reactions
        $discord->on(Event::MESSAGE_REACTION_ADD, (new Listeners\MessageReactionAdd())(...));
        $discord->on(Event::MESSAGE_REACTION_REMOVE, (new Listeners\MessageReactionRemove())(...));
        $discord->on(Event::MESSAGE_REACTION_REMOVE_ALL, (new Listeners\MessageReactionRemoveAll())(...));
        $discord->on(Event::MESSAGE_REACTION_REMOVE_EMOJI, (new Listeners\MessageReactionRemoveEmoij())(...));
        // Channels
        $discord->on(Event::CHANNEL_CREATE, (new Listeners\ChannelCreate())(...));
        $discord->on(Event::CHANNEL_UPDATE, (new Listeners\ChannelUpdate())(...));
        $discord->on(Event::CHANNEL_DELETE, (new Listeners\ChannelDelete())(...));
        // Guilds
        $discord->on(Event::GUILD_CREATE, (new Listeners\GuildCreate())(...));
        $discord->on(Event::GUILD_UPDATE, (new Listeners\GuildUpdate())(...));
        $discord->on(Event::GUILD_DELETE, (new Listeners\GuildDelete())(...));
        // Members
        $discord->on(Event::GUILD_MEMBER_ADD, (new Listeners\MemberAdd())(...));
        $discord->on(Event::GUILD_MEMBER_REMOVE, (new Listeners\MemberRemove())(...));
        $discord->on(Event::GUILD_MEMBER_UPDATE, (new Listeners\MemberUpdate())(...));
        // Roles
        $discord->on(Event::GUILD_ROLE_CREATE, (new Listeners\RoleCreate())(...));
        $discord->on(Event::GUILD_ROLE_UPDATE, (new Listeners\RoleUpdate())(...));
        $discord->on(Event::GUILD_ROLE_DELETE, (new Listeners\RoleDelete())(...));
        // Webhooks
        $discord->on(Event::WEBHOOKS_UPDATE, (new Listeners\WebhooksUpdate())(...));
        // Presence
        $discord->on(Event::PRESENCE_UPDATE, (new Listeners\PresenceUpdate())(...));
        // Bot user update
        $discord->on(Event::USER_UPDATE, (new Listeners\UserUpdate())(...));
        // Invitations
        $discord->on(Event::INVITE_CREATE, (new Listeners\InviteCreate())(...));
        // Interactions
        $discord->on(Event::INTERACTION_CREATE, (new Listeners\InteractionCreate())(...));
    }

}
