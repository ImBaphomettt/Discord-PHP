<?php


use DiscordPHP\Client;

include __DIR__ . '/vendor/autoload.php';

$discord = new Client();

$discord->start();
