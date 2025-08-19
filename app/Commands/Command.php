<?php

namespace App\Commands;

interface Command
{
    public function singnature(): string;
    public function execute();
}
