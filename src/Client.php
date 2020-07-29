<?php

namespace DiscordPHP;


use _HumbugBox5f943a942674\React\EventLoop\Factory;
use _HumbugBox5f943a942674\React\EventLoop\LoopInterface;
use _HumbugBox5f943a942674\React\Socket\Connector;
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
