<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CtcpInputList extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ctcp:input:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List available files to process';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
