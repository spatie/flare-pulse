<?php

namespace Spatie\FlarePulse\Commands;

use Illuminate\Console\Command;

class FlarePulseCommand extends Command
{
    public $signature = 'flare-pulse';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
