<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Freshen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'smalo:freshen';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Freshen Smalo API Build Process Re-run';

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
        $this->call('config:cache');
    }
}
