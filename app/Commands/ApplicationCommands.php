<?php

namespace App\Commands;

use App\Bootstrap\ApplicationCommands as BootstrapApplicationCommands;
use App\GenerateReport\GenerateReportCommand;

class ApplicationCommands implements BootstrapApplicationCommands
{
    protected $commands = [
        GenerateReportCommand::class
    ];

    public function each(callable $callback)
    {
        array_walk($this->commands, function ($command) use ($callback) {
            $callback(new $command());
        });
    }
}