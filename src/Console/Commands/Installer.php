<?php

namespace JoeriAbbo\Boilerplate\Console\Commands;

use Illuminate\Console\Command;
use JoeriAbbo\Boilerplate\BoilerplatePackageServiceProvider;

class Installer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = BoilerplatePackageServiceProvider::PACKAGE_NAME . ':install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install this package';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Do something here...');
        $this->info('Done!');
        return 0;
    }
}
