<?php

namespace Framework;

use App\Bootstrap\ApplicationCommands;
use App\Bootstrap\CommandRegister as BootstrapCommandRegister;
use App\Commands\Command;
use Symfony\Component\Console\Application;

class CommandRegister implements BootstrapCommandRegister
{
    public function register(ApplicationCommands $commands): void
    {
        $app = new Application();

        $commands->each(function (Command $command) use (&$app) {
            $app->register($command->singnature())
                ->setCode(function() use ($command) {
                    $command->execute();
                });
        });

        $app->run();
    }
}