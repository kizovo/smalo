<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Build extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'smalo:build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Smalo Build Process Re-run';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('clear-compiled');
        system('composer dump-autoload -o');
        $this->call('optimize:clear');
        $this->call('optimize');
        $this->call('modelCache:clear');
        $this->call('responsecache:clear');
    }
}
