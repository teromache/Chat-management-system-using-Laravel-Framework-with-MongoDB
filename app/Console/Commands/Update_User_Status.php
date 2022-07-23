<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Update_User_Status extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update_status:weekly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the user status either active or ban';

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
        echo 'Semoga jadi scheduler aku';
    }
}
