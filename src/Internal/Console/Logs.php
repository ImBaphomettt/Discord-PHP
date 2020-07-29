<?php


namespace DiscordPHP\Internal\Console;

use Carbon\Carbon;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Dylan Malandain
 *
 * Trait ConsoleLogs
 * @package DiscordPHP\Internal
 */
trait Logs
{
    /**
     * @var array[] Custom logs visual style.
     */
    private $style = [
        'information' => ['color' => 'white', 'background' => 'default', 'options' => ['bold', 'blink']],
        'success' => ['color' => 'green', 'background' => 'default', 'options' => ['bold', 'blink']],
        'warning' => ['color' => 'yellow', 'background' => 'default', 'options' => ['bold', 'blink']],
        'info' => ['color' => 'blue', 'background' => 'default', 'options' => ['bold', 'blink']],
        'errors' => ['color' => 'red', 'background' => 'default', 'options' => ['bold', 'blink']],
        'critical' => ['color' => 'red', 'background' => 'default', 'options' => ['underscore', 'blink', 'conceal']]
    ];

    /**
     * @var OutputInterface
     */
    protected $outputInterface;

    public function settings()
    {
        $this->outputInterface = new ConsoleOutput();
        foreach ($this->style as $key => $value) {
            $this->outputInterface->getFormatter()->setStyle($key, new OutputFormatterStyle($value['color'], $value['background'], $value['options']));
        }
        $this->success('Successfully initialised log.');
    }

    /**
     * Write console logs
     *
     * @param string $type Type logs output (information, error, critical, ect..)
     * @param string $message Message console output
     * @param int $options outputInterface writeln options
     */
    private function log(string $type, string $message, int $options = 0): void
    {
        $carbon = Carbon::now();
        $this->outputInterface->writeln("[$carbon] - <$type>$message</$type>", $options);
    }

    /**
     * @param string $message Message console output
     * @return void
     */
    public function warning(string $message): void
    {
        $this->log('warning', $message);
    }

    /**
     * @param string $message Message console output
     * @return void
     */
    public function info(string $message): void
    {
        $this->log('information', $message);
    }

    /**
     * @param string $message Message console output
     * @return void
     */
    public function success(string $message): void
    {
        $this->log('success', $message);
    }

    /**
     * @param string $message Message console output
     * @return void
     */
    public function error(string $message): void
    {
        $this->log('error', $message);
    }

    /**
     * @param string $message Message console output
     * @return void
     */
    public function critical(string $message): void
    {
        $this->log('critical', $message);
    }
}
