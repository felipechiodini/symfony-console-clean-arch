<?php

namespace App\Bootstrap;

use App\Commands\ApplicationCommands;
use Framework\CommandRegister;

class Application
{
    public function run()
    {
        $commandRegister = new CommandRegister();
        $appCommands = new ApplicationCommands($commandRegister);
        $commandRegister->register($appCommands);
    }
}