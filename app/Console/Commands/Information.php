<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Information extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:information';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('== CMS: '.(gp247_composer_get_package_installed()['gp247/cms'] ?? '')."==");
        $this->info('Core: '.(gp247_composer_get_package_installed()['gp247/core'] ?? ''));
        $this->info('Front: '.(gp247_composer_get_package_installed()['gp247/front'] ?? ''));
    }
}
