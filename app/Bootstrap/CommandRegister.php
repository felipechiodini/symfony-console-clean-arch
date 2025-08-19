<?php

namespace App\Bootstrap;

interface CommandRegister
{
    public function register(ApplicationCommands $commands): void;
}