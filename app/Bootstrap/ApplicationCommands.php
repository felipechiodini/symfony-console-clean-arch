<?php

namespace App\Bootstrap;

interface ApplicationCommands
{
    public function each(callable $callback);
}