<?php

namespace Xtrasmal\BotOne;

class RotbotArmy
{
    private array $config;

    private function __construct(array $config)
    {
        $this->config = $config;
    }

    public static function initialize(array $config): self
    {
        $config = array_merge(
            [
                'bots' => [
                ]
            ],
            $config
        );

        return new self($config);
    }

    public function run()
    {
        foreach ($this->config['bots'] as $bot) {
            $bot = new $bot();
            $bot->run();
        }
    }
}
