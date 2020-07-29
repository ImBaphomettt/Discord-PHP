<?php

namespace DiscordPHP;


use DiscordPHP\Internal\Console\Logs;
use Evenement\EventEmitterTrait;
use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;

/**
 * @author Dylan Malandain
 *
 * Class Client
 */
class Client
{
    use EventEmitterTrait;
    use Logs;

    public function __construct()
    {
        $this->settings();
    }

    /**
     * @return void
     */
    public function start(): void
    {
    }

}
