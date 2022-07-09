<?php

namespace DanielSpravtsev\BladeSchema\Commands;

use Illuminate\Console\Command;

class BladeSchemaCommand extends Command
{
    public $signature = 'laravel-blade-schema';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
