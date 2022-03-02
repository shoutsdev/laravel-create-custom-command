<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class createDummyUsers extends Command
{
    protected $signature = 'create:dummy-users {number}';

    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $usersData = $this->argument('number');
        for ($i = 0; $i < $usersData; $i++) {
            User::factory()->create();
        }
    }
}
