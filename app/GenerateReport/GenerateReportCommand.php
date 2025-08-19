<?php

namespace App\GenerateReport;

use App\Commands\Command;

class GenerateReportCommand implements Command
{
    public function singnature(): string
    {
        return 'app:generate-report';
    }

    public function execute()
    {
        echo 'Gerando relatório...';
        /**
         * Implementação
         */
    }
}