<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class logsClear extends Command
{

    protected $signature = 'logs:clear';


    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        //
        $files = glob('storage/logs/laravel*.log');

        foreach ($files as $file) {
            if (file_exists($file)) {
                unlink($file);
            }
        }
    }
}
