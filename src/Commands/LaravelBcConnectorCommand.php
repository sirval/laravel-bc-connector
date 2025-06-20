<?php

namespace BcConnector\LaravelBcConnector\Commands;

use Illuminate\Console\Command;

class LaravelBcConnectorCommand extends Command
{
    public $signature = 'laravel-bc-connector';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
