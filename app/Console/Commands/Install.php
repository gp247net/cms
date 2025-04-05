<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install CMS';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->confirm('Are you sure you want to install CMS?')) {   
            $this->info('Installing CMS...');
            //Check command gp247:core-install is exist  
            if (array_key_exists('gp247:core-install', Artisan::all())) {
                $this->info('Installing GP247...');
                $this->call('gp247:core-install', ['--force' => 1]);
            }
            //Check command gp247:front-install is exist
            if (array_key_exists('gp247:front-install', Artisan::all())) {
                $this->info('Installing Front...');
                $this->call('gp247:front-install');
            }
            $this->info('CMS installed successfully');
        }
    }
}
