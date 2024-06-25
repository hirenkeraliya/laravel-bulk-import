<?php

namespace HirenKeraliya\LaravelBulkImport\Commands;

use Illuminate\Console\Command;

class LaravelBulkImportCommand extends Command
{
    public $signature = 'laravel-bulk-import';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
