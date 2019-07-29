<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DoNothing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:nothing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example Do Nothing Script.';

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
     * @return mixed
     */
    public function handle()
    {
        $done = $this->confirm('Have you done anything?');
        if( $done ) {
            $this->info('Task complete.');
        }
        if( ! $done ) {
            $this->error('Task incomplete.');
        }
    }
}
